<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanyaanModel extends Model
{
    protected $table      = 'pertanyaan';
    protected $primaryKey = 'id_pertanyaan';
    protected $returnType = 'array';

    public function getDetail($id)
    {
        return $this->select('pertanyaan.*, users.username, users.avatar, kategori.nama_kategori')
                    ->join('users', 'users.id_user = pertanyaan.id_user')
                    ->join('kategori', 'kategori.id_kategori = pertanyaan.id_kategori', 'left')
                    ->where('pertanyaan.id_pertanyaan', $id)
                    ->first();
    }
}
