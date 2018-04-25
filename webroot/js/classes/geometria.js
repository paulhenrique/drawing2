function geometria(){	
	var xInicial;
	var yInicial;
	var forma = $("<div>");
	var nomeObjeto;
	var tipo;
	var background;
	var borderWidth;
	var borderColor;
	var posIndex;
	this.setPosIndex = function (_pos){
		this.posIndex = _pos;
	}
	this.getPosIndex = function(){
		return this.posIndex;
	}
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
	this.getBackground = function(){
		return this.background;
	}
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
	this.atualizarIndice = function(){

	}
	this.adicionarForma = function(){
		if(this.tipo != "triangle"){
			forma.css({
				"position":"absolute",
				"left":this.xInicial,
				"top":this.yInicial,
				"background": this.background,
				"border-width" : this.borderWidth,
				"border-color":this.borderColor,
				"z-index":this.posIndex,
				"border-style":"solid",
				"width": "1px",
				"height": "1px"
			}).attr("id", this.nomeObjeto);	
		};
		if(this.tipo == "triangle"){
			forma.css({
				"background": "linear-gradient(to right bottom,"+this.background+" 49.5%,rgba(255, 255, 255, 0) 50%,rgba(255, 255, 255, 0))",
				"position":"absolute",
				"z-index":this.posIndex,
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