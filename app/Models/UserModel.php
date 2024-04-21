<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = UserModel::ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        UserModel::ID,
        UserModel::NAME,
        UserModel::EMAIL,
        UserModel::JOB,
        UserModel::PHONENUMBER,
        UserModel::ADDRESS,
        UserModel::LOGIN,
        UserModel::PASSWORD,
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
    const ID = 'userId';
    const NAME = 'userName';
    const EMAIL = 'userEmail';
    const JOB = 'userJob';
    const PHONENUMBER = 'userPhoneNumber';
    const ADDRESS = 'userAddress';
    const LOGIN = 'userLogin';
    const PASSWORD = 'userPassword';

}
