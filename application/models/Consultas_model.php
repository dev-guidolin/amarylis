<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_model extends CI_Model
{
	public function produtosPorCategorias()
	{
		$arranjos = $this->db->get_where('flores', array('categoria'=>1,'status'=>1))->result();
		$cestas = $this->db->get_where('flores', array('categoria'=>2,'status'=>1))->result();

		return array("arranjos"=>$arranjos,"cestas"=>$cestas);
	}

	public function encurtador($code)
	{
		return $this->db->get_where('flores', array('code_produto'=>$code))->row();

	}

	public function produtoUnique($code)
	{
		$produto =  $this->db->get_where('flores', array('code_produto'=>$code))->row();
		$vendas = $this->db->get_where('fake_sales',array('produto_id'=>$produto->id_flor))->row();

		$this->db->select('*');
		$this->db->from('flores');
		$this->db->where('code_produto !=',$code);
		$relacionados = $this->db->get()->result();

		$frase = $this->db->get('frases')->result();


		$apiWhats = "https://api.whatsapp.com/send?phone=5522999890432&text=";
		$shortCode= base_url()."short/".$produto->code_produto;
		$mensagem = urlencode("Olá, tenho interesse no seu produto: ".$shortCode);

		$retorno = array(
			"id_produto" => $produto->id_flor,
			"nome_flor" => $produto->nome_flor,
			"url_flor" => $produto->url_flor,
			"preco_flor" => $produto->preco_flor,
			"descricao_flor" => $produto->descricao_flor,
			"code_produto" => $produto->code_produto,
			"vendas" => $vendas->sales,
			"frase" => $frase[mt_rand(0,count($frase)-1)]->frase,
			"whats" => $apiWhats.$mensagem,
			"description" => $produto->description,
			"relacionados" => $relacionados,


		);


		return (object)$retorno;
	}

	public function incrementaVenda($id)
	{
		$this->db->where('produto_id', $id);
		$this->db->set('sales', 'sales+1', FALSE);
		$this->db->update('fake_sales');

		/*
		 * Incrementa contatos reais por whatsApp
		 */

		$this->db->where('id_flor', $id);
		$this->db->set('contatos', 'contatos+1', FALSE);
		$this->db->update('flores');

	}

	public function produtosAtivos()
	{
		return $this->db->order_by('nome_flor ASC')->get_where('flores',array('status'=>1))->result();
	}
	public function produtosInativos()
	{
		return $this->db->order_by('nome_flor ASC')->get_where('flores',array('status'=>0))->result();
	}




	public function produtoEdite($id)
	{
		$produtos = $this->db->get_where('flores', array('code_produto'=>$id))->row();
		return $produtos;
	}



}

/* End of file .php */
