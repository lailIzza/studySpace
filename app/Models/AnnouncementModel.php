<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnouncementModel extends Model
{
    protected $table = 'announcements';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'type', 'title', 'content', 'created_at'];
    public $timestamps = false;
}
