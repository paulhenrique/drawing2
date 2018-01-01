	//SELEÇÃO DE FORMA
	$(".mode-selection").on("click", function(){
		$(".mode-selection").removeClass("active");
		$(this).addClass("active");
		var forma = $(this).attr("data-form");
		localStorage.forma = forma;
		console.log("DW MODE DRAWING FORM : " + localStorage.forma);
	});

	