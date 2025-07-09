<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table            = 'comments'; // sesuaikan dengan nama tabel
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['post_id', 'user_id', 'content', 'created_at'];
    protected $useTimestamps    = false; // karena kita pakai created_at manual
}
