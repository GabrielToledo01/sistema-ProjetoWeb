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
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nome','matricula','senha','perfil'];

    // Validation
    protected $validationRules = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashSenha'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // metodo senha criptografada
    protected function hashSenha($data){
       $data['data']['senha']= password_hash($data['data']['senha'],PASSWORD_DEFAULT);
        return $data;    
    }

    public function check($matricula, $senha){

	    //Buscar o usuario
	    $buscaUsuario = $this->where('matricula', $matricula)->first();
	    if(is_null($buscaUsuario)){
		    return false;
	    }

	    //Validar a senha
	    if(! password_verify($senha, $buscaUsuario->senha)){
		return false;
	    }
	    return $buscaUsuario;
    }
    
}

?>

