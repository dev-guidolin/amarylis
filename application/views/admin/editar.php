<?php
/*show_array($produto);*/
?>

<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<form id="editar">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="nome_flor"><b>Titulo</b></label>
								<input type="text" class="form-control titulo" id="nome_flor" name="nome_flor"
									   value="<?php echo $produto->nome_flor; ?>">
							</div>
							<div class="form-group">
								<label for="descricao_flor"><b>Descrição</b></label>
								<textarea class="form-control" id="descricao_flor" rows="15"
										  name="descricao_flor"><?php echo $produto->nome_flor; ?></textarea>

							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="preco_flor"><b>Preço</b></label>
								<input type="text" class="form-control preco_flor" id="preco_flor" name="preco_flor"
									   maxlength="6" value="<?php echo $produto->preco_flor; ?>">
							</div>
							<div class="form-group">
								<label for="categoria"><b style="color: #36b5b0">Categoria</b></label>
								<select class="form-control" id="categoria" name="categoria">
									<option value="1">Flores</option>
									<option value="0">Cestas</option>
								</select>
							</div>
							<div class="form-group">
								<label for="status" style="color: #f65c78"><b>Status</b></label>
								<select class="form-control" id="status" name="status">
									<option value="1">Ativo</option>
									<option value="0">Não Ativo</option>
								</select>
							</div>
							<p>
								Antes de Salvar, confere a <b>Categoria e o Status</b>.
							</p>
							<button type="submit" class="btn btn-lg btn-block btn-success mt-5" id="send">Salvar
							</button>
						</div>
					</div>
				</form>
			</div>

			<div class="col-sm-4 ">
				<div class="card align-self-center" style="width: 26rem">
					<img class="card-img-top"
						 src="<?php echo base_assets() . "img/produtos/" . $produto->url_flor . ".jpg"; ?>">
					<div class="card-body">
						<h5 class="card-title"><?php echo $produto->nome_flor; ?></h5>
						<p class="card-text"><?php echo $produto->descricao_flor; ?></p>
						<div class="row">
							<div class="col-sm-6">
								<h5>Preço: <?php echo number_format($produto->preco_flor, 2, ',', '.'); ?></h5>
							</div>
							<div class="col-sm-6">
								<h5>Status: <?php if ($produto->status == 1) {
										echo "Ativo";
									} else {
										echo "Não Ativo";
									}; ?></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(function () {

		$("#editar").submit(function (e) {
			e.preventDefault();

			let dados = $(this).serializeArray();
			dados.push({name: "code_produto", value: "<?php echo $produto->code_produto;?>"});
			dados.push({name: "url_flor", value: removeAcento($(".titulo").val())});
			dados.push({name: "id_flor", value: '<?php echo $produto->id_flor;?>'});
			dados.push({name: "description", value: $('#descricao_flor').val().replace(/<[^>]*>?/gm, '') });


			$.ajax({
				url: "<?php echo base_url('editar-item');?>",
				method: "POST",
				type: "POST",
				data: dados,
				success: function (dadosRetorno) {

					alert(dadosRetorno);
					location.reload();


				},
				error: function (data) {


				}
			});

			console.log(dados);
		})
	})
</script>
