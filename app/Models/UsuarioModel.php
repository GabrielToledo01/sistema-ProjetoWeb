<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'objetc';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nome','usario','senha','perfil'];

    // Dates
/*    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
*/
    // Validation
    protected $validationRules = [
        'nome'=>'required',
        'usuario'=>'required|is_unique[usuario.usario]',
        'senha'=> 'required',
        'perfil'=> 'required'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashsenha'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

// metodo senha criptografada
    protected function hashsenha($data){
        $data['data']['senha']= password_hash(['data']['senha'],PASSWORD_DEFAULT);
        return $data;    
    }
    public function check($usuario,$senha){
        //busca o ususario
        $buscaUsuario= $this->where('usuario', $usuario)->first();
        if(is_null($buscaUsuario)){
            return false;
        }
        //validar senha
        if(!password_verify($senha,$buscaUsuario->senha)){
            return false;
        }
        return $buscaUsuario;


    }
}

