<?php
/*show_array($this->session->userdata());*/
?>

<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Amarylis</title>
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

		body,html {
			height: 100%;
		}
	</style>
</head>
<body>

<div class="container h-100">
	<div class="row align-items-center h-100">
		<div class="col-6 mx-auto">

			<div class="card shadow-lg" >
				<img class="card-img-top" src="https://cdn.dribbble.com/users/906281/screenshots/3401694/dribbleloopie.gif" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Por favor, faça o login</h5>

					<form class="login">
						<div class="form-group">
							<label for="user">Usuário</label>
							<input type="text" class="form-control" id="user" name="user">
						</div>
						<div class="form-group">
							<label for="senha">Senha</label>
							<input type="password" class="form-control" id="senha" name="senha">
						</div>

						<button type="submit" class="btn btn-primary">Entrar</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<script>


	$('.login').submit(function (e) {
		e.preventDefault();

		var dados = $(".login").serializeArray();

		$.ajax({
			method: 'POST',
			type:'POST',
			url:"<?php echo base_url().'admin/logado'?>",
			data: dados,
			success: function (data)
			{

				if(data.msg && data.msg.includes('Erro:'))
				{
					alert(data.msg);
					return false;
				}else {
					window.location.replace("<?php echo base_url('deus-e-fiel');?>");
				}

			},
			error: function(data)
			{
				alert(data)
			}
		});

		return false;
	})
</script>


</body>
