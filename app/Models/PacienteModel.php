<?php

namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model {
    protected $table            = 'pacientes';
    protected $primaryKey       = PacienteModel::ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        PacienteModel::ID,
        PacienteModel::CDR,
        PacienteModel::NOME,
        PacienteModel::DATANASCIMENTO,
        PacienteModel::PESO,
        PacienteModel::ALTURA
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

    // Fields
    const ID = 'pacienteId';
    const CDR = 'pacienteCdr';
    const NOME = 'pacienteNome';
    const DATANASCIMENTO = 'pacienteDataNascimento';
    const PESO = 'pacientePeso';
    const ALTURA = 'pacienteAltura';
}
