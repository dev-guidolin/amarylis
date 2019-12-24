<?php
/*show_array($produto);*/
?>
<section class="mt-5">
	<div class="container">



	</div>
</section>

<section class="my-5">
	<div class="container">

		<div class="table-responsive-sm">
			<table class="table text-center">
				<thead class="thead-dark">
				<tr>
					<th scope="col" class="text-left">Titulo</th>
					<th scope="col">Visualizações</th>
					<th scope="col">WhatsApp</th>
					<th scope="col">Status</th>
					<th scope="col">Imagem</th>
					<th scope="col"> # </th>
				</tr>
				</thead>
				<tbody>
				<?php
				foreach ($produto as $item){ ?>

					<tr >
						<td class="align-middle text-left" style="font-size: 1.2rem"><b><?php echo $item->nome_flor;?></b></td>
						<td class="align-middle" style="font-size: 1.1rem; font-weight: bold"><?php echo $item->views;?></td>
						<td class="align-middle" style="font-size: 1.1rem; font-weight: bold"><?php echo $item->contatos;?></td>

						<td class="align-middle" style="color: <?php if ($item->status == 1){echo "green";}else{echo "red";};?>; font-weight: bolder"><?php if ($item->status == 1){echo "Ativo";}else{echo "Não Ativo";} ?></td>
						<td class="align-middle " ><img class="rounded-circle" style="width: 115px; height: 115px" src="<?php echo base_assets()."img/produtos/".$item->url_flor.".jpg";?>" ></td>
						<td class="align-middle" ><button type="button" class="btn  btn-primary"><a class="text-decoration-none text-white" href="<?php echo base_url("editar/").$item->code_produto;?>">Editar</a></button> </td>
					</tr>

				<?php }?>
				</tbody>
			</table>

		</div>

	</div>
</section>
