<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Consultas_model', 'consultar');


	}
	public function login()
	{

		$this->load->view('admin/login');
		$this->session->sess_destroy();

	}


	public function index()
	{

		$produtos['produtos'] = $this->consultar->produtosPorCategorias();

		$produtos['titulo'] = "Amarylis Floricultura - Rio das Ostras";



		$this->load->view('head',$produtos);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function produtos()
	{



		$produto_id =  $this->uri->segment(2);
		$id_flower = explode('-',$produto_id);
		$produto['produtos'] = $this->consultar->produtoUnique(end($id_flower));

		$produto['titulo'] = $produto['produtos']->nome_flor;

		$this->load->view('head',$produto);
		$this->load->view('produto');
		$this->load->view('footer');
	}
}
