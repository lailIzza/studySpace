<?php

namespace App\Models;

use CodeIgniter\Model;

class JawabanModel extends Model
{
    protected $table      = 'jawaban';
    protected $primaryKey = 'id_jawaban';
    protected $returnType = 'array';

    public function getByPertanyaan($id_pertanyaan)
    {
        return $this->select('jawaban.*, users.username, users.avatar')
                    ->join('users', 'users.id_user = jawaban.id_user')
                    ->where('jawaban.id_pertanyaan', $id_pertanyaan)
                    ->orderBy('jawaban.created_at', 'ASC')
                    ->findAll();
    }
}
