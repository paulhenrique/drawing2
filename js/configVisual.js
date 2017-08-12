$(document).ready(function(){
	//configurações visuais
	// $(".button-collapse").sideNav();
	var altura = $(document).height() + 500;	
	$("#painel").height(altura);
	$("#containment-wrapper").height(altura);
	$("#colorSelector div").css({"backgroundColor": localStorage.color});
	$("#borderSelector div").css({"backgroundColor": localStorage.borderColor});
	//TOOLTIPS	
	$('.tooltipped').tooltip({delay: 50});

	$("#range").val(1);
});