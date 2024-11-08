<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersResetTokensTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('username', 'users', 'username', 'CASCADE', 'CASCADE');
        $this->forge->createTable('users_reset_tokens');
    }

    public function down()
    {
        $this->forge->dropTable('users_reset_tokens');
    }
}
