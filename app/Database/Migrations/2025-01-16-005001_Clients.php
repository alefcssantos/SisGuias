<?php

namespace App\Database\Migrations;

use App\Models\ClientModel;
use CodeIgniter\Database\Migration;

class Clients extends Migration {
    public function up() {
        // Criando a tabela clients
        $this->forge->addField([
            // Definindo os campos conforme o modelo
            ClientModel::ID => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            ClientModel::FIRSTNAME => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            ClientModel::EMAIL => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true,
            ],
            ClientModel::PHONENUMBER => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null'       => true,
            ],
            ClientModel::ADDRESS => [
                'type' => 'TEXT',
                'null' => true,
            ],
            ClientModel::CITY => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            ClientModel::STATE => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            ClientModel::POSTALCODE => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            ClientModel::COUNTRY => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            ClientModel::DATEBIRTH => [
                'type' => 'DATE',
                'null' => true,
            ],
            ClientModel::CREATEDATE => [
                'type'    => 'DATE',
            ],
            ClientModel::UPDATEDATE => [
                'type'    => 'DATE',
            ],
        ]);

        // Definindo a chave primária
        $this->forge->addKey(ClientModel::ID, true);

        // Criando a tabela
        $this->forge->createTable('clients');
    }

    public function down() {
        // Remover a tabela clients
        $this->forge->dropTable('clients');
    }
}
