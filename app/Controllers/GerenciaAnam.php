<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnamneseModel;

class GerenciaAnam extends BaseController

{

    private $anamModel;

    public function __construct(){
        $this->anamModel = new AnamneseModel();
        
    }

    public function index(){

        return view('historico_anamnese', [
            'anamnese' => $this->anamModel->findAll()
        ]);
    }

    public function delete($id){
        if($this->anamModel->delete($id)){
            echo view('messagesFicha', ['messages'=> 'Excluido com sucesso!']);
        }

        else{
            echo "Erro.";
        }
    }

    public function create(){

        return view('anamnese');

    }

    public function store(){
        
        if($this->anamModel->save($this->request->getPost())){

            return view("messagesFicha", ['messages' => "Salvo com sucesso!"]);
        
        }
        else{
            echo "Ocorreu um erro!";
        }
    }



    public function edit($id){

        return view('anamnese', ['anamnese' => $this->anamModel->find($id)]);
        
       
    }

}