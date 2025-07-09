<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'auto_increment' => true],
            'username'      => ['type' => 'VARCHAR', 'constraint' => 100],
            'email'         => ['type' => 'VARCHAR', 'constraint' => 100],
            'password'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'gender'        => ['type' => 'ENUM', 'constraint' => ['male', 'female']],
            'role'          => ['type' => 'ENUM', 'constraint' => ['user', 'admin'], 'default' => 'user'],
            'points'        => ['type' => 'INT', 'default' => 0],
            'avatar_color'  => ['type' => 'VARCHAR', 'constraint' => 7, 'null' => true],
            'created_at'    => ['type' => 'DATETIME'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
