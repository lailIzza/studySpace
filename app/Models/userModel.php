<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username',
        'email',
        'password',
        'gender',
        'role',
        'points',
        // 'avatar',
        'avatar_color',
        'created_at'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getUserProfile($userId)
    {
        $db = \Config\Database::connect();
        $user = $this->where('id', $userId)->first();

        if (!$user || !is_array($user)) {
            return null; // biar controller bisa menangani kasus ini
        }

        $postCount = $db->table('posts')->where('user_id', $userId)->countAllResults();
        // $answerCount = $db->table('answers')->where('user_id', $userId)->countAllResults();

        // $badge = $db->table('users')->where('id', $user['badge_id'])->get()->getRowArray();
        $lencanaNama = $badge['name'] ?? 'Belum ada';

        return array_merge($user, [
            'post_asked' => $postCount,
            // 'answers_given' => $answerCount,
            // 'lencana' => $lencanaNama 
        ]);

    }

}
