<?php

namespace App\Controllers;

class User extends BaseController
{
    public function profil(): string
    {
        return view('user/profil');
    }
}
