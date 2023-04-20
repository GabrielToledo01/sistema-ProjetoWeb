<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProntuarioModel;

class GerenciaPront extends BaseController

{

    private $prontModel;

    public function __construct(){
        $this->prontModel = new ProntuarioModel();
        
    }

    public function index(){

        return view('historico_prontuario', [
            'prontuario' => $this->prontModel->findAll()
        ]);
    }

    public function delete($id){
        if($this->prontModel->delete($id)){
            echo view('messagesFicha', ['messages'=> 'Excluido com sucesso!']);
        }

        else{
            echo "Erro.";
        }
    }

    public function create(){

        return view('prontuario');

    }

    public function store(){
        
        if($this->prontModel->save($this->request->getPost())){

            return view("messagesFicha", ['messages' => "Salvo com sucesso!"]);
        
        }
        else{
            echo "Ocorreu um erro!";
        }
    }



    public function edit($id){

        return view('prontuario', ['prontuario' => $this->prontModel->find($id)]);
        
       
    }

}