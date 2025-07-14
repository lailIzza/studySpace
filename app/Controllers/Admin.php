<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        return view('admin/dashboard');
    }
}
