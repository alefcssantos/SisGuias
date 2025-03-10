<?php

namespace App\Models;

use CodeIgniter\Model;

class GuiaReferenciaModel extends Model
{
    protected $table            = 'guiareferencias';
    protected $primaryKey       = GuiaReferenciaModel::ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        GuiaReferenciaModel::ID,
        GuiaReferenciaModel::PACIENTEID,
        GuiaReferenciaModel::PRONTUARIOORIGEM,
        GuiaReferenciaModel::ESPECIALIDADE,
        GuiaReferenciaModel::CID,
        GuiaReferenciaModel::QUADROCLINICO,
        GuiaReferenciaModel::EXAMESREALIZADOS,
        GuiaReferenciaModel::DIAGNOSTICO,
        GuiaReferenciaModel::MOTIVOENCAMINHAMENTO,
        GuiaReferenciaModel::PRIORIDADE,
        GuiaReferenciaModel::MOTIVOPRIORIDADE,
        GuiaReferenciaModel::MOTIVODEVOLUCAO,
        GuiaReferenciaModel::DATA,
        GuiaReferenciaModel::STATUS
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
    const ID = 'guiaReferenciaId';
    const PACIENTEID = 'guiaReferenciaPacienteId';
    const ESTABELECIMENTOORIGEM = 'guiaReferenciaEstabelecimentoOrigem';
    const PRONTUARIOORIGEM = 'guiaReferenciaProntuarioOrigem';
    const ESPECIALIDADE = 'guiaReferenciaEspecialidade';
    const CID = 'guiaReferenciaCid';
    const QUADROCLINICO = 'guiaReferenciaQuadroClinico';
    const EXAMESREALIZADOS = 'guiaReferenciaExamesRealizados';
    const DIAGNOSTICO = 'guiaReferenciaDiagnostico';
    const MOTIVOENCAMINHAMENTO = 'guiaReferenciaMotivoEncaminhamento';
    const PRIORIDADE = 'guiaReferenciaPrioridade';
    const MOTIVOPRIORIDADE = 'guiaReferenciaMotivoPrioridade';
    const MOTIVODEVOLUCAO = 'guiaReferenciaMotivoPrioridade';
    const DATA = 'guiaReferenciaData';
    const STATUS = 'guiaReferenciaStatus';
}
