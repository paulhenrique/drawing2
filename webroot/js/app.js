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
				window.location.href="admin.php";
			}else{
				M.toast({
					html:"Reveja sua senha e usuário"
				});
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
				Materialize.toast({
					html: "Este e-mail já está cadastrado, utilize outro",
				});
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

function materialIcon(icone, position){
	var icon = $("<i>");
	icon.attr("class", "material-icons " + position);
	icon.html(icone);
	return icon;
}
function disabled_config(){
	$(".disabled-input-remove").on("click", function(e){
		var input = $(this).attr("data-ref");
		var parent = $(this).parent();

		var submit = $("<button>");
		submit.attr("class", "btn waves-effect waves-light green darken-4");
		submit.attr("type", "submit");

		var cancel = $("<a>");
		cancel.attr("class", "ml-1 btn waves-effect waves-light red darken-4 disable-input");
		cancel.attr("data-ref", $(this).attr("data-ref"));

		cancel.html("Cancelar");
		cancel.append(materialIcon("cancel", "right"));

		submit.html("Salvar");
		submit.append(materialIcon("save", "right"));

		input = $(input);
		input.attr("disabled", false);
		$(this).remove();

		parent.append(submit);
		parent.append(cancel);

		disable_config();

		e.preventDefault();
	});
}
disabled_config();
function disable_config(){
	$(".disable-input").on("click", function (e) {
		var parent = $(this).parent();
		var input = $(this).attr("data-ref");
		var edit_input = $("<a>");
		edit_input.attr("class", "btn waves-effect waves-light disabled-input-remove");
		edit_input.attr("data-ref", $(this).attr("data-ref"));
		edit_input.html("Alterar");
		edit_input.append(materialIcon("edit", "right"));
		$(input).attr("disabled", true);
		parent.empty();
		parent.append(edit_input);
		disabled_config();
		e.preventDefault();
	});
}