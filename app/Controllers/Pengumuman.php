<?php

namespace App\Controllers;

use App\Models\AnnouncementModel;

class Pengumuman extends BaseController
{
    public function pengumuman()
    {

        $userId = session()->get('user_id');
        $model = new AnnouncementModel();

        $pengumuman = $model->select('announcements.*, users.username, users.avatar_color')
            ->join('users', 'users.id = announcements.user_id')
            ->where('announcements.user_id', session()->get('user_id'))
            ->orderBy('announcements.created_at', 'DESC')
            ->findAll();

        return view('postingan/pengumuman', [
            'title' => 'Pengumuman',
            'pengumuman' => $pengumuman
        ]);
    }
}
