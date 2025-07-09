<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdAndTypeToAnnouncements extends Migration
{
    public function up()
    {
        $this->forge->addColumn('announcements', [
            'user_id' => [
                'type' => 'INT',
                'after' => 'id'
            ],
            'type' => [
                'type'       => 'ENUM',
                'constraint' => ['point', 'jawaban', 'sistem'],
                'default'    => 'sistem',
                'after'      => 'user_id'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('announcements', ['user_id', 'type']);
    }
}
