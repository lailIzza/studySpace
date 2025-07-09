<?php

namespace App\Controllers;

use App\Models\CommentModel;

class Komentar extends BaseController
{
    public function simpan()
    {
    
        $commentModel = new CommentModel();

        $commentModel->insert([
            'post_id'    => $this->request->getPost('post_id'),
            'user_id'    => session()->get('user_id'),
            'content'    => $this->request->getPost('content'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }
}
