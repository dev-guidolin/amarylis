<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{


	public function logado($dados)
	{

		$usuario = $dados['user'];
		$senha = sha1($dados['senha']);

		$user = $this->db->get_where('user', array('user'=>$usuario))->row();


		if(!isset($user) ){
			throw new Exception("Usuário incorreto",500);
		}
		if(!isset($user->senha) || $user->senha != $senha){
			throw new Exception("Senha incorreta",500);
		}


		$this->db
			->where("id_user", $user->id_user)
			->update('user',array('token'=>getToken(64)));

		$token = $this->db->get_where('user', array('user'=>$usuario))->row()->token;




		$sessao = array
		(
			'user' => $user->user,
			'id_user' => $user->id_user,
			'logado' => TRUE,
			'token' => $token,
		);


		$this->session->set_userdata($sessao);

		return true;

	}
}
