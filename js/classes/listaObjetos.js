function listaObjetos(){
	var nomeObjeto;
	this.setNomeObjeto = function(_nomeObjeto){
		this.nomeObjeto = _nomeObjeto;
	};
	this.getNomeObjeto = function(){
		return this.nomeObjeto;
	}	
	this.adicionarItem = function(){
		var li = $("<li>").attr("data-item", this.nomeObjeto);
		li.addClass("collection-item");
		li.addClass("ui-state-default");
		li.append(this.nomeObjeto);
		$("#listObjetos").prepend(li);	
	};
	this.removerItem = function(){
		itemAtivo.remove();
	};
	this.atualizarLista = function(){
		$("ul#listObjetos li").click( function(){
			$("#listObjetos li").removeClass("active");
			$(this).addClass("active");
			itemAtivo = $(this);
			definirPropriedades();
		});
	};
	this.sortableList = function(){
		$( "#listObjetos" ).sortable({
			out: function (event, ui){
				var quantidadeItens = $("#listObjetos li").length;
				$("#listObjetos li").each(function(indice, conteudo){
					var objeto = $("#" + $(this).attr("data-item"));
					objeto.css({
						"z-index":(quantidadeItens - indice)
					});
				});	
			};
		});
	};
};
function definirPropriedades(){
	var cor;
	$("#listObjetos li").click(function(){
		console.log("BATATAAAAA");
		objetoAlter = $("#" + $(this).attr("data-item"));
		cor = objetoAlter.css('background-color');
	});
	$('#alterColor').ColorPicker({
		color:cor,
		onChange: function (hsb, hex, rgb) {
			console.log(this.color);
			localStorage.temporColor = '#' + hex;
			$('#alterColor div').css('backgroundColor', localStorage.temporColor);
		}
	});
};