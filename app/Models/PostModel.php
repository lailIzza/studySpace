<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table      = 'posts';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id', 'content', 'subject_id', 'image', 'reward_point', 'created_at'
    ];

    public $timestamps = false;
}
