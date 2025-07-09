<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotification extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'user_id'    => ['type' => 'INT'],
            'message'    => ['type' => 'TEXT'],
            'is_read'    => ['type' => 'BOOLEAN', 'default' => false],
            'created_at' => ['type' => 'DATETIME'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('notifications');
    }

    public function down()
    {
        $this->forge->dropTable('notifications');
    }
}
