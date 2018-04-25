function listaObjetos(){
	var nomeObjeto;
	this.setNomeObjeto = function(_nomeObjeto){
		this.nomeObjeto = _nomeObjeto;
	};
	this.getNomeObjeto = function(){
		return this.nomeObjeto;
	}	
	var objetoAlter;
	this.setObjetoAlter = function(_o){
		this.objetoAlter = _o;
	}
	this.getObjetoAlter = function(){
		return this.objetoAlter;
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
			var objetoAlter = $("#" + $("#listObjetos li.active").attr("data-item"));
			var cor = objetoAlter.css('background-color');
			var borderColor = objetoAlter.css('border-color');
			//VERIFICAR SE É TRIANGULO
			if($(objetoAlter).hasClass("triangle")){
				cor = objetoAlter.css('background');
			}
			
			$("#alterColor div").css("backgroundColor", cor);
			$("#alterBorderColor div").css("backgroundColor", borderColor);
			var borderWidth = objetoAlter.css('border-width');
			$("#rangeAlter").val(borderWidth);
			$("#rangeAlter").change(function(){
				objetoAlter = $("#" + $("#listObjetos li.active").attr("data-item"));

				$(objetoAlter).css('border-width', borderWidth);
				$(this).val()
			});
			$('#alterColor').ColorPicker({
				color:$(objetoAlter).css("backgroundColor"),
				onChange: function (hsb, hex, rgb) {
					objetoAlter = $("#" + $("#listObjetos li.active").attr("data-item"));
					$('#alterColor div').css('backgroundColor', '#' + hex);
					if($(objetoAlter).hasClass("triangle")){
						$(objetoAlter).css("background", "linear-gradient(to right bottom, #" + hex+" 49.5%,rgba(255, 255, 255, 0) 50%,rgba(255, 255, 255, 0))");
					}else{
						$(objetoAlter).css("backgroundColor", '#' + hex);
					}
				}
			});
			$('#alterBorderColor').ColorPicker({
				color:$(objetoAlter).css("border-color"),
				onChange: function (hsb, hex, rgb) {
					objetoAlter = $("#" + $("#listObjetos li.active").attr("data-item"));
					$('#alterBorderColor div').css('backgroundColor', '#' + hex);
					$(objetoAlter).css("border-color", '#' + hex);
				}
			});

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
			}
		});
	}
};