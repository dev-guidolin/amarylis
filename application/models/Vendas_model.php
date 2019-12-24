<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas_model extends CI_Model
{

	/**
	 * @param $dados
	 * @throws Exception
	 */

	public function criarItem($dados)
	{


		$url = explode('-',$dados['urlLandPage']);
		$id = end($url);



		$existe = $this->db->get_where('flores',array('code_produto'=>$id))->result();
		if (!empty($existe)){
			throw new Exception( "Produto já existe", 500);
		}


		$this->criarImagem($dados["imagem_desktop_base64"], $dados['urlLandPage']);





		$this->db->insert('flores', array(
				'nome_flor'=>$dados['titulo'],
				'url_flor'=>$dados['urlLandPage'],
				'preco_flor'=>str_replace(',','.',$dados['preco']),
				'descricao_flor'=>$dados['descricao_flor'],
				'code_produto'=>$id,
				'categoria'=>$dados['categoria'],
				'status'=>$dados['status'],

			)

		);

		$this->db->insert("fake_sales", array(
			"produto_id"=>$this->db->insert_id(),
			"sales"=>mt_rand(15,25)
		));



		/*mkdir('application/assets/images/produtos/'.$id,077,true);

		mkdir('application/views/pages/'.$id,077,true);
		mkdir('application/views/pages/'.$id."/images/",077,true);

		mkdir('application/views/pages/'.$id.'/mobile/',077,true);
		mkdir('application/views/pages/'.$id.'/mobile/images/',077,true);



		file_put_contents("application/views/pages/".$id."/index.php", "<?php echo 'Produto: '. '".$dados['titulo']."'".";"."\n", FILE_APPEND|LOCK_EX);
		file_put_contents("application/views/pages/".$id."/mobile/index.php", "<?php echo 'Produto: '. '".$dados['titulo']."'".";"."\n", FILE_APPEND|LOCK_EX);
		*/

		throw new Exception('Item criado com sucesso', 200);
	}

	public function criarImagem($base64, $imageName){
		list($type, $data) = explode(';', $base64);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);
		file_put_contents('application/assets/img/produtos/'.$imageName.".jpg", $data);
	}


}

