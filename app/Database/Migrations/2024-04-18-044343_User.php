<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'userId' => [
                'type' => 'INT',
                'constraint' => 11,
                'usigned' => true,
                'auto_increment' => true
            ],
            'userName' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'userEmail' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],           
            'userJob'=> [
                'type'=> 'vARCHAR',
                'constraint'=> 255
            ],
            'userPhoneNumber' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'userAddress' => [
                'type'=> 'VARCHAR',
                'constraint'=> 255
            ],
            'userLogin' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
        ]);

        $this->forge->addKey('userId', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}