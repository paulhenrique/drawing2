	//SELEÇÃO DE FORMA
	$(".forma-selection").on("click", function(){
		$(".forma-selection").removeClass("active");
		$(this).addClass("active");
		var forma = $(this).attr("data-active");
		localStorage.forma = forma;
		console.log("DW MODE DRAWING FORM : " + localStorage.forma);
	});

	