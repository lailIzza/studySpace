<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePost extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'auto_increment' => true],
            'user_id'      => ['type' => 'INT'],
            'subject_id'   => ['type' => 'INT'],
            'content'      => ['type' => 'TEXT'],
            'type'         => ['type' => 'ENUM', 'constraint' => ['text', 'image'], 'default' => 'text'],
            'image'    => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'reward_point' => ['type' => 'INT', 'default' => 0],
            'created_at'   => ['type' => 'DATETIME'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('posts');
    }

    public function down()
    {
         $this->forge->dropTable('posts');
    }
}
