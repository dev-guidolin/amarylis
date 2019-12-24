<?php
header('Content-Type: text/html; charset=utf-8');
/*show_array($produtos);*/
$url = explode('/',$_SERVER['REQUEST_URI']);

$produtoPage = in_array("produto", $url) ? true : false;

?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Google / Search Engine Tags -->
	<meta itemprop="name" content="Amarylis Floricultura em Rio das Ostras e Região dos Lagos">
	<meta itemprop="description" content="Olá, sou a Márcia, tenho mais de 15 anos criando todo tipo de arranjos florais para eventos ou para presentear a pessoa que você ama. Estou em Rio das Ostras, atendo toda Região dos Lagos.">
	<meta itemprop="image" content="http://amarylis-floricultura.site/application/assets/img/amarylis-floricultura-e-cestas-de-cafe-da-manha-em-rio-das-ostras.jpg">

	<meta name="author" content="Amarylis Floricultura">
	<meta name="robots" CONTENT="INDEX, FOLLOW">
	<meta name="language" content="pt-br" />
	<meta name="geo.region" content="BR" />
	<meta name="copyright" CONTENT="Amarylis Floricultura">
	<meta name="keywords" content="
	<?php

	if (!$produtoPage)
	{
		echo "buquê de rosas, arranjos florais, rio das ostras, região dos lagos, tulipas, cestas de café da manhã, girassol, orquídeas";
	}else{
		$seo = explode(" ",$produtos->nome_flor);
		foreach ($seo as $item){
			echo $item.",";
		}
	}

	?>">
	<meta name="description" content="<?php
	if (!$produtoPage)
	{
		echo "Olá, sou a Márcia, tenho mais de 15 anos criando todo tipo de arranjos florais para eventos ou para presentear a pessoa que você ama. Estou em Rio das Ostras, atendo toda Região dos Lagos.";
	}else{
		echo $produtos->description;
	}
	?>">
	<link rel="canonical" content="<?php echo base_url();?>">
	<meta property="og:site_name" content="Amarylis Floricultura">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:image" content="<?php
	if (!$produtoPage)
	{
		echo base_assets()."img/amarylis-floricultura-e-cestas-de-cafe-da-manha-em-rio-das-ostras.jpg";
	}else{
		echo base_assets().'img/produtos/'.$produtos->url_flor.".jpg";
	}

	?>">
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php

	if (!$produtoPage)
	{
		echo "Amarylis Floricultura em Rio das Ostras e Região dos Lagos";
	}else{
		echo $produtos->nome_flor;
	}

	?>" />
	<meta property="og:description" content="<?php
	if (!$produtoPage)
	{
		echo "Elabora lindos arranjos florais para você presentear quem mais ama. Trabalho também com eventos e casamentos. Preicsa de cestas de café da manhã? Deixa comigo que seu alguém especial vai adorar a surpresa.";
	}else{
		echo $produtos->description;
	}

	?>" />
	<meta property="og:url" content="<?php
	if (!$produtoPage)
	{
		echo base_url();
	}else{
		echo base_url().$produtos->url_flor;
	}

	?>" />
	<meta property="article:section" content="Post" />
	<meta property="article:tag" content="<?php
	if (!$produtoPage)
	{
		echo "buquê de rosas, arranjos florais, rio das ostras, região dos lagos, tulipas, cestas de café da manhã, girassol, orquídeas";
	}else{
		$seo = explode(" ",$produtos->nome_flor);
		foreach ($seo as $item){
			echo $item.",";
		}
	}
	?>">
	<title><?php echo $titulo; ?> </title>
	<link rel="shortcut icon" href="<?php echo base_assets(); ?>img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo base_assets(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_assets(); ?>fonts/css/all.css">
	<link rel="stylesheet" href="<?php echo base_assets(); ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_assets(); ?>css/vendor.css">
	<link rel="stylesheet" href="<?php echo base_assets(); ?>css/animate.css">
	<script src="<?php echo base_assets(); ?>js/jquery-3.4.1.js"></script>
	<script src="<?php echo base_assets(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_assets(); ?>js/popper.min.js"></script>
	<script src="<?php echo base_assets(); ?>js/functions.js"></script>
	<script src="<?php echo base_assets(); ?>js/wow.min.js"></script>
	<script src="<?php echo base_assets(); ?>js/mask/dist/jquery.mask.min.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');

		@import url('https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap');

	</style>
</head>
<body>

<header id="menu">
	<div class="collapse bg-dark" id="navbarHeader">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-7 py-4">
					<h4 style="color: #f67280">Sobre</h4>
					<p class="text-muted">
						Olá, eu sou a <b>Márcia</b>.Iniciei minha profissão quando fui morar na Europa e lá conheci pessoas incríveis com quem
						pude trabalhar. Expandi meus conhecimentos na arte de arranjos florais. Hoje, trago mais de 15 anos de experiência para você presentear quem você mais ama. Estou em <b>Rio das Ostras - RJ</b>
					</p>
				</div>
				<div class="col-sm-4 offset-md-1 py-4">
					<h4 style="color: #f67280">Contato</h4>
					<ul class="list-unstyled">
						<li><a href="https://api.whatsapp.com/send?phone=5522999890432&text=Oi%20M%C3%A1rcia%2C%20tenho%20interesse%20em%20seus%20servi%C3%A7os" class="text-white">WhatsApp - (22) 99989-0432</a></li>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar  shadow-sm">
		<div class="container d-flex justify-content-between">
			<a href="<?php echo base_url(); ?>" class="navbar-brand d-flex align-items-center">
				<span
					style="font-family: 'Playfair Display SC', serif; color: #f67280; font-size: 2.5rem; font-weight: bold">Amarylis</span>
			</a> <span style="font-weight: bold;">Atendemos a Região dos Lagos - RJ</span>

			<button style="color: #f67280" class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
					aria-label="Toggle navigation">


<span style="font-size: 1.8rem">
				<i class="fas fa-bars"></i>
			</span>

			</button>
		</div>
	</div>
</header>
<?php if (in_array('produto',$url)){	  ?>

<script type="application/ld+json">
	{
		"@context": "https://schema.org/",
		"@type": "Product",
		"name": "<?php echo $produtos->nome_flor;?>",
		"image": "<?php echo base_assets()."img/produtos/".$produtos->url_flor.".jpg";?>",
		"description": "<?php echo $produtos->description;?>",
		"brand": "Amarylis Floricultura",
		"offers": {
			"@type": "Offer",
			"url": "<?php echo base_url().$produtos->url_flor;?>",
			"priceCurrency": "BRL",
			"price": "<?php echo $produtos->preco_flor;?>",
			"availability": "https://schema.org/InStock",
			"itemCondition": "https://schema.org/NewCondition",
			"priceValidUntil": "<?php echo date('Y')+1?>-12-31"
		},
		"aggregateRating": {
			"@type": "AggregateRating",
			"ratingValue": "9/10",
			"bestRating": "5",
			"worstRating": "1",
			"ratingCount": "<?php echo $produtos->vendas;?>"
		},
		"review": {
			"@type": "Review",
			"name": "Sônia Santos Gomes",
			"reviewBody": "A Márcia é incrível, o arranjo ficou lindo. Muito atenciosa e sincera nos seus serviços",
			"reviewRating": {
			  "@type": "Rating",
			  "ratingValue": "5"
			},
			"datePublished": "2019-10-15",
			"author": {"@type": "Person", "name": "Sônia"}
		  }
	}
</script>
<?php
;}else{ $merge = array_merge($produtos['arranjos'], $produtos['cestas']);?>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "BreadcrumbList",
			"itemListElement": [{
				"@type": "ListItem",
				"position": 1,
				"name": "Home",
				"item": "<?php echo base_url();?>"
			},
				<?php
					$x = 2;
					$y = 0;
					$arrayLenght = count($merge);
					foreach ($merge as $item)
					{ if ($y < $arrayLenght -1){ ?>
						{
							"@type": "ListItem",
							"position":<?php echo $x;?>,
							"name": "<?php echo $item->nome_flor;?>",
							"item": "<?php echo base_url().$item->url_flor;?>"
						},

					<?php
						$x++; $y++;	}else{ ?>
					{
							"@type": "ListItem",
							"position":<?php echo $x;?>,
							"name": "<?php echo $item->nome_flor;?>",
							"item": "<?php echo base_url().$item->url_flor;?>"
						}

					<?php }
					}
				?>
			]
		}
	</script>

<?php
;}?>
