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
<body>
	<div class="container-fluid">
			<div class="row center mt-5">
				<div class="col s6 offset-s3 center">
					<div class="container">
						<h4 class="toggle-for-login">Log In</h4>
						<div class="row mt-5" id="login">
							<form class="col s12" method="post" id="login_form" action="controller/verify.php?a=login">
								<div class="row center">
									<div class="input-field col s8 offset-s2 center">
										<input id="email-login" type="email" class="validate" name="email-login" value="">
										<label for="email-login">Email</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8 offset-s2 center">
										<input id="password-login" type="password" class="validate" name="password-login" value="">
										<label for="password-login">Password</label>
									</div>
								</div>
								<div class="row center mt-5">
									<a href="index.php" class="btn-flat">Go Back</a>
									<button class="btn-flat" type="submit" id="btn-login">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/vendor/materialize.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<?php if(isset($_GET["a"])):?>
<?php $action = $_GET["a"];?>
<?php errorAlert($action); ?>
<?php endif; ?>
</html>
