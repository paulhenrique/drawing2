function verify_passwords(){
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
}
function verify_login(){
	var email = $("#email-login").val();
	var password = $("#password-login").val();

	var result;
	$.ajax({
		url:'controller/verify.php?a=2736fab291f04e69b62d490c3c09361f5b82461a',
		type:'POST',
		data:{
			"password-login":password,
			"email-login":email
		},
		success:function (result) {
			if(result =='1'){
				window.location.href="application.php";
			}else{
				Materialize.toast("Reveja sua senha e usuário", 4000);
				$("#email-login").addClass("invalid");
				$("#password-login").addClass("invalid");
			}
		}
	});
}
function verify_email(){
	var email = $("#email-register").val();
	$.ajax({
		url:'controller/verify.php?a=email',
		type:'POST',
		data:{
			"email":email
		},
		success:function (result) {
			if(result==0){
				$("#register-form").submit();
			}else{
				Materialize.toast("Este e-mail já está cadastrado, utilize outro", 4000);
				$("#email-register").addClass("invalid");
			}
		}
	});
}
$("#btn-login").on("click",function (e) {
	verify_login();
	e.preventDefault();
});
$("#btn-register").on("click", function(e){
	verify_email();
	e.preventDefault();
});
