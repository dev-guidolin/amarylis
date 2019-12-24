<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Consultas_model', 'consultar');
		$this->load->model('User_model', 'user');

		$sessao = $this->session->userdata();

		$alfa = $this->db->get_where('user', array('id_user'=>$sessao['id_user']))->row();

		if (!isset($sessao['logado']) || $sessao['token'] != $alfa->token){
			$this->session->sess_destroy();
			header('Location:'.base_url('login'));

		}

	}


	public function index()
	{
		$produtos['produto'] = $this->consultar->produtosAtivos();

		$produtos['titulo'] = "Amarylis Floricultura - Rio das Ostras";

		$this->load->view('admin/head',$produtos);
		$this->load->view('admin/dashboard');

	}

	public function itensInativos()
	{
		$produtos['produto'] = $this->consultar->produtosInativos();

		$this->load->view('admin/head',$produtos);
		$this->load->view('admin/dashboard');
	}

	public function novoItem()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/item');
		$this->load->view('admin/footer');

	}
	public function editar()
	{
		$produto = $this->uri->segment(2);

		$produtos['produto'] = $this->consultar->produtoEdite($produto);
		$produtos['titulo'] = $produtos['produto']->nome_flor;

		$this->load->view('admin/head',$produtos);
		$this->load->view('admin/editar');
	}

}


