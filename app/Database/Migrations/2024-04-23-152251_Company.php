<?php

namespace App\Database\Migrations;

use App\Models\CompanyModel;
use CodeIgniter\Database\Migration;

class Company extends Migration {
    public function up() {
        $this->forge->addField([
            CompanyModel::ID => [
                'type' => 'INT',
                'constraint' => 11,
                'usigned' => true,
                'auto_increment' => true
            ],
            CompanyModel::LOGO => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::CPFCNPJ => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::NAME => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::CATEGORY => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::DESCRIPTION => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::WEBSITE => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::EMAIL => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::PHONENUMBER => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::ADDRESS => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],
            CompanyModel::STATUS => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ],

        ]);
    }

    public function down() {
        $this->forge->dropTable('company');
    }
}
