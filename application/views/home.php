<?php
$top = array(
	["#ffdcdf","#b277a5","Refresque sua alma & Sinta o Amor","0","Amarylis Floricultura"],
	["#fff393","#d3bf23","E tem como não sorrir quando me lembro de você?","1","Amarylis Floricultura"],
	["#231a1f","#ffffff","Tem um pedaço de você em tudo que eu faço.","2","Amarylis Floricultura"],
);

$index = mt_rand(0,2);

/*show_array($produtos);*/

?>
<style>
	@import url('https://fonts.googleapis.com/css?family=Inria+Serif&display=swap');
	@import url('https://fonts.googleapis.com/css?family=Pacifico&display=swap');

</style>


<section >
	<div class="container-fluid " style=" background: <?php echo $top[$index][0] ;?>">
		<div class="container h-100">
			<div class="row d-flex align-items-center">
				<div class="col-sm-6 text-center" >
					<h1 class="wow fadeIn mt-5" data-wow-duration="1s" data-wow-delay=".5s" style="color: <?php echo $top[$index][1]  ;?>; font-family: 'Pacifico', cursive;;">" <?php echo $top[$index][2] ;?> "</h1>
				</div>
				<div class="col-sm-6 " >
					<img class="img-fluid wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s" src="<?php echo base_assets().'img/top/'.$top[$index][3].'.jpg' ;?>" alt="<?php echo $top[$index][4] ;?>">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="banner-statistics-right my-5">
	<h1 class="text-center my-5" style="font-family: 'Inria Serif', serif;">Alegrando a vida de quem se ama.</h1>
	<div class="container">
		<div class="row">
			<!-- start banner item start -->
			<div class="col-md-6">
				<div class="banner-item banner-border shadow">
					<figure class="banner-thumb">
						<img src="<?php echo base_assets();?>/img/banners/banner-1.jpg" alt="Amarylis Floricultura em Rio das Ostras" title="Amarylis Floricultura em Rio das Ostras">
						<figcaption class="banner-content banner-content-right">
							<h2 class="text1">Para Ofertar</h2>
							<h2 class="text2">Lindos Arranjos</h2>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- start banner item end -->

			<!-- start banner item start -->
			<div class="col-md-6">
				<div class="banner-item banner-border shadow">
					<figure class="banner-thumb">
						<img src="<?php echo base_assets();?>/img/banners/banner-2.jpg" alt="Cestas de café da manhã incríveis e cheias de amor" title="Cestas de café da manhã incríveis e cheias de amor">
						<figcaption class="banner-content banner-content-right">
							<h2 class="text1">para quem se ama</h2>
							<h2 class="text2">Cestas Incríveis</h2>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- start banner item end -->
		</div>
	</div>
</section>

<section class="new-product mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title text-center">
					<h2>Novos Arranjos</h2>
					<p>Nossos mais novos arrajnos criados com todo carinho do mundo.</p>
				</div>
			</div>
		</div>
		<div class="row my-4">
			<?php
			foreach ($produtos['arranjos'] as $item){ ?>
				<div class="col-sm-4 mb-3">
					<div class="card" >
						<img src="<?php echo base_assets()."img/produtos/".$item->url_flor.".jpg";?>" alt="<?php echo $item->nome_flor;?>" title="<?php echo $item->nome_flor;?>">
						<div class="card-body">
							<h5 class="card-title"><?php echo $item->nome_flor;?></h5>
							<div class="card-text textWrap"><?php echo $item->descricao_flor;?></div>
							<br>
							<div class="text-left">
								<button type="button" class="btn btn-secondary"><a class="text-decoration-none text-white" href="<?php echo base_url('produto/').$item->url_flor;?>">ver arranjo</a></button>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<section class="new-product ">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title text-center">
					<h2>Cestas Incríveis</h2>
					<p>Você também pode personalizar sua cesta, montamos conforme sua vontade.</p>
				</div>
			</div>
		</div>
		<div class="row my-3">
			<?php
			foreach ($produtos['cestas'] as $item){ ?>
				<div class="col-sm-4 mb-4">
					<div class="card"  >
						<img src="<?php echo base_assets()."img/produtos/".$item->url_flor.".jpg";?>" alt="<?php echo $item->nome_flor;?>" title="<?php echo $item->nome_flor;?>">
						<div class="card-body">
							<h5 class="card-title"><?php echo $item->nome_flor;?></h5>
							<div class="card-text textWrap"><?php echo $item->descricao_flor;?></div>
							<br>
							<div class="text-left">
								<button type="button" class="btn btn-secondary"><a class="text-decoration-none text-white" href="<?php echo base_url('produto/').$item->url_flor;?>">Ver Produto</a></button>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
</section>

<section class="service-policy-area section-space ">
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

<section class="banner-statistics">
	<div class="container">
		<div class="row mbn-30">
			<!-- start store item -->
			<div class="col-md-3 col-sm-6 order-sm-1 order-md-1">
				<div class="banner-item mb-30">
					<figure class="banner-thumb">
						<img src="<?php echo base_assets();?>/img/banners/banner-3.jpg" alt="Tulipas vermelhas, perfeitas para impressionar" title="Tulipas vermelhas, perfeitas para impressionar">
						<figcaption class="banner-content banner-text-top">
							<h2 class="text1">Top amarylis</h2>
							<h2 class="text2">Red Tulip</h2>
							<!--<a class="store-link" href="#">comprar agora</a>-->
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- start store item -->

			<!-- start store item -->
			<div class="col-md-6 order-sm-3 order-md-2">
				<div class="banner-item mb-30">
					<figure class="banner-thumb">
						<img src="<?php echo base_assets();?>/img/banners/banner-4.jpg" alt="Descontos especiais para flores a serem entregues nos dias das mães" title="Descontos especiais para flores a serem entregues nos dias das mães">
						<figcaption class="banner-content banner-content-shape">
							<p>Dia das Mães</p>
							<h4>Até 20% de desconto</h4>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- start store item -->

			<!-- start store item -->
			<div class="col-md-3 col-sm-6 order-sm-2 order-md-3">
				<div class="banner-item mb-30">
					<figure class="banner-thumb">
						<img src="<?php echo base_assets();?>/img/banners/banner-5.jpg" alt="Tulipas coloridas, elagram o dia, rejuvenescem a alma e aquece o coração." title="Tulipas coloridas, elagram o dia, rejuvenescem a alma e aquece o coração.">
						<figcaption class="banner-content banner-text-top">
							<h2 class="text1">Black friday</h2>
							<h2 class="text2">Tulipas Coloridas</h2>
							<!--<a class="store-link" href="#">comprar agora</a>-->
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- start store item -->
		</div>
	</div>
</section>

<script>

</script>
