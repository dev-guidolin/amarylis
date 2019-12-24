<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin - Amarylis Floricultura</title>
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
	<script src="https://cdn.tiny.cloud/1/gvjvyglk1l4gqshjzxu98nausquzh403brfsq6ud23zatd0n/tinymce/5/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');

		@import url('https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap');

	</style>
</head>
<body>

<header id="menu">

	<div class="navbar  shadow-sm">
		<div class="container d-flex justify-content-between">
			<a href="<?php echo base_url('deus-e-fiel'); ?>" class="navbar-brand d-flex align-items-center">
				<span
					style="font-family: 'Playfair Display SC', serif; color: #f67280; font-size: 1.9rem; font-weight: bold">Adm - Amarylis</span>
			</a>

			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 text-dark" href="<?php echo base_url('deus-e-fiel') ;?>">Produtos</a>
				<a class="p-2 text-dark" href="<?php echo base_url('deus-e-fiel/novo-item');?>">Criar Ítem</a>
				<a class="p-2 text-dark" href="<?php echo base_url('deus-e-fiel/inativos');?>">Todos Inativos</a>
			</nav>


			<button id="logout" type="button" class="close" aria-label="Fechar" title="Sair da Administração">
				<span aria-hidden="true"><i class="fas fa-sign-out-alt"></i> Sair</span>
			</button>
		</div>
	</div>
</header>

<script>
	$(function () {
		$("#logout").click(function () {
			window.location.replace("<?php echo base_url('login');?>");
		})
	})
</script>
