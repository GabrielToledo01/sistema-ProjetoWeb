<?php

namespace App\Models;

use CodeIgniter\Model;

class AnamneseModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'anamnese';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['responsavel','paciente','data','hora','curso','email','idade','data_nascimento','telefone','periodo_turno',
    'responsavel_ficha','descricao','historico','historico_familia','relacao_familiar'];

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
}
