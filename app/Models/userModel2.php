<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';

    protected $allowedFields = [
        'username', 'email', 'password', 'jenis_kelamin',
        'avatar', 'poin', 'questions_asked', 'answers_given', 'created_at'
    ];

    protected $returnType = 'array';

    // Fungsi tambahan untuk ambil data lengkap user beserta lencana terbaru
    public function getUserProfil($id_user)
    {
        $user = $this->find($id_user);

        if (!$user) {
            return null;
        }

        // Ambil lencana terbaru
        $db = \Config\Database::connect();
        $builder = $db->table('lencana_user');
        $builder->where('id_user', $id_user);
        $builder->orderBy('created_at', 'DESC');
        $builder->limit(1);
        $lencana = $builder->get()->getRowArray();

        $user['lencana'] = $lencana['nama_lencana'] ?? 'Belum ada';

        return $user;
    }
}
