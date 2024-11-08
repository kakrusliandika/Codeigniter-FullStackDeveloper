<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersSessionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'primary_key' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'hits' => [
                'type' => 'INT',
                'default' => 0,
            ],
            'ip' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'perangkat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'browser' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'os' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'code_country' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'country' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'region' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'lat' => [
                'type' => 'DECIMAL',
                'constraint' => '15,10',
                'null' => true,
            ],
            'long' => [
                'type' => 'DECIMAL',
                'constraint' => '15,10',
                'null' => true,
            ],
            'isp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'payload' => [
                'type' => 'TEXT',
            ],
            'last_activity' => [
                'type' => 'INT',
                'index' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->createTable('users_sessions');
    }

    public function down()
    {
        $this->forge->dropTable('users_sessions');
    }
}
