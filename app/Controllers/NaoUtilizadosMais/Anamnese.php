<?php

namespace App\Controllers;


class Anamnese extends BaseController
{
	public function index()
	{
		$data['msg'] = '';
        if($this->request->getMethod() == 'post'){
            $anamneseModel = model("AnamneseModel");
            try{
                $anamneseData = $this->request->getPost();
                if($anamneseModel->save($anamneseData)){
                    $data['msgS'] = 'Anamnese enviado com sucesso!';
                }
                else{
                    $data['msg'] = 'Erro ao enviar Anamnese!';
                    $data['errors'] = $anamneseModel->errors();   
                }
            }

            catch(Exception $e){
                $data['msg'] = 'Erro ao cadastrar Anamnese: ' . $e->getMessage();
            }
		}
		return view('anamnese', $data);
	}

}

?>