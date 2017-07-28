//Script com funcionamento
//Paulo Henrique Vieira 17/07/2017
function alteraCursor(cursor){
	$(".container-obj").css({
		"cursor": "url('cur/"+cursor+".cur'), default"
	});
};
function geometria(){
	
	var xInicial;
	var yInicial;
	var forma = $("<div>");
	var nomeObjeto;
	var tipo;
	var background;
	this.setBackground = function (_backgroud){
		this.background = _backgroud;
	}
	this.setTipo = function(_tipo){
		this.tipo = _tipo;
	}
	this.setXInicial = function(_xInicial){
		this.xInicial = _xInicial;
	}
	this.getXInicial = function(){
		return this.xInicial;
	}
	this.setYInicial = function(_yInicial){
		this.yInicial = _yInicial;
	}
	this.getYInicial = function(){
		return this.yInicial;
	}
	this.setNomeObjeto = function(_nomeObjeto){
		this.nomeObjeto = _nomeObjeto;
	}
	this.getNomeObjeto = function(){
		return this.nomeObjeto;
	}
	this.adicionarForma = function(){
		forma.css({
			"position":"absolute",
			"left":this.xInicial,
			"top":this.yInicial,
			"background": this.background,
			"width": "1px",
			"height": "1px"
		}).attr("id", this.nomeObjeto);	
		forma.addClass(this.tipo);
		$(".container-obj").append(forma);
	}
};
function verificarForma(){
	if(localStorage.forma == "#square")
		return "square";
	if (localStorage.forma == "#circle")
		return "circle";
};
function adicionarItem(item){
	var li = $("<li>").attr("data-item", item);
	li.append(item);
	$("#listObjetos").prepend(li);
};
$(document).ready(function(){
	//variaveis globais
	var color = (localStorage.getItem('color'))? localStorage.color : '#0000ff';
	var borderColor = (localStorage.getItem('borderColor'))? localStorage.color : '#0000ff';	
	var xInicial; 
	var yInicial; 
	var xFinal; 
	var yFinal; 
	var xAtual; 
	var yAtual; 
	var desenhar = false; 
	var objetoatual; 
	var altura = $(document).height() + 500;	
	var listaObjetos = $("#listObjetos");

	$(".container-obj").on("mousedown", function(e){
		if (localStorage.mode == "#forma") {
			xInicial = e.pageX;
			yInicial = e.pageY;
			desenhar = true;
			geom = new geometria();
			geom.setXInicial(xInicial);
			geom.setYInicial(yInicial);
			geom.setTipo(verificarForma());
			geom.setNomeObjeto("geometria" + $("#listObjetos li").length);
			geom.setBackground(localStorage.color);
			geom.adicionarForma();
			adicionarItem(geom.getNomeObjeto());
			objetoatual = $("#"+geom.getNomeObjeto());
		}
	});
	$(".container-obj").on("mousemove", function(e){
		if(!desenhar)
			return;		

		xAtual = e.pageX;
		yAtual = e.pageY;

		var diferencaX = xAtual - xInicial;
		var diferencaY = yAtual - yInicial;

		if(xAtual > xInicial)
			objetoatual.width(diferencaX);	
		if(yAtual > yInicial)
			objetoatual.height(diferencaY);	
	});
	$(".container-obj").on("mouseup", function(){
		desenhar = false;
	});
	//CONFIGURAÇÃO DE MODO
	$(".mode-selection").on("click", function(){
		$(".mode-selection").removeClass("active");
		$(".mode-selection").each(function(){
			var divRemove = $(this).attr("data-active");
			$(divRemove).removeClass("show");		
			$(divRemove).addClass("hidden");
		});
		$(this).addClass("active");
		var div = $(this).attr("data-active");
		$(div).removeClass("hidden");
		localStorage.mode = $(this).attr("data-active");
		console.log("DW MODE : " + localStorage.mode);
		$(div).addClass("show");
		
		if (localStorage.mode == "#forma"){
			$("div#listObjetos a.collection-item").each(function () {
				var objeto = $("#" + $(this).attr("data-item"));
				objeto.draggable({disabled:true}).resizable({disabled:true});
			});
			if(!localStorage.forma)
				localStorage.forma = "#square";
			if (localStorage.forma == "#square") 
				alteraCursor("cur2");
			if (localStorage.forma == "#circle") 
				alteraCursor("circle");
		}
		if (localStorage.mode == "#select"){
			alteraCursor("default");
			$("ul#listObjetos li").each(function (val, cont) {
				console.log(cont);	
				var objeto = $("#" + $(this).attr("data-item"));
				objeto.draggable({disabled:false}).resizable({disabled:false});
			});
		}
		if (localStorage.mode == "#camadas"){
			alteraCursor("default");
			$("ul#listObjetos li").each(function () {
				var objeto = $("#" + $(this).attr("data-item"));
				objeto.draggable({disabled:false}).resizable({disabled:false});
			});
		}
	});
	//SELEÇÃO DE FORMA
	$(".forma-selection").on("click", function(){
		$(".forma-selection").removeClass("active");
		$(this).addClass("active");
		var forma = $(this).attr("data-active");
		localStorage.forma = forma;
		console.log("DW MODE DRAWING FORM : " + localStorage.forma);
	});

	//DESENHANDO NA TELA
	
	// $(".container-obj").on("mousedown", function(e){

	// 	if (localStorage.mode == "#forma") 
	// 		adicionarForma(e);
	// });
	// $(".container-obj").on("mouseup", function(e){

	// 	// if (localStorage.mode == "#forma") 
	// 	// 	adicionarForma(e);
	// });

	//configurações
	$(".button-collapse").sideNav();
	$("#painel").height(altura);
	$("#containment-wrapper").height(altura);
	$("#colorSelector div").css({"backgroundColor": localStorage.color});
	$("#borderSelector div").css({"backgroundColor": localStorage.borderColor});

	//Configurações Default
	localStorage.mode = "#select";
	if(!localStorage.color)
		localStorage.color = "red";
	if (!localStorage.borderColor) 
		localStorage.borderColor = "black";

	//ColorPicker Configurações
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

});

