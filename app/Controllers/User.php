<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\AnnouncementModel;

class User extends BaseController
{
    public function profil()
    {
        $userModel = new UserModel();
        $announcementModel = new AnnouncementModel();

        $userId = session()->get('user_id');


        // Cegah jika sesi belum ada
        // if (!$userId) {
        //     return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        // }

        // Ambil data user menggunakan ->first() untuk satu record
        $userData = $userModel->getUserProfile($userId);



        if (!$userData || !is_array($userData) || empty($userData['username'])) {
            return redirect()->to('/login')->with('error', 'Profil tidak ditemukan.');
        }


        // Siapkan data ke view
        $data['user'] = $userData;
        $data['announcements'] = $announcementModel->getUserAnnouncements($userId);
        

        return view('user/profil', $data);
    }
    public function edit()
{
    $userModel = new UserModel();
    $userId = session()->get('user_id'); // Sesuaikan dengan session yang kamu simpan

    $user = $userModel->find($userId);

    if (!$user) {
        return redirect()->to('/login')->with('error', 'Data user tidak ditemukan.');
    }

    return view('user/edit', ['user' => $user]);
}

public function update()
{
    $userModel = new UserModel();
    $userId = session()->get('user_id');

    $validation = \Config\Services::validation();
    $validation->setRules([
        'username' => 'required|min_length[3]',
        'email'    => 'required|valid_email',
        'gender'   => 'required|in_list[male,female]',
        'avatar'   => 'is_image[avatar]|mime_in[avatar,image/png,image/jpg,image/jpeg]|max_size[avatar,1024]' // max 1MB
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('validation', $validation);
    }

    // Proses file upload jika ada
    $avatarFile = $this->request->getFile('avatar');
    $avatarName = null;

    if ($avatarFile && $avatarFile->isValid() && !$avatarFile->hasMoved()) {
        $avatarName = $userId . '_' . time() . '.' . $avatarFile->getExtension();
        $avatarFile->move(ROOTPATH . 'public/uploads/avatar/', $avatarName);
    }

    $updateData = [
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'gender'   => $this->request->getPost('gender')
    ];

    if ($avatarName) {
        $updateData['avatar'] = $avatarName;
    }

    $userModel->update($userId, $updateData);

    return redirect()->to('/user/profil')->with('success', 'Profil berhasil diperbarui!');
}


}
