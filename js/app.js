$(function(){
	// $("#sign-up").slideToggle("slow");
	// $(".toggle-for-sign-up").on("click", function(){
	// 	$("#sign-up").slideToggle("slow");
	// });
	// $(".toggle-for-login").on("click", function(){
	// 	$("#login").slideToggle("slow");
	// });

	var password = document.getElementById("password_register"),
		confirm_password = document.getElementById("password_register_verify");

	function validatePassword(){
		if(password.value != confirm_password.value)
			confirm_password.setCustomValidity("Passwords do not match!");
		else 
			confirm_password.setCustomValidity('');
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;

})