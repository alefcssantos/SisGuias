<?php

namespace App\Database\Migrations;

use App\Models\PacienteModel;
use CodeIgniter\Database\Migration;
use App\Models\GuiaReferenciaModel;

class CreateGuiaReferenciaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            GuiaReferenciaModel::ID => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            GuiaReferenciaModel::PACIENTEID => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            GuiaReferenciaModel::ESTABELECIMENTOORIGEM => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            GuiaReferenciaModel::PRONTUARIOORIGEM => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            GuiaReferenciaModel::ESPECIALIDADE => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            GuiaReferenciaModel::CID => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            GuiaReferenciaModel::QUADROCLINICO => [
                'type'           => 'TEXT',
            ],
            GuiaReferenciaModel::EXAMESREALIZADOS => [
                'type'           => 'TEXT',
            ],
            GuiaReferenciaModel::DIAGNOSTICO => [
                'type'           => 'TEXT',
            ],
            GuiaReferenciaModel::MOTIVOENCAMINHAMENTO => [
                'type'           => 'TEXT',
            ],
            GuiaReferenciaModel::PRIORIDADE => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            GuiaReferenciaModel::MOTIVOPRIORIDADE => [
                'type'           => 'TEXT',
            ],
            GuiaReferenciaModel::MOTIVODEVOLUCAO => [
                'type'           => 'TEXT',
            ],
            GuiaReferenciaModel::DATA => [
                'type'           => 'DATETIME',
            ],
            GuiaReferenciaModel::STATUS => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'default'        => 'triagem',  // Status padrão
            ],
        ]);

        $this->forge->addPrimaryKey(GuiaReferenciaModel::ID);
        $this->forge->addForeignKey(GuiaReferenciaModel::PACIENTEID, 'pacientes', PacienteModel::ID, 'CASCADE', 'CASCADE');
        $this->forge->createTable('guiareferencias');
    }

    public function down()
    {
        $this->forge->dropTable('guiareferencias');
    }
}
