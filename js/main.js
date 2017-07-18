//Tornar item arrastável 
// $( function() {
// 	$( ".item" ).draggable({ containment: "#containment-wrapper", scroll: false });
// });
// $(".form-option").on("click", function(){
// 	$(".form-option").removeClass("selected");
// 	$(this).addClass("selected");
// });
// //criar item
$("#add").on("click", function () {
	var contadorElementos, contadorChars, nomeObjeto, corObjeto, form, item, icon, linkRemove, a, li, iconeLayer;

	contadorElementos = $("div#listObjetos a.collection-item").length;//QUANTIDADE DE ELEMENTOS NA LISTA DE ELEMENTOS
	//contadorChars = $("#novoObjetoNome").val(); //CHARS DIGITADOS PELO USUÁRIO
	// nomeObjeto = (contadorChars.length > 3)? $("#novoObjetoNome").val() : "Objeto"+contadorElementos;
	// corObjeto = $("i.selected").attr("data-color");
	// form = $("i.form-option.selected").attr("data-form"); //FROMA DO OBJETO
	// item = $("<div>").attr("class",form + " draggable ui-widget-content").attr("id", nomeObjeto).css("background", corObjeto).css("z-index",0);
	//icon = $("<i>").attr("class","material-icons right white-text small oculto").append("close");
	//linkRemove = $("<a/>").attr("href","#").attr("class","removerItem").attr("data-remove",nomeObjeto).append(icon);
	iconeLayer = $("<i>").addClass("material-icons").append("layers");
	a = $("<a/>").attr("class", "collection-item layer collapsible-header").attr("data-item",nomeObjeto).append(nomeObjeto).prepend(iconeLayer);
	li = $("<li>").append(a);
	//$(".collection-item").removeClass("active");
	$("#listObjetos").prepend(a);
	$(".container-obj").append(item);
	Materialize.toast(nomeObjeto+' foi adicionado', 3000);

});



// $(".collapsible").on("click", "a.collection-item", function () {
// 	var objeto, classes, classesRemove;
// 	classes = "active grey darken-3 white-text collection-item layer collapsible-header";
// 	classesRemove = "collection-item layer collapsible-header";
// 	$(".layer").attr("class", classesRemove);

// 	$(".layer" ).each(function(){
// 		objeto = $(this).attr("data-item");
// 		$("#"+objeto+"").draggable({ disabled: true}).resizable({disabled:true});
// 	});
// 	$(this).attr("class", classes);
// 	objeto = $(this).attr("data-item");
// 	$("#"+objeto+"").draggable({ disabled: false, drag: function() {
// 		var off = $("#"+objeto+"").offset();
// 		$("#Xposi").val(off.top);
// 		$("#Yposi").val(off.left);
// 	}}).resizable({disabled:false});   
	
	
// 	$(".color-option").each(function () {
// 		var corItem, corDesenho;
// 		corDesenho = $("#"+objeto+"").css('background-color');	
// 		corItem = $(this).css('color');
// 		if(corItem == corDesenho){
// 			$(".color-option").removeClass("selected");
// 			$(this).addClass("selected");
// 		}
// 	});

// 	$("#deletar-item").attr("data-item", objeto);
// 	$("#z-down").attr("data-item", objeto);
// 	$("#z-up").attr("data-item", objeto);
// 	var manipObjeto = $("#" + objeto)
// 	if(manipObjeto.css('z-index') == 0 ){
// 		$("#z-down").removeClass("disabled");
// 		$("#z-up").removeClass("disabled");
// 	}
// 	if (manipObjeto.css('z-index') == 2) 
// 		$("#z-up").addClass("disabled");
// 	if (manipObjeto.css('z-index') == -2) 
// 		$("#z-down").addClass("disabled");
// });
// $("#z-down").on("click", function(){
// 	var objeto, z, zObjeto;
// 	objeto = $("#"+$(this).attr("data-item"));
// 	zObjeto = objeto.css("z-index");

// 	if (zObjeto == "2") 
// 		z = "1";
// 	else if (zObjeto == "1")
// 		z = "0";
// 	else if (zObjeto == "0")
// 		z = "-1";
// 	else if (zObjeto == "-1")
// 		z = "-2";
// 	else if (zObjeto == "-2")
// 		$("#z-down").addClass("disabled");		
	
// 	$("#z-up").removeClass("disabled");
// 	objeto.css("z-index", z--);
// });

// $("#z-up").on("click", function(){
// 	var objeto, z, zObjeto;
// 	objeto = $("#"+$(this).attr("data-item"));
// 	zObjeto = objeto.css("z-index");
// 	if (zObjeto == "-2") 
// 		z = "-1";
// 	else if (zObjeto == "-1")
// 		z = "0";
// 	else if (zObjeto == "0")
// 		z = "1";
// 	else if (zObjeto == "1")
// 		z = "2";
// 	else if (zObjeto == "2")
// 		$("#z-up").addClass("disabled");		
// 	$("#z-down").removeClass("disabled");
// 	objeto.css("z-index", z--);
// });

// $(".color-option").on("click", function(){		
// 	var corObjeto = $("i.selected").attr("data-color"),
// 	objeto = $(".layer.active").attr("data-item");
// 	$("#"+objeto+"").css("background", corObjeto);
// 	Materialize.toast('A cor do ' +objeto+ ' foi alterada', 3000);		
// });
// $("#deletar-item").on("click", function(){
// 	var objItem = $(this).attr("data-item"),
// 	objeto = $("#"+objItem+"");
// 	if(!(contadorElementos = $("div#listObjetos a.collection-item").length > 0 ) && !(objItem != "")){
// 		Materialize.toast('Selecione um item para ser excluido', 3000);
// 		return;
// 	}
// 	var objItem = $(this).attr("data-item"),
// 	objeto = $("#"+objItem+"");
// 	objeto.remove();
// 	$("#listObjetos>a").each(function(){
// 		console.log(this);
// 		if($(this).attr("data-item") == objItem)
// 			$(this).remove();
// 	});
// 	Materialize.toast(objItem+' foi removido', 3000);
// });




