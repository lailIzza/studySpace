<?php

namespace App\Controllers;

class Postingan extends BaseController
{
    public function beranda(): string
    {
        $postModel = new \App\Models\PostModel();
        $subjectModel = new \App\Models\SubjectModel();

        $posts = $postModel->select('posts.id, posts.user_id, posts.subject_id, posts.content, posts.image, posts.type, posts.reward_point, posts.created_at, users.username, users.avatar_color, subjects.name as subject_name')
            ->join('users', 'users.id = posts.user_id')
            ->join('subjects', 'subjects.id = posts.subject_id')
            ->orderBy('posts.created_at', 'DESC')
            ->findAll();

        // dd($posts[0]);
        $subjects = $subjectModel->findAll();

        $likeModel = new \App\Models\LikeModel();
        $commentModel = new \App\Models\CommentModel();

        $likeCounts = [];
        $commentCounts = [];

        foreach ($posts as $post) {
            $likeCounts[$post['id']] = $likeModel->where('post_id', $post['id'])->countAllResults();
            $commentCounts[$post['id']] = $commentModel->where('post_id', $post['id'])->countAllResults();
        }

        return view('postingan/beranda', [
            'title' => 'Beranda',
            'posts' => $posts,
            'subjects' => $subjects,
            'likes' => $likeCounts,
            'comments' => $commentCounts,
            'mode' => 'default'
        ]);

    }
    public function filterKategori($id)
    {
        $postModel = new \App\Models\PostModel();
        $subjectModel = new \App\Models\SubjectModel();

        $posts = $postModel->select('posts.*, users.username, users.avatar_color, subjects.name as subject_name')
            ->join('users', 'users.id = posts.user_id')
            ->join('subjects', 'subjects.id = posts.subject_id')
            ->where('posts.subject_id', $id)
            ->orderBy('posts.created_at', 'DESC')
            ->findAll();

        $subjects = $subjectModel->findAll();
        $selected = $subjectModel->find($id); // Buat nampilin nama kategori yang dipilih

        return view('postingan/beranda', [
            'title'     => 'Beranda - ' . $selected['name'],
            'posts'     => $posts,
            'subjects'  => $subjects,
            'selected'  => $selected['name'],
            'mode'     => 'kategori'
        ]);
    }

    public function search()
    {
        $keyword = $this->request->getGet('q');
        $postModel = new \App\Models\PostModel();
        $subjectModel = new \App\Models\SubjectModel();

        $posts = $postModel->select('posts.*, users.username, users.avatar_color, subjects.name as subject_name')
            ->join('users', 'users.id = posts.user_id')
            ->join('subjects', 'subjects.id = posts.subject_id')
            ->like('posts.content', $keyword)
            ->orderBy('posts.created_at', 'DESC')
            ->findAll();

        $subjects = $subjectModel->findAll();

        return view('postingan/beranda', [
            'title'    => 'Hasil Pencarian',
            'posts'    => $posts,
            'subjects' => $subjects,
            'selected' => 'Hasil untuk: ' . esc($keyword),
            'mode'     => 'search'
        ]);
    }

    public function buat(): string
    {

        $subjectModel = new \App\Models\SubjectModel();
        $subjects = $subjectModel->findAll();

        $data =[
            'title' => 'Beranda',
            'subjects' => $subjects,
        ];

        return view('postingan/buat', $data);
    }
    public function detail($id)
    {
        $postModel     = new \App\Models\PostModel();
        $userModel     = new \App\Models\UserModel();
        $subjectModel  = new \App\Models\SubjectModel();
        $commentModel  = new \App\Models\CommentModel();
        $likeModel = new \App\Models\LikeModel();

        // total like untuk post ini
        $likeCount = $likeModel->where('post_id', $id)->countAllResults();

        // apakah user sudah like?
        $liked = false;
        if (session()->get('isLoggedIn')) {
            $liked = $likeModel->where('post_id', $id)
                            ->where('user_id', session()->get('user_id'))
                            ->first() ? true : false;
        }

        // Ambil data post + user + mapel
        $post = $postModel->select('posts.*, users.username, users.avatar_color, subjects.name as subject_name')
            ->join('users', 'users.id = posts.user_id')
            ->join('subjects', 'subjects.id = posts.subject_id')
            ->where('posts.id', $id)
            ->first();

        // Cek kalau data gak ada
        if (!$post) {
            return redirect()->to('/')->with('error', 'Pertanyaan tidak ditemukan.');
        }

        // Ambil komentar (jawaban)
        $comments = $commentModel->select('comments.*, users.username, users.avatar_color')
            ->join('users', 'users.id = comments.user_id')
            ->where('comments.post_id', $id)
            ->orderBy('comments.created_at', 'ASC')
            ->findAll();

        return view('postingan/detail', [
            'title'    => 'Detail Pertanyaan',
            'post'     => $post,
            'jawaban'  => $comments,
            'likeCount'=> $likeCount,
            'liked'    => $liked
        ]);
    }

    public function pengumuman(): string
    {
        $data =[
            'title' => 'Pengumuman'
        ];
        return view('postingan/pengumuman', $data);
    }

    public function store()
    {
        $content  = $this->request->getPost('content');
        $subject_id = $this->request->getPost('subject_id');
        $reward_point = (int) $this->request->getPost('reward_point');
        $image      = $this->request->getFile('image');

        // Validasi poin cukup
        $userModel = new \App\Models\UserModel();
        $userId = session()->get('user_id');
        $user = $userModel->find($userId);

        if ($user['points'] < $reward_point) {
            return redirect()->back()->with('error', 'Poin kamu tidak cukup untuk memberikan reward ini.');
        }

        // Upload gambar (jika ada)
        $imageName = null;
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('upload/', $imageName); // Pastikan folder /public/uploads/ ada
        }

        // Simpan postingan
        $postModel = new \App\Models\PostModel();
        $postModel->insert([
            'user_id'     => $userId,
            'content'  => $content,
            'subject_id'  => $subject_id,
            'image'      => $imageName,
            'reward_point'      => $reward_point,
            'created_at'  => date('Y-m-d H:i:s')
        ]);

        // Kurangi poin user
        $userModel->update($userId, [
            'points' => $user['points'] - $reward_point
        ]);

        return redirect()->to('/')->with('success', 'Pertanyaan berhasil diajukan!');
    }

}
