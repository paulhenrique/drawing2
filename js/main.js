$LAB.setGlobalDefaults({AlwaysPreserveOrder:true})
.script("js/vendor/jquery.js").wait(function(){
		console.log("LAB LOAD - jQuery");
})
.script("js/vendor/jqueryui.js").wait(function(){
		console.log("LAB LOAD - jQuery Ui");
})
.script("js/vendor/materialize.min.js").wait(function(){
		console.log("LAB LOAD - Materialize");
    $('.modal').modal();
})
.script("js/vendor/html2canvas.min.js").wait(function(){
		console.log("LAB LOAD - HTML2canvas");
})
.script("js/vendor/colorpicker.js").wait(function(){
		console.log("LAB LOAD - Color Picker");
})
.script("js/classes/geometria.js").wait(function(){
		console.log("LAB LOAD - Geom");
})
.script("js/classes/listaObjetos.js").wait(function(){
		console.log("LAB LOAD - List");
})
.script("js/classes/util.js").wait(function(){
		console.log("LAB LOAD - Util");
})
.script('js/funct.js').wait(function(){
		console.log("LAB LOAD - Funct");
})
.script('js/cpconfig.js').wait(function(){
		console.log("LAB LOAD - Config CP");
})
.script('js/configVisual.js').wait(function () {
	console.log("LAB LOAD - Visual");
	configVisual();
})
.script('js/formaConfig.js').wait(function(){
		console.log("LAB LOAD - Form");
})
.script('js/modoConfig.js').wait(function(){
		console.log("LAB LOAD - Mode");
})
.script('js/keys.js').wait(function(){
	console.log("LAB LOAD - Keys");
	main();
});
