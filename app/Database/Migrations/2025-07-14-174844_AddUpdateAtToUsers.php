<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
                'after'   => 'created_at' // optional: biar rapi urutannya
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'updated_at');
    }
}
