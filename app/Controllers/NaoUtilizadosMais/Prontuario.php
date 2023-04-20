<?php

namespace App\Controllers;


class Prontuario extends BaseController
{
	public function index()

	{
		$data['msg'] = '';
        if($this->request->getMethod() == 'post'){
            $prontuarioModel = model("ProntuarioModel");
            try{
                $prontuarioData = $this->request->getPost();
                if($prontuarioModel->save($prontuarioData)){
                    $data['msgS'] = 'Prontuario enviado com sucesso!';
                }
                else{
                    $data['msg'] = 'Erro ao enviar Prontuario!';
                    $data['errors'] = $prontuarioModel->errors();   
                }
            }

            catch(Exception $e){
                $data['msg'] = 'Erro ao cadastrar prontuario: ' . $e->getMessage();
            }
		}
		return view('prontuario', $data);
	}

	
}

?>