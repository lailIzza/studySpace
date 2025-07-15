<?php

namespace App\Models;

use CodeIgniter\Model;

class SubjectModel extends Model
{
    protected $table      = 'subjects';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'created_at']; // tambahkan created_at kalau kolomnya udah ada
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = ''; // kalau gak ada updated_at
}

