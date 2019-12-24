$(function () {
	$(document).ready(function ()
	{ $(".textWrap").each(function(i){
		var len=$(this).text().trim().length;
		if(len>100)
		{
			$(this).text($(this).text().substr(0,75)+'...');
		}
	});
	});


	$(function () {
		/*MÁSCARAS*/
		$('.preco_flor').mask("#.##0,00", {reverse: true});
		$('.preco_novo_item').mask("#.##0,00", {reverse: true});
	});
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

