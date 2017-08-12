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
	var proporcional = false;
	var itemAtivo;
	var objetoAlter;


	//DESENHAR OBJETOS ALTERANDO TAMANHO
	$(".container-obj").on("mousedown", function(e){
		if (localStorage.mode == "#forma") {
			var lengthOfObjetos = $("#listObjetos li").length;
			xInicial = e.pageX;
			yInicial = e.pageY;
			desenhar = true;
			borderWidth = $("#range").val();	
			geom = new geometria();
			geom.setXInicial(xInicial);
			geom.setYInicial(yInicial);
			geom.setTipo(verificarForma());
			geom.setPosIndex(lengthOfObjetos);
			geom.setNomeObjeto("geometria" + lengthOfObjetos);
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
		var diferencaY = (verificarForma() != "triangle")? yAtual - yInicial : (yAtual - yInicial) * 2;
		if(xAtual > xInicial)
			objetoatual.width(diferencaX);	
		if(yAtual > yInicial){
			if(proporcional)
				objetoatual.height(objetoatual.width());	
			else
				objetoatual.height(diferencaY);	
		}
	});
	$("#deletar-item").click(function () {
		var geom = new geometria();
		geom.removerForma();
		var listObj = new listaObjetos();
		listObj.removerItem();
		console.log("excluindo ");
	});
	$(".container-obj").on("mouseup", function(){
		desenhar = false;
	});
	//Configurações Default
	localStorage.mode = "#select";
	if(!localStorage.color)
		localStorage.color = "red";
	if (!localStorage.borderColor) 
		localStorage.borderColor = "black";
