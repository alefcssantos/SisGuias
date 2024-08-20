<?php

namespace App\Models;

use App\Database\Migrations\OrderTicket;
use CodeIgniter\Model;

class OrderTicketModel extends Model
{
    protected $table            = 'ordertickets';
    protected $primaryKey       = OrderTicketModel::ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        OrderTicketModel::ID,
        OrderTicketModel::DATE,
        OrderTicketModel::CLIENT,
        OrderTicketModel::DESCRIPTION,
        OrderTicketModel::STATUS
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
    const ID = 'orderTicketId';
    //const ORDER_ID = 'orderTicketOrder';
    const DATE = 'orderTicketDate';
    const CLIENT = 'orderTicketClient';
    const DESCRIPTION = 'orderTicketDescription';
    const STATUS = 'orderTicketStatus';

}
