$(function(){
	$("#sign-up").slideToggle("slow");
	$(".toggle-for-sign-up").on("click", function(){
		$("#sign-up").slideToggle("slow");
	});
	$(".toggle-for-login").on("click", function(){
		$("#login").slideToggle("slow");
	});

	$("#verify-login").on("click", function(){
		var email = document.getElementById('email-login').value,
		 	password = sha1(document.getElementById('password-login').value);
		 console.log(password);
		
	})
})