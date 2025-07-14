<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login(): string
    {
        return view('auth/login');
    }
    public function daftar(): string
    {
        return view('auth/daftar');
    }
    public function processRegister()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $email    = $this->request->getPost('email');
        $gender   = $this->request->getPost('gender');
        $password = $this->request->getPost('password');

        if (!$username || !$email || !$password || !$gender) {
            return redirect()->back()->with('error', 'Semua field wajib diisi!');
        }

        // untuk cek apakah ada email lain yg sudah terdaftar
        if ($userModel->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email sudah digunakan!');
        }

        // Avatar color random
        $avatarColor = sprintf("#%06X", mt_rand(0, 0xFFFFFF));

        // Simpan user
        $userModel->insert([
            'username'     => $username,
            'email'        => $email,
            'password'     => password_hash($password, PASSWORD_DEFAULT),
            'gender'       => $gender,
            'role'         => 'user',
            'points'       => 0,
            'avatar_color' => $avatarColor,
            'created_at'   => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/login')->with('success', 'Pendaftaran berhasil!');
    }
    public function processLogin()
    {
        $userModel = new UserModel();

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan!');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah!');
        }

        // Set session
        session()->set([
            'isLoggedIn' => true,
            'user_id'    => $user['id'],
            'username'   => $user['username'],
            'role'       => $user['role'],
            'avatar_color' => $user['avatar_color'],
        ]);

        //role redirect tiap user
        if ($user['role'] === 'admin') {
        return redirect()->to('dashboard');
        } else {
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
