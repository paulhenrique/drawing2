function configVisual(){
	
	var altura = $(window).height() + 500;	
	var body = $(".main-application");
	$("#painel").height(altura);
	body.height(altura);
	$("#containment-wrapper").height(altura);
	$("#colorSelector div").css({"backgroundColor": localStorage.color});
	$("#borderSelector div").css({"backgroundColor": localStorage.borderColor});
	//TOOLTIPS	
	$('.tooltipped').tooltip({delay: 50});

	$("#range").val(1);

	console.log("teste");
}