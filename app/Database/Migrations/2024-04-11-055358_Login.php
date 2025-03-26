<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration {
    public function up() {
        $this->forge->addField([
            'LoginId' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => true,
                'auto_increment' => true
            ],
        
            'Usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        
            'Senha' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        ]);
        
        $this->forge->addKey('LoginId', true);
        $this->forge->createTable('login');
    }

    public function down() {
        $this->forge->dropTable('login');
    }
}
