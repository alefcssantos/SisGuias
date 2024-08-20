<?php

namespace App\Database\Migrations;

use App\Models\OrderTicketModel;
use CodeIgniter\Database\Migration;
use App\Models\ProductOrderModel;


class ProductOrder extends Migration
{
    public function up()
    {
        $this->forge->addField([
            ProductOrderModel::ID => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => TRUE,
                'auto_increment' => TRUE             
            ],

            ProductOrderModel::ORDER_TICKET_ID => [
                'type'       => 'INT',
                'constraint' => 11,
                'usigned' => TRUE
            ],

            ProductOrderModel::NAME => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],

            ProductOrderModel::QUANTITY => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],

            ProductOrderModel::UNITY_TYPE => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],

            ProductOrderModel::UNITY_PRICE => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],

            ProductOrderModel::TOTAL => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],

            ProductOrderModel::STATUS => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],

        ]);

        $this->forge->addKey(ProductOrderModel::ID, TRUE);
        $this->forge->addForeignKey(ProductOrderModel::ORDER_TICKET_ID, 'ordertickets', OrderTicketModel::ID, 'CASCADE', 'CASCADE');
        $this->forge->createTable('productorders');
    }

    public function down()
    {
        $this->forge->dropTable('productorders');
    }
}
