<?php

namespace App\Controllers;

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
}
