<?php


$input  = $produtos->relacionados;


if (!empty($input))
{
	$rand_keys = array_rand($input, 4);

	$itens = array();

	foreach ($rand_keys as $item)
	{
		$itens[] = $input[$item];
	}

	$produtos->relacionados = $itens;
} else{
	$input  = $produtos->relacionados;
}




?>
<section class="mb-5">
	<div class="container-fluid" style="background: #ffdcdf">
		<div class="row">
			<div class="col text-center p-5" style="height: auto">
				<h1 style="color: #b377a5; font-family: 'Pacifico', cursive;">" <?php echo $produtos->frase; ?> "</h1>
			</div>
		</div>
	</div>
</section>

<section class="mt-3">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 mb-5">
				<img class="img-fluid" src="<?php echo base_assets()."img/produtos/".$produtos->url_flor.".jpg";?>" alt="<?php echo $produtos->nome_flor; ?>" title="<?php echo $produtos->nome_flor; ?>">
			</div>
			<div class="col-sm-6">
				<h3><?php echo $produtos->nome_flor; ?></h3>
				<span>
					<?php
					$x = 1;
					while ($x <= rand(4, 5)) {
						echo '<i style="color: goldenrod" class="fas fa-star"></i>';
						$x++;
					}
					?>
				</span>
				<span>
					<?php echo $produtos->vendas; ?> vendidos
				</span>
				<hr>
				<h4>
					R$ <?php echo number_format($produtos->preco_flor, 2, ',', '.'); ?>
					<small class="text-muted">
						<del>
							R$ <?php echo number_format(($produtos->preco_flor * 0.25) + $produtos->preco_flor, 2, ',', '.'); ?></del>
					</small>
				</h4>
				<span style="color: green"><i class="fas fa-check-square"></i> Em estoque</span>
				<br>
				<br>
				<?php echo $produtos->descricao_flor; ?>

				<button type="button" class="btn btn-success"><a  id="comprar" class="text-decoration-none text-white" href="<?php echo $produtos->whats; ?>">Comprar Pelo
						WhatsApp</a></button>
				<div class="footer-social-link text-left mt-4">
					<a href="https://www.facebook.com/myamarilys/"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/amarylisfloricultura/"><i class="fa fa-instagram"></i></a>
				</div>
				<hr>
				<em><i class="lnr lnr-phone-handset"></i> Contato: </em>
				<a class="text-decoration-none" href="tel:(22) 99989-0432">(22) 99989-0432</a>
			</div>
		</div>
	</div>
</section>
<section class=" ">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<!-- start policy single item -->
				<div class="service-policy-item">
					<div class="icons">
						<img src="<?php echo base_assets(); ?>/img/icons/free_shipping.png" alt="Frete Grátis dentro da cidade de Rio das Ostras" title="Frete Grátis dentro da cidade de Rio das Ostras">
					</div>
					<div class="policy-terms">
						<h5>frete grátis</h5>
						<p>frete grátis <b>dentro de Rio das Ostras</b></p>
					</div>
				</div>
				<!-- end policy single item -->
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<!-- start policy single item -->
				<div class="service-policy-item">
					<div class="icons">
						<img src="<?php echo base_assets(); ?>/img/icons/support247.png" alt="Atendemos aos finais de semana" title="Atendemos aos finais de semana">
					</div>
					<div class="policy-terms">
						<h5>finais de semana</h5>
						<p>Atendimento aos finais de semana</p>
					</div>
				</div>
				<!-- end policy single item -->
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<!-- start policy single item -->
				<div class="service-policy-item">
					<div class="icons">
						<img src="<?php echo base_assets(); ?>/img/icons/money_back.png" alt="Pagamento garantido pelo Mercado Pago, mais segurança." title="Pagamento garantido pelo Mercado Pago, mais segurança.">
					</div>
					<div class="policy-terms">
						<h5>Mercado Pago</h5>
						<p>Pagamento garantido pelo <b>Mercado Pago</b></p>
					</div>
				</div>
				<!-- end policy single item -->
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<!-- start policy single item -->
				<div class="service-policy-item">
					<div class="icons">
						<img src="<?php echo base_assets(); ?>/img/icons/promotions.png" alt="Descontos especiais em pedidos acima de R$200,00">
					</div>
					<div class="policy-terms">
						<h5>descontos</h5>
						<p>Em pedidos acima de R$ 300,00</p>
					</div>
				</div>
				<!-- end policy single item -->
			</div>
		</div>
	</div>
</section>


<?php

if (!empty($input)){ ?>
	<section class="mt-5" style="background: rgba(241,235,250,0.22)">
		<div class="container p-5">
			<h2 class="text-center m-4" style="color: #b377a5">Talvez você goste destes produtos</h2>
			<div class="row">

				<?php
				foreach ($produtos->relacionados as $item){ ?>

					<div class="col-sm-3 mb-3">
						<div class="card">
							<img src="<?php echo base_assets()."img/produtos/".$item->url_flor.".jpg";?>"
								 class="card-img-top" alt="<?php echo $item->nome_flor;?>" title="<?php echo $item->nome_flor;?>">
							<div class="card-body">

								<a  href="<?php echo base_url('produto/').$item->url_flor;?>" class="btn b stretched-link"><h5 class="card-title"> <?php echo $item->nome_flor;?></h5>
								</a>
							</div>
						</div>
					</div>

				<?php }?>
			</div>
		</div>
	</section>
<?php }

?>



<script>
	$(function () {

		$.post("<?php echo base_url('views');?>",{ name: "<?php echo $produtos->id_produto;?>" });

		$("#comprar").click(function () {
			$.post("<?php echo base_url('comprar');?>",{ name: "<?php echo $produtos->id_produto;?>" });
		});



	})
</script>
