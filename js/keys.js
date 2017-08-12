	//PROPORCIONALIDADE
	$( "body" ).keydown(function( event ) {
		if(event.key == "Shift")
			proporcional = true;
	});
	$( "body" ).keyup(function( event ) {
		if(event.key == "Shift")
			proporcional = false;
	});