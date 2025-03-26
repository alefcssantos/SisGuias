<?php

namespace App\Database\Migrations;

use App\Models\OrderTicketModel;
use CodeIgniter\Database\Migration;

class OrderTicket extends Migration {
    public function up() {
        $this->forge->addField([
            OrderTicketModel::ID => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => true,
                'auto_increment' => true
            ],
            OrderTicketModel::DATE => [
                'type' => 'date'
            ],
            OrderTicketModel::CLIENT => [
                'type' => 'VARCHAR',
                'constraint' => 255,

            ],
            OrderTicketModel::DESCRIPTION => [
                'type'  => 'VARCHAR',
                'constraint' => 255,
            ],
            OrderTicketModel::STATUS => [
                'type'  => 'VARCHAR',
                'constraint' => 255,
            ],

        ]);

        $this->forge->addKey(OrderTicketModel::ID, true);
        $this->forge->createTable('ordertickets');
    }

    public function down() {
        $this->forge->dropTable('ordertickets');
    }
}
