<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\SubjectModel;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        $userModel = new UserModel();
        $postModel = new PostModel();
        $commentModel = new CommentModel();

        $today = date('Y-m-d');

        $data = [
            'totalUsers' => $userModel->countAll(),
            'todayQuestions' => $postModel
                ->where("DATE(created_at)", $today)
                ->countAllResults(),
            'todayAnswers' => $commentModel
                ->where("DATE(created_at)", $today)
                ->countAllResults()
        ];

        return view('admin/dashboard', $data);
    }

    public function user(): string
    {
        $data =[
            'title' => 'Manajemen User'
        ];

        return view('admin/users', $data);
    }

    public function users()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll(); 
        return view('admin/users', $data);
    }

    public function deleteUser($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->to('users')->with('success', 'User berhasil dihapus!');
    }
    public function kategori(): string
    {
        $model = new SubjectModel();

        $data = [
            'title' => 'Kategori',
            'subjects' => $model->findAll()
        ];

        return view('admin/kategori', $data);
    }

    public function addCategory()
    {
        $data = [
            'name' => $this->request->getPost('name')
        ];

        $model = new SubjectModel();
        $inserted = $model->insert($data);

        if (!$inserted) {
            dd('GAGAL INSERT', $model->errors(), $data);
        }

        return redirect()->to(base_url('kategori'))->with('success', 'Kategori berhasil ditambahkan!');

        if ($this->request->getMethod() === 'post') {
            $model = new SubjectModel();

            $model->insert([
                'name' => $this->request->getPost('name')
            ]);

            return redirect()->to('kategori')->with('success', 'Kategori berhasil ditambahkan!');
        }

        return redirect()->to('kategori');
    }

    public function deleteCategory($id)
    {
        $model = new SubjectModel();

        if ($model->delete($id)) {
            return redirect()->to(base_url('kategori'))->with('success', 'Kategori berhasil dihapus!');
        }

        return redirect()->to(base_url('kategori'))->with('error', 'Gagal menghapus kategori.');
    }


    public function profil(): string
    {
        $data =[
            'title' => 'Profil'
        ];

        return view('admin/profil', $data);
    }
}
