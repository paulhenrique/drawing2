<?php
include "controller/lib.php";
session_start();
if(isset($_SESSION["user"]))
	header("location:application.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Drawing</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="">
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="row">
				<div class="col s6 offset-s3">
					<div class="container center">
						<h4 class="toggle-for-sign-up">Sign Up</h4>
						<div class="row mt-5" id="sign-up">
							<form class="col s12" id="register-form" method="post" action="controller/verify.php?a=register">
								<div class="row">
									<div class="input-field col s8 offset-s2">
										<input name="name-register" id="first_name" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Preencha com seu nome">
										<label for="first_name">Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8 offset-s2">
										<input id="password_register" name="password-register" type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Sua senha deve conter no mínimo 6 caracteres" minlength=6 >
										<label for="password_register">Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8 offset-s2">
										<input id="password_register_verify" type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Confirme sua senha"  minlength=6 >
										<label for="password_register_verify">Rewrite Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8 offset-s2">
										<input id="email-register" type="email" name="email-register" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Você fará login através desse email">
										<label for="email">Email</label>
									</div>
								</div>
								<div class="row center mt-5">
									<a href="index.php" class="btn-flat">Go Back</a>
									<a class="btn-flat" id="btn-register">Cadastrar</a>
								</div>
							</form>
						</div>
					</div>
				</div>
		</div
	</div>
</body>
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/vendor/materialize.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript">
	verify_passwords();
</script>
<?php $action = $_GET["a"];?>
<?php errorAlert($action); ?>
</html>
