<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePacientesTable extends Migration
{
    public function up()
    {
        // Criando a tabela 'pacientes'
        $this->forge->addField([
            'pacienteId'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true
            ],
            'pacienteCdr'         => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'pacienteNome'        => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pacienteDataNascimento' => [
                'type' => 'DATE',
            ],
            'pacientePeso'        => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',  // Exemplo para peso com duas casas decimais
            ],
            'pacienteAltura'      => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',  // Exemplo para altura com duas casas decimais
            ],
        ]);

        // Definindo a chave primária
        $this->forge->addPrimaryKey('pacienteId');

        // Criando a tabela
        $this->forge->createTable('pacientes');
    }

    public function down()
    {
        // Caso queira desfazer a migration
        $this->forge->dropTable('pacientes');
    }
}
