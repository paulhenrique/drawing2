//Script com funcionamento
//Paulo Henrique Vieira 17/07/2017
$(document).ready(function(){
	$(".button-collapse").sideNav();

	if(!localStorage.mode)
		localStorage.mode = "#select";
	if(!localStorage.color)
		localStorage.color = "blue";
	if (!localStorage.borderColor) 
		localStorage.borderColor = "orange";
	$("#colorSelector div").css({"backgroundColor": localStorage.color});
	$("#borderSelector div").css({"backgroundColor": localStorage.borderColor});

	var color = (localStorage.getItem('color'))? localStorage.color : '#0000ff';
	var borderColor = (localStorage.getItem('borderColor'))? localStorage.color : '#0000ff';

	$('#colorSelector').ColorPicker({
		color: color,
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			localStorage.color = '#' + hex;
			$('#colorSelector div').css('backgroundColor', localStorage.color);
		}
	});

	$('#borderSelector').ColorPicker({
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		color: borderColor,
		onChange: function (hsb, hex, rgb) {
			localStorage.borderColor = '#' + hex;
			$('#borderSelector div').css('backgroundColor', localStorage.borderColor);
		}
	});
	$(".mode-selection").on("click", function(){
		$(".mode-selection").removeClass("active");
		$(".mode-selection").each(function(){
			var divRemove = $(this).attr("href");
			$(divRemove).removeClass("show");		
			$(divRemove).addClass("hidden");
		});
		$(this).addClass("active");
		var div = $(this).attr("href");
		$(div).removeClass("hidden");
		localStorage.mode = $(this).attr("href");
		console.log("DW MODE : " + localStorage.mode);
		$(div).addClass("show");
		
		if (localStorage.mode == "#forma"){
			if(!localStorage.forma)
				localStorage.forma = "#square";
			if (localStorage.forma == "#square") 
				alteraCursor("cur2");
			if (localStorage.forma == "#circle") 
				alteraCursor("circle");
		}
		if (localStorage.mode == "#select") 
			alteraCursor("default");
	});
	function alteraCursor(cursor){
		$(".container-obj").css({
			"cursor": "url('cur/"+cursor+".cur'), default"
		});
	}
	$(".forma-selection").on("click", function(){
		$(".forma-selection").removeClass("active");
		$(this).addClass("active");
		var forma = $(this).attr("href");
		localStorage.forma = forma;
		console.log("DW MODE DRAWING FORM : " + localStorage.forma);
	});

	//DESENHANDO NA TELA
	function adicionarForma(e){
		var posicao = e.pageX,
		posicaoy = e.pageY,
		backgroundColor = localStorage.color,
		borderColor = localStorage.borderColor,
		borderSize = $("#borderSize span span").text(),
		formSize = $("#formSize span span").text(),
		forma = $("<div>");
		var contadorElementos = $("div#listObjetos a.collection-item").length;
		var nomeObjeto = "figura"+contadorElementos;
		//Colocar nas layers
		var a = $("<a/>").attr("class", "collection-item layer collapsible-header").attr("data-item",nomeObjeto).append(nomeObjeto);
		var li = $("<li>").append(a);
		$("#listObjetos").prepend(a);
		//propriedades
		forma.css({
			"position":"absolute",
			"left":posicao,
			"top":posicaoy,
			"background": backgroundColor,
			"border-color": borderColor,
			"border-width" : borderSize,
			"width": formSize,
			"height": formSize
		}).attr("id", nomeObjeto);
		//definir formato
		if(localStorage.forma == "#square")
			forma.addClass("square");
		if (localStorage.forma == "#circle")
			forma.addClass("circle");
		$(".container-obj").append(forma);		
		//tornar resizable
		objeto = $("#"+nomeObjeto);
		objeto.resizable();
		objeto.draggable();
	}
	$(".container-obj").on("click", function(e){
		if (localStorage.mode == "#forma") 
			adicionarForma(e);
	});
	$("#colorSelector div").css({"backgroundColor": localStorage.color});
	$("#borderSelector div").css({"backgroundColor": localStorage.borderColor});
});