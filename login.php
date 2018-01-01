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
				<div class="col s6">
					<div class="container">
						<h3 class="toggle-for-sign-up">Sign Up</h3>
						<div class="row" id="sign-up">
							<form class="col s12" method="post" action="controller/verify.php?a=register">
								<div class="row">
									<div class="input-field col s12">
										<input name="name-register" id="first_name" type="text" class="validate">
										<label for="first_name">Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="password_register" name="password-register" type="password" class="validate">
										<label for="password_register">Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="password_register_verify" type="password" class="validate">
										<label for="password_register_verify">Rewrite Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" name="email-register" class="validate">
										<label for="email">Email</label>
									</div>
								</div>
								<div class="row right">
									<button type="submit" class="btn-flat">Go</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col s6">
					<div class="container">
						<h3 class="toggle-for-login">Log In</h3>
						<div class="row" id="login">
							<form class="col s12" method="post" action="controller/verify.php?a=login">
								<div class="row center">
									<div class="input-field col s12">
										<i class="material-icons prefix">email</i>
										<input id="email-login" type="email" class="validate" name="email-login" value="">
										<label for="email-login">Email</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">lock</i>
										<input id="password-login" type="password" class="validate" name="password-login" value="">
										<label for="password-login">Password</label>
									</div>
								</div>
								<div class="row right">
									<button type="submit" class="btn-flat">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
	<div class="row">
		<div class="col ">
			<a href="index.php" class="black-text icon-back"><i class="material-icons">arrow_back</i></a>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/vendor/materialize.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<?php $action = $_GET["a"];?>
<?php errorAlert($action); ?>
</html>
