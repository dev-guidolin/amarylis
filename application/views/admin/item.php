<?php


?>
<style>
	.imagem_visualizacao{
		display: block;
		width: 250px;
		border-radius: 5px;
		box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
	}
</style>
<div class="container mt-5">
	<div class="row">
		<div class="col">
			<form id="produto" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4"><b>Título</b></label>
						<input type="text" class="form-control titulo" id="titulo" name="titulo" placeholder="Título">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4"><b>Preço</b></label>
						<input type="text" class="form-control preco_novo_item preco_flor" id="preco" name="preco" placeholder="Preço" maxlength="6">
					</div>
					<div class="form-group col-sm-6">
						<label for="categoria"><b>Categoria</b></label>
						<select class="form-control" id="categoria" name="categoria">
							<option value="1">Flores</option>
							<option value="2">Cestas</option>
						</select>
					</div>
					<div class="form-group col-sm-6">
						<label for="status"><b>Status</b></label>
						<select class="form-control" id="status" name="status">
							<option value="1">Ativo</option>
							<option value="0">Inativo</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="descricao_flor"><b>Descrição</b></label>
					<textarea class="form-control" id="descricao_flor" rows="10" name="descricao_flor"></textarea>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-4">
						<label for="inputPassword4">Url LandPage</label>
						<input type="text" class="form-control urlLandPage" id="urlLandPage" name="urlLandPage" placeholder="">
					</div>
					<div class="form-group col-sm-4">
						<label for="inputPassword4"><b>Imagem</b> </label><br><span id="imageSize" style="font-weight: bold; font-size: 18px"></span>
						<input type="file" class="imagem_desktop" id="imagem_desktop" name="imagem_desktop">
						<input type="text" name="imagem_desktop_base64" id="imagem_desktop_base64" hidden>
					</div>
					<div class="form-group col-sm-4">
						<button  type="submit" class="btn btn-primary mt-3 " id="enviar">Criar Item</button>
					</div>

				</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script>

     async function getBase64(file) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = async function () {
            return reader.result;
        };
        reader.onerror = function (error) {
           return false;
        };
    }


	$(function () {
        $('input[type="file"]').change(function(){
            var fileUpload = $(this);
            fileNameme = fileUpload.attr("id");
            var reader = new FileReader();
            var file = document.querySelector('#'+fileNameme).files[0]
            reader.readAsDataURL(file);
            reader.onload = async function () {
                var imagem = reader.result;
                var imagName = "visualizacao-"+fileNameme;
                $("#"+imagName).remove();
                setTimeout(function(){
                    $("#"+fileNameme+"_base64").val(imagem);
                    fileUpload.after("<img class='imagem_visualizacao' id='"+imagName+"' src='"+imagem+"'>");
                },1000);
            };
            reader.onerror = function (error) {
                return false;
            };
        });

        function removeAcento (text)
        {
            text = text.toLowerCase();
            text = text.replace(new RegExp('[ÁÀÂÃ]','gi'), 'a');
            text = text.replace(new RegExp('[ÉÈÊ]','gi'), 'e');
            text = text.replace(new RegExp('[ÍÌÎ]','gi'), 'i');
            text = text.replace(new RegExp('[ÓÒÔÕ]','gi'), 'o');
            text = text.replace(new RegExp('[ÚÙÛÜ]','gi'), 'u');
            text = text.replace(new RegExp('[Ç]','gi'), 'c');
            text = text.replace(/[&\/\\#,+()$~%.'":*?<>{}|]/g, "");
            text = text.replace(/[[,]]/g, "");
            text = text.replace(/ /g, "-");
            return text;
        }

        $('.titulo').focusout(function () {
            const valor = $(this).val();
            var titulo = removeAcento(valor);
            const url= titulo + "-<?php echo getToken(5);?>";
            $('.urlLandPage').val(url.toLocaleLowerCase());
        });

		$('#produto').submit(function () {
            var dadosCompra = $(this).serializeArray();

			dadosCompra.push({name: "description", value: $('#descricao_flor').val().replace(/<[^>]*>?/gm, '') });

            $.ajax({
                url:"<?php echo base_url().'deus-e-fiel/criar-item'?>",
                method:"POST",
                type:"POST",
                data:dadosCompra,
                success: function (data) {
                    alert(data.msg);
                    /*$('#produto')[0].reset();*/
                    $(".imagem_visualizacao").remove();
                },
                error:function(data){
                    alert(data.responseJSON.msg);
                }
            });
            return false;


        })
    });
</script>
