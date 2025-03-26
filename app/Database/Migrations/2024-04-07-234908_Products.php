<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration {
    public function up() {
        $this->forge->addField([
            'ProdutoId' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => true,
                'auto_increment' => true
            ],
        
            'Nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        
            'Qtde' => [
                'type' => 'INT'
            ],
        
            'Valor' => [
                'type' => 'DOUBLE'
            ],
        ]);
        
        $this->forge->addKey('ProdutoId', true);
        $this->forge->createTable('produtos');
    }

    public function down() {
        $this->forge->dropTable('produtos');
    }
}
