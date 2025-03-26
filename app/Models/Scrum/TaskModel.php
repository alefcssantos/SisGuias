<?php

namespace App\Models\Scrum;

use CodeIgniter\Model;

class TaskModel extends Model {
    protected $table            = 'tasks';
    protected $primaryKey       = TaskModel::ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        TaskModel::ID,
        TaskModel::USERID,
        TaskModel::TITLE,
        TaskModel::COLOR,
        TaskModel::START,
        TaskModel::END,
        TaskModel::ALLDAY,
        TaskModel::RESPONSIBLE

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

    //Consts

    const ID = 'id';
    const USERID = 'taskUserId';
    const TITLE = 'title';
    const COLOR = 'color';
    const START = 'start';
    const END = 'end';
    const ALLDAY = 'allDay';
    const STATUS = 'taskSatatus';
    const RESPONSIBLE = 'taskResponsible';
}
