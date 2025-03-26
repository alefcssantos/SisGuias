<?php

namespace App\Database\Migrations;

use App\Models\UserModel;
use CodeIgniter\Database\Migration;

class User extends Migration {
    public function up() {
        $this->forge->addField([
            UserModel::ID => [
                'type' => 'INT',
                'constraint' => 11,
                'usigned' => true,
                'auto_increment' => true
            ],
            UserModel::NAME => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            UserModel::EMAIL => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            UserModel::JOB => [
                'type'=> 'vARCHAR',
                'constraint'=> 255
            ],
            UserModel::PHONENUMBER => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            UserModel::ADDRESS => [
                'type'=> 'VARCHAR',
                'constraint'=> 255
            ],
            UserModel::LOGIN => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            UserModel::PASSWORD => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
        ]);

        $this->forge->addKey(UserModel::ID, true);
        $this->forge->createTable('user');
    }

    public function down() {
        $this->forge->dropTable('user');
    }
}
