<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Vendas_model', 'vendas');
		$this->load->model('Consultas_model', 'consultar');

	}


	public function short()
	{
		$code = $this->uri->segment(2);
		$retorno = $this->consultar->encurtador($code);
		header('Location:'.base_url('produto/').$retorno->url_flor);
		die();
	}

	public function venda()
	{
		$produto = $this->input->post();


		$this->consultar->incrementaVenda($produto['name']);
	}

	/*
	 * Recebe dados da pagina admin editar item e seta as novas alterações
	 */
	public function editarItem()
	{
		$dados = $this->input->post();
		$dados['url_flor'] = strtolower(url_title($dados['url_flor'])).'-'.$dados['code_produto'];
		$dados['preco_flor'] = str_replace(',','.',$dados['preco_flor']);

		$item = $this->db->get_where('flores',array('id_flor'=>$dados['id_flor']))->row();



		$nomeImagemAnterior = $item->url_flor;
		$caminhoImagens = "application/assets/img/produtos/";

		$old =  $caminhoImagens . $nomeImagemAnterior .'.jpg';
		$new =  $caminhoImagens . $dados['url_flor'] .'.jpg';
		rename($old , $new);




		$this->db->where('code_produto', $dados['code_produto']);
		$this->db->replace('flores', $dados);

		header('Content-Type: application/json');
		echo json_encode("Atualização realizada com sucesso");
		exit;



	}

	public function updateViews()
	{
		$dados = $this->input->post();

		$this->db->where('id_flor', $dados['name']);
		$this->db->set('views', 'views+1', FALSE);
		$this->db->update('flores');
	}

	public function criarItem()
	{

		try{
			$dados = $this->input->post();
			$this->vendas->criarItem($dados);

		}catch (Exception $e){
			http_response_code($e->getCode());
			header('Content-Type: application/json');
			echo json_encode(array("msg"=>$e->getMessage()));
			exit;
		}
	}



}


