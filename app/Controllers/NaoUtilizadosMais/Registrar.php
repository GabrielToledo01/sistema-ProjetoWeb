<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Registrar extends BaseController

{

    public function index()
    {

        $data['msg'] = '';
        if($this->request->getMethod() == 'post'){
            $usuarioModel = model("UsuarioModel");
            try{
                $usuarioData = $this->request->getPost();
                if($usuarioModel->save($usuarioData)){
                    $data['msgS'] = 'Usuario criado com sucesso!';
                }
                else{
                    $data['msg'] = 'Erro ao criar usuario!';
                    $data['errors'] = $usuarioModel->errors();   
                }
            }
            catch(Exception $e){
                $data['msg'] = 'Erro ao criar usuario: ' . $e->getMessage();
            }

        }
        return view ('registrar', $data);
    }
}