<?php

namespace App\Models;

use App\Database\Migrations\OrderTicket;
use CodeIgniter\Model;

class ProductOrderModel extends Model
{
    protected $table            = 'productorders';
    protected $primaryKey       = ProductOrderModel::ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        ProductOrderModel::ID,
        ProductOrderModel::ORDER_TICKET_ID,
        ProductOrderModel::NAME,
        ProductOrderModel::QUANTITY,
        ProductOrderModel::UNITY_TYPE,
        ProductOrderModel::UNITY_PRICE,
        ProductOrderModel::TOTAL,
        ProductOrderModel::STATUS        
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Field's
    const ID = 'productOrderId';
    const ORDER_TICKET_ID = 'productOrderOrderTicketId';
    const NAME = 'productOrderName';
    const QUANTITY = 'productOrderQuantity';
    const UNITY_TYPE = 'productOrderUnityType';
    const UNITY_PRICE = 'productOrderUnityPrice';
    const TOTAL = 'productOrderTotal';
    const STATUS = 'productOrderStatus';
}
