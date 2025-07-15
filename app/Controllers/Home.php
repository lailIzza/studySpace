<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            if (session()->get('role') === 'admin') {
                return redirect()->to(base_url('dashboard'));
            } else {
                return redirect()->to(base_url('beranda'));
            }
        }

        // Panggil controller Postingan::beranda()
        return redirect()->to(base_url('beranda'));
    }

}
