//Script com funcionamento
//Paulo Henrique Vieira 17/07/2017 ============
//Classes ==========

function alteraCursor(cursor){
	$(".container-obj").css({
		"cursor": "url('cur/"+cursor+".cur'), default"
	});
};
function habDragResi(text){
	if(text == "disabled"){
		$("ul#listObjetos li").each(function () {
			var objeto = $("#" + $(this).attr("data-item"));
			objeto.draggable({disabled:true}).resizable({disabled:true});
		});
	};
	if (text == "habled") {
		$("ul#listObjetos li").each(function () {
			var objeto = $("#" + $(this).attr("data-item"));
			objeto.draggable({disabled:false, containment: "#containment-wrapper", scroll: false}).resizable({disabled:false});
		});
	};
};
function geometria(){	
	var xInicial;
	var yInicial;
	var forma = $("<div>");
	var nomeObjeto;
	var tipo;
	var background;
	var borderWidth;
	var borderColor;
	this.setBorderColor = function (_border){
		this.borderColor = _border;
	}
	this.getBorderColor = function(){
		return this.borderColor;
	}
	this.setBorderWidth = function(_border){
		this.borderWidth = _border;
	}
	this.getBorderWidth = function(){
		return this.borderWidth;
	}
	this.setBackground = function (_backgroud){
		this.background = _backgroud;
	};
	this.setTipo = function(_tipo){
		this.tipo = _tipo;
	};
	this.setXInicial = function(_xInicial){
		this.xInicial = _xInicial;
	};
	this.getXInicial = function(){
		return this.xInicial;
	};
	this.setYInicial = function(_yInicial){
		this.yInicial = _yInicial;
	};
	this.getYInicial = function(){
		return this.yInicial;
	};
	this.setNomeObjeto = function(_nomeObjeto){
		this.nomeObjeto = _nomeObjeto;
	};
	this.getNomeObjeto = function(){
		return this.nomeObjeto;
	};
	this.adicionarForma = function(){
		if(this.tipo != "triangle"){
			forma.css({
				"position":"absolute",
				"left":this.xInicial,
				"top":this.yInicial,
				"background": this.background,
				"border-width" : this.borderWidth,
				"border-color":this.borderColor,
				"border-style":"solid",
				"width": "1px",
				"height": "1px"
			}).attr("id", this.nomeObjeto);	
		};
		if(this.tipo == "triangle"){
			forma.css({
				"background": "linear-gradient(to right bottom, "+this.background+" 0%,"+this.background+" 50%,rgba(255, 255, 255, 0) 50%,rgba(255, 255, 255, 0) 100%)",
				"position":"absolute",
				"left":this.xInicial,
				"top":this.yInicial,
				"width": "1px",
				"height": "1px"
			}).attr("id", this.nomeObjeto);	
		};
		forma.addClass(this.tipo);
		$(".container-obj").append(forma);
	};
	this.removerForma = function(){
		var objeto = $("#" + itemAtivo.attr("data-item"));
		objeto.remove();
	};
};
function verificarForma(){
	if(localStorage.forma == "#square")
		return "square";
	if (localStorage.forma == "#circle")
		return "circle";
	if(localStorage.forma == "#triangle")
		return "triangle";
	if(localStorage.forma == "#diamond")
		return "diamond";
};	

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
		});
	};
};
$(document).ready(function(){
	//variaveis globais
	var color = (localStorage.getItem('color'))? localStorage.color : '#0000ff';
	var borderColor = (localStorage.getItem('borderColor'))? localStorage.borderColor : '#0000ff';	
	var xInicial; 
	var yInicial; 
	var xFinal; 
	var yFinal; 
	var xAtual; 
	var yAtual; 
	var desenhar = false; 
	var objetoatual; 
	var borderWidth;
	var altura = $(document).height() + 500;	
	var proporcional = false;
	var itemAtivo;
	//PROPORCIONALIDADE
	$( "body" ).keydown(function( event ) {
		if(event.key == "Shift")
			proporcional = true;
	});
	$( "body" ).keyup(function( event ) {
		if(event.key == "Shift")
			proporcional = false;
	});
	//DESENHAR OBJETOS ALTERANDO TAMANHO
	$(".container-obj").on("mousedown", function(e){
		if (localStorage.mode == "#forma") {
			xInicial = e.pageX;
			yInicial = e.pageY;
			desenhar = true;
			borderWidth = $("#range").val();	
			geom = new geometria();
			geom.setXInicial(xInicial);
			geom.setYInicial(yInicial);
			geom.setTipo(verificarForma());
			geom.setNomeObjeto("geometria" + $("#listObjetos li").length);
			geom.setBackground(localStorage.color);
			geom.setBorderWidth(borderWidth);
			geom.setBorderColor(localStorage.borderColor);
			geom.adicionarForma();
			
			var nmObjeto = geom.getNomeObjeto();
			
			listObj = new listaObjetos();
			listObj.setNomeObjeto(nmObjeto);
			listObj.adicionarItem();
			listObj.atualizarLista();
			objetoatual = $("#"+nmObjeto);
		};
	});
	$(".container-obj").on("mousemove", function(e){
		if(!desenhar)
			return;		

		xAtual = e.pageX;
		yAtual = e.pageY;

		var diferencaX = (verificarForma() != "triangle")? xAtual - xInicial : (xAtual - xInicial) * 2;
		var diferencaY = (verificarForma() != "triangle")? yAtual - yInicial : (yAtual - yInicial)*2;
		if(xAtual > xInicial)
			objetoatual.width(diferencaX);	
		if(yAtual > yInicial){
			if(proporcional)
				objetoatual.height(objetoatual.width());	
			else
				objetoatual.height(diferencaY);	
		}
	});
	$(".container-obj").on("mouseup", function(){
		desenhar = false;
	});
	//EXCLUSÃO DE OBJETO
	$("#deletar-item").click(function () {
		var geom = new geometria();
		geom.removerForma();
		var listObj = new listaObjetos();
		listObj.removerItem();
		console.log("excluindo ");
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
			habDragResi("disabled");
			if(!localStorage.forma)
				localStorage.forma = "#square";
			alteraCursor(verificarForma());
		};
		if (localStorage.mode == "#select"){
			alteraCursor("default");
			habDragResi("habled");
		};
		if (localStorage.mode == "#camadas"){
			alteraCursor("default");
			habDragResi("habled");
		};
	});
	//SELEÇÃO DE FORMA
	$(".forma-selection").on("click", function(){
		$(".forma-selection").removeClass("active");
		$(this).addClass("active");
		var forma = $(this).attr("data-active");
		localStorage.forma = forma;
		console.log("DW MODE DRAWING FORM : " + localStorage.forma);
	});
	
	//configurações visuais
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
	$("#range").val(1);

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