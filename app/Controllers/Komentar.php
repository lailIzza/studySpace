<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Models\PostModel;
use App\Models\UserModel;
use App\Models\AnnouncementModel;

class Komentar extends BaseController
{
    public function simpan()
    {
        $commentModel = new CommentModel();
        $postModel = new PostModel();
        $userModel = new UserModel();
        $announcementModel = new AnnouncementModel();

        $postId = $this->request->getPost('post_id');
        $commenterId = session()->get('user_id');

        // Ambil data post & reward
        $post = $postModel->find($postId);
        $postOwnerId = $post['user_id'];
        $rewardPoint = (int) $post['reward_point'];

        // Cek apakah user cukup poin
        $owner = $userModel->find($postOwnerId);
        if ($owner['points'] < $rewardPoint) {
            return redirect()->back()->with('error', 'Pemilik pertanyaan tidak memiliki cukup poin untuk diberikan.');
        }

        // Simpan komentar
        $commentModel->insert([
            'post_id'    => $postId,
            'user_id'    => $commenterId,
            'content'    => $this->request->getPost('content'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        $userModel->reducePoints($postOwnerId, $rewardPoint);   // - point ke pemilik
        $userModel->addPoints($commenterId, $rewardPoint);      // + poin ke komen

        $commenter = $userModel->find($commenterId);

        // Pengumuman untuk user yg komen
        $announcementModel->save([
            'user_id'    => $commenterId,
            'type'       => 'point',
            'title'      => 'Poin baru didapatkan!',
            'content'    => "Kamu mendapat $rewardPoint poin karena menjawab pertanyaan!",
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // Pengumuman untuk user yg posting
        $announcementModel->save([
            'user_id'    => $postOwnerId,
            'type'       => 'point',
            'title'      => 'Poin dikurangi!',
            'content'    => "Postinganmu mendapat komentar dari @" . $commenter['username'] . ", dan $rewardPoint poin telah dikurangi dari akunmu.",
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan dan poin sudah diproses!');
        
    }
}