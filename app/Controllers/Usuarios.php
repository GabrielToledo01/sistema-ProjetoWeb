<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\UsuarioModel;

class Usuarios extends BaseController

{

    private $usuarioModel;
    private $createModel;

    public function __construct(){
        $this->usuarioModel = new UserModel();
        $this->createModel = new UsuarioModel();
    }

    public function index(){

        return view('usuarios', [
            'usuarios' => $this->usuarioModel->findAll()
        ]);
    }

    public function delete($id){
        if($this->usuarioModel->delete($id)){
            echo view('messages', ['messages'=> 'Usuário excluido com sucesso!']);
        }

        else{
            echo "Erro.";
        }
    }

    public function create(){

        return view('form', ['messages' => "Cadastrar Usuário"]);

    }

    public function store(){
        
        if($this->createModel->save($this->request->getPost())){

            return view("messages", ['messages' => "Usuário salvo com sucesso!"]);
        
        }
        else{
            echo "Ocorreu um erro!";
        }
    }



    public function edit($id){

        return view('form',['messages' => "Editar Usuário",'usuarios' => $this->usuarioModel->find($id)]);
        
       
    }
    
}
