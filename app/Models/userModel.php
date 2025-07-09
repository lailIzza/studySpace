<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username', 'email', 'password', 'gender',
        'role', 'points', 'avatar_color', 'created_at'
    ];

    public $timestamps = false;
}
