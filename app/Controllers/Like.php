<?php

namespace App\Controllers;

use App\Models\LikeModel;
use App\Models\PostModel;
use App\Models\UserModel;
use App\Models\AnnouncementModel;

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
        $postModel = new PostModel();
        $userModel = new UserModel();
        $announcementModel = new AnnouncementModel();

        $post = $postModel->find($postId);
        if (!$post) {
            return redirect()->back()->with('error', 'Postingan tidak ditemukan.');
        }

        $postOwnerId = $post['user_id'];

        // Cek apakah user sudah like
        $existing = $likeModel->where('user_id', $userId)
                              ->where('post_id', $postId)
                              ->first();

        if ($existing) {

            $likeModel->delete($existing['id']); // Hapus like

            $userModel->reducePoints($userId); // Kurangi poin pemilik post

            session()->setFlashdata('success', 'Like berhasil dibatalkan.');
        } else {

            // Tambah like
            $likeModel->insert([
                'user_id' => $userId,
                'post_id' => $postId,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            // Tambah poin ke user yg post
           $userModel->addPoints($userId);

            // Tambahkan pengumuman
            $announcementModel->save([
                'user_id' => $postOwnerId,
                'type' => 'point',
                'title' => 'Poin baru didapatkan!',
                'content' => 'Selamat, kamu mendapat 1 poin karena pertanyaanmu disukai!',
                'created_at' => date('Y-m-d H:i:s')
            ]);

            session()->setFlashdata('success', 'Pertanyaan berhasil disukai!');
        }

        return redirect()->back();
    }
}
