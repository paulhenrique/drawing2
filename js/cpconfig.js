//ColorPicker Configurações
var color = (localStorage.getItem('color'))? localStorage.color : '#0000ff';
var borderColor = (localStorage.getItem('borderColor'))? localStorage.borderColor : '#0000ff';	
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

$('#alterColor').ColorPicker({
	color : $(objetoAlter).css("background-color"),
	color: "#000000",
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
		$('#alterColor div').css('backgroundColor', localStorage.color);
	}
});
$('#alterBorderColor').ColorPicker({
	color: "#000000",
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
		$('#alterBorderColor div').css('backgroundColor', localStorage.color);
	}
});
$('#borderSelector').ColorPicker({
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	color: borderColor,
	onChange: function (hsb, hex, rgb) {
		localStorage.borderColor = '#' + hex;
		$('#borderSelector div').css('backgroundColor', localStorage.borderColor);
	}
});