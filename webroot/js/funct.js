//FUNÇÃO PRINCIPAL
function main(){
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
	var objects_array = [];
	localStorage.objects = [];
	// configurações de teclas quando pressionadas ========================
	// shift = proporcionalidade do desenho

	$( "body.main-application" ).keydown(function( event ) {
		if(event.key == "Shift"){
			console.log("Shift OFF");
			proporcional = true;
		}
	});
	$( "body.main-application" ).keyup(function( event ) {
		if(event.key == "Shift"){
			console.log("Shift On");
			proporcional = false;
		}
	});


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
			var listObj = new listaObjetos();
			listObj.setNomeObjeto(nmObjeto);
			listObj.adicionarItem();
			// listObj.atualizarLista();
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
		objects_array.push(geom);
		localStorage.objects = JSON.stringify(objects_array);
	});
	//Configurações Default
	localStorage.mode = "#select";
	if(!localStorage.color)
		localStorage.color = "red";
	if (!localStorage.borderColor)
		localStorage.borderColor = "black";
	console.log("excute-main");

	$("#save-drawing").on("click", function(){
		save_canvas();
	});
	$(".delete-drawing").click(function(){
		var id = $(this).attr("data-figure");
		delete_drawing(id);
	});
}

//SALVA DIV DE DESENHOS EM CANVAS E ENVIA VIA AJAX PARA CADASTRO NO BANCO ==============
function save_canvas(){	
	html2canvas(document.querySelector("#containment-wrapper")).then(canvas => {
		var img = canvas.toDataURL("image/png");
		var title = $("#title-text").val();

		$.ajax({
			url:'controller/save-img.php',
			type:'POST',
			data:{
				"data":img,
				"title":title,
				"dtAlteracoes":localStorage.getItem(objects)
			},
			success:function(result){
				alert(result);
			}
		});
	});
}
//DELETE DRAWINGS DO BANCO E REFRESH
function delete_drawing (id){
	$.ajax({
		url:'controller/verify.php?a=delete-drawing',
		type:'POST',
		data:{
			"id": id
		},
		success:function(result){
			if(result==1){
				console.log("is here")
				$("#drawings-list-container").load("admin.php #drawings-list");
				Materialize.toast("Excluído", 4000);
			}else{
				Materialize.toast("Um erro aconteceu", 4000);
			}
		}
	});
}
