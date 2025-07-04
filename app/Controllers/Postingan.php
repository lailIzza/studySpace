<?php

namespace App\Controllers;

class Postingan extends BaseController
{
    public function beranda(): string
    {
        $data =[
            'title' => 'Beranda'
        ];
        return view('postingan/beranda', $data);
    }
    public function buat(): string
    {
        $data =[
            'title' => 'Beranda'
        ];
        return view('postingan/buat', $data);
    }
    public function detail(): string
    {
        $data =[
            'title' => 'Detail Pertanyaan'
        ];
        return view('postingan/detail', $data);
    }
    public function pengumuman(): string
    {
        $data =[
            'title' => 'Pengumuman'
        ];
        return view('postingan/pengumuman', $data);
    }
}
