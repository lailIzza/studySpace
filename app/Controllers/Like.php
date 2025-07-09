<?php

namespace App\Controllers;

use App\Models\LikeModel;

class Like extends BaseController
{
    public function toggle()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->back()->with('error', 'Silakan login untuk menyukai pertanyaan.');
        }

        $userId = session()->get('user_id');
        $postId = $this->request->getPost('post_id');

        $likeModel = new LikeModel();

        // Cek apakah user sudah like
        $existing = $likeModel->where('user_id', $userId)
                              ->where('post_id', $postId)
                              ->first();

        if ($existing) {
            // Hapus like
            $likeModel->delete($existing['id']);
            session()->setFlashdata('success', 'Like berhasil dibatalkan.');
        } else {
            // Tambah like
            $likeModel->insert([
                'user_id' => $userId,
                'post_id' => $postId,
                'created_at' => date('Y-m-d H:i:s')
            ]);
            session()->setFlashdata('success', 'Pertanyaan berhasil disukai!');
        }

        return redirect()->back();
    }
}
