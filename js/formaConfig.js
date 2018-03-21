	//SELEÇÃO DE FORMA
	$(".mode-selection").on("click", function(){
		$(".mode-selection").removeClass("active");
		$(this).addClass("active");
		var forma = $(this).attr("data-form");

		switch(forma){
			case undefined:
				localStorage.forma = "#select";
			break
			default:
				localStorage.forma = forma;
			break
		}
		
		console.log("DW MODE DRAWING FORM : " + localStorage.forma);
	});
