<?php

namespace App\Controllers;


use App\Controllers\BaseController;


class Login extends BaseController
{
	public function index()
	{
	
    	$data['msg'] = '';
		if ($this->request->getMethod() === 'post'){
			$usuarioModel= model('UsuarioModel');

			$usuarioCheck= $usuarioModel->check(
				$this->request->getPost('matricula'),
				$this->request->getPost('senha')
			);

			if(! $usuarioCheck){
				$data['msg']= 'Matricula e/ou senha incorretos!';
			}
			else{
				//salva dos dados na sessão
				//$this->session->set('nome',$usuarioCheck->nome);
				$this->session->set('perfil',$usuarioCheck->perfil);
				return redirect()->to('menu'); // retorna acesso a pagina

				//redireciona o usuário para uma página restrito

			}


		}

		return view ('login',$data);
	}

}


