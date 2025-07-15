<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCreatedAtToSubjects extends Migration
{
    public function up()
    {
        $this->forge->addColumn('subjects', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('subjects', 'created_at');
    }
}
