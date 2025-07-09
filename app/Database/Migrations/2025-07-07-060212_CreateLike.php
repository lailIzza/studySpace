<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLike extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'user_id'    => ['type' => 'INT'],
            'post_id'    => ['type' => 'INT'],
            'created_at' => ['type' => 'DATETIME'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('likes');
    }

    public function down()
    {
        $this->forge->dropTable('likes');
    }
}
