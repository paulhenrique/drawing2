//Script com funcionamento
//Paulo Henrique Vieira 17/07/2017

$(".button-collapse").sideNav();
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
	color: borderColor,
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
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
	$(div).addClass("show");
});

$(".forma-selection").on("click", function(){
	$(".forma-selection").removeClass("active");
	$(this).addClass("active");
	var forma = $(this).attr("href");
	localStorage.forma = forma;
	console.log(localStorage.forma);
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
	forma.css({
		"position":"absolute",
		"left":posicao,
		"top":posicaoy,
		"background": backgroundColor,
		"border-color": borderColor,
		"border-width" : borderSize,
		"width": formSize,
		"height": formSize
	});
	if(localStorage.forma == "#square")
		forma.addClass("square");
	if (localStorage.forma == "#circle")
		forma.addClass("circle");
	$(".container-obj").append(forma);		
}
$(".container-obj").on("click", function(e){
	adicionarForma(e);
});
$("#colorSelector div").css({"backgroundColor": localStorage.color});
$("#borderSelector div").css({"backgroundColor": localStorage.borderColor});