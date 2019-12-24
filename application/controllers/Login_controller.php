<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');

	}


	public function logado()
	{
		$post = $this->input->post();

		try{
			$dadosValidados = $this->validaDados($post);
			$this->user->logado($dadosValidados);
			echo "Login efetuado";
		}catch (Exception $e){
			$error["msg"] = "Erro: ".$e->getMessage();
			header('Content-Type: application/json');
			echo json_encode($error);
			exit;
		}

	}
	private function validaDados($dados){

		if(!isset($dados['user']) || empty($dados['user'])){
			throw new Exception("O campo de usuário é obrigatório",500);
		}
		if(!isset($dados['senha']) || empty($dados['senha'])){
			throw new Exception("O campo de senha é obrigatório",500);
		}
		return $dados;
	}

}

