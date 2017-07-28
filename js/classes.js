function geometria(){

	var tipoGeometria, x0, y0, p1, p2, borda, cor, bordercolor;

	this.setTipoGeometria = function (_tipoGeometria){
		this.tipoGeometria = _tipoGeometria
	}
	this.setx0 = function (_x0){
		this.x0 = _x0
	}
	this.sety0 = function (_y0){
		this.y0 = _y0
	}
	this.setp1 = function (_p1){
		this.p1 = _p1
	}
	this.setp2 = function (_p2){
		this.p2 = _p2
	}
	this.setborda = function (_borda){
		this.borda = _borda
	}
	this.setcor = function (_cor){
		this.cor = _cor
	}
	this.setbordercolor = function (_bordercolor){
		this.bordercolor = _bordercolor
	}

	this.desenharGeometria = function (e){
		this.x0 = e.pageX;
		this.y0 = e.pageY;

		var listadeItens = new listadeItens();
		var qtdItens =	listadeItens.getQuantidade();
		var nomeObjeto = "figura" + qtdItens;

		var a = $("<a/>").attr("class", "layer").attr("data-item",nomeObjeto).append(nomeObjeto);
		var li = $("<li>").addClass("collection-item").append(a);
		var forma = $("<div>");
		forma.addClass(this.tipoGeometria);

		$("#listObjetos").prepend(li);
		forma.css({
			"position":"absolute",
			"left":e.pageX,
			"top":e.pageY,
			"background": this.cor,
			"border-color": this.bordercolor,
			"border-width" : this.borda,
			"width": formSize,
			"height": formSize
		}).attr("id", nomeObjeto);
	}
};

function listadeItens(){
	var quantidade, itens;
	this.setQuantidade = function(_quantidade){
		this.quantidade = _quantidade;
	}
	this.getQuantidade = function(){
		return this.quantidade;
	}
};


