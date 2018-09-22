$LAB.setGlobalDefaults({AlwaysPreserveOrder:true})
.script("webroot/js/vendor/jquery.js").wait(function(){
	console.log("LAB LOAD - jQuery");
})
.script("webroot/js/vendor/jqueryui.js").wait(function(){
	console.log("LAB LOAD - jQuery Ui");
})
.script("webroot/js/vendor/materialize.js").wait(function(){
	console.log("LAB LOAD - Materialize");
	$('.modal').modal();
	var elem = document.querySelector('.sidenav');
	var instance = M.Sidenav.init(elem, options);

	$(document).ready(function(){
		$('.sidenav').sidenav();
		M.AutoInit();
	});

})
.script("webroot/js/vendor/html2canvas.min.js").wait(function(){
	console.log("LAB LOAD - HTML2canvas");
})
.script("webroot/js/vendor/colorpicker.js").wait(function(){
	console.log("LAB LOAD - Color Picker");
})
.script("webroot/js/classes/geometria.js").wait(function(){
	console.log("LAB LOAD - Geom");
})
.script("webroot/js/classes/listaObjetos.js").wait(function(){
	console.log("LAB LOAD - List");
})
.script("webroot/js/classes/util.js").wait(function(){
	console.log("LAB LOAD - Util");
})
.script('webroot/js/funct.js').wait(function(){
	console.log("LAB LOAD - Funct");
})
.script('webroot/js/cpconfig.js').wait(function(){
	console.log("LAB LOAD - Config CP");
})
.script('webroot/js/configVisual.js').wait(function () {
	console.log("LAB LOAD - Visual");
	configVisual();
})
.script('webroot/js/formaConfig.js').wait(function(){
	console.log("LAB LOAD - Form");
})
.script('webroot/js/modoConfig.js').wait(function(){
	console.log("LAB LOAD - Mode");
})
.script('webroot/js/app.js').wait(function(){
	console.log("LAB LOAD - App.js");
})
.script('webroot/js/keys.js').wait(function(){
	console.log("LAB LOAD - Keys");
	main();
});
