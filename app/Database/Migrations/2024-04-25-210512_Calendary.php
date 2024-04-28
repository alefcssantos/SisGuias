<?php

namespace App\Database\Migrations;

use App\Models\Scrum\TaskModel as Model;
use CodeIgniter\Database\Migration;

class Calendary extends Migration
{
    public function up()
    {
        $this->forge->addField([
            Model::ID => [
                'type' => 'INT',
                'constraint' => 11,
                'usigned' => true,
                'auto_increment' => true
            ],
            Model::USERID => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            Model::TITLE => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],           
            Model::COLOR => [
                'type'=> 'vARCHAR',
                'constraint'=> 255
            ],
            Model::START => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            Model::END => [
                'type'=> 'VARCHAR',
                'constraint'=> 255
            ],
            Model::ALLDAY => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            Model::STATUS => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            Model::RESPONSIBLE => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
                
        ]);

        $this->forge->addKey(Model::ID, true);
        $this->forge->createTable('tasks');
    }

    public function down()
    {
        $this->forge->dropTable('tasks');
    }
}
