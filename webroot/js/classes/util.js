function alteraCursor(cursor){
	$(".container-obj").css({
		"cursor": "url('cur/"+cursor+".cur'), default"
	});
};
function habDragResi(text){
	if(text == "disabled"){
		$("ul#listObjetos li").each(function () {
			var objeto = $("#" + $(this).attr("data-item"));
			objeto.draggable({disabled:true}).resizable({disabled:true});
		});
	};
	if (text == "habled") {
		$("ul#listObjetos li").each(function () {
			var objeto = $("#" + $(this).attr("data-item"));
			objeto.draggable({disabled:false, containment: "#containment-wrapper", scroll: false}).resizable({disabled:false});
		});
	};
};

function verificarForma(){
	if(localStorage.forma == "#square")
		return "square";
	if (localStorage.forma == "#circle")
		return "circle";
	if(localStorage.forma == "#triangle")
		return "triangle";
	if(localStorage.forma == "#diamond")
		return "diamond";
};	