<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table            = 'clients';
    protected $primaryKey       = ClientModel::ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        ClientModel::ID,
        ClientModel::FIRSTNAME,
        ClientModel::EMAIL,
        ClientModel::PHONENUMBER,
        ClientModel::ADDRESS,
        ClientModel::CITY,
        ClientModel::STATE,
        ClientModel::POSTALCODE,
        ClientModel::COUNTRY,
        ClientModel::DATEBIRTH,
        ClientModel::CREATEDATE,
        ClientModel::UPDATEDATE,
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

    // My const's row
    const ID = 'clientId';
    const FIRSTNAME = 'clientName';
    const EMAIL = 'clientEmail';
    const PHONENUMBER = 'clientPhoneNumber';
    const ADDRESS = 'clientAddress';
    const CITY = 'clientCity';
    const STATE = 'clientState';
    const POSTALCODE = 'clientPostalCode';
    const COUNTRY = 'clientCountry';
    const DATEBIRTH = 'clientDateBirth';
    const CREATEDATE = 'clientCreated';
    const UPDATEDATE = 'clientUpdated';
}
