<?php 
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
<body class="main home-page">
	<div class="container-fluid center">
		<div class="row header">
			<div class="col s4 offset-s4">
				<h1 style="font-size: 10rem;" ><span style="font-weight: 100; ">d</span>.exp</h1>
				<h1 style="font-size: 3rem; margin: 5rem 0 5rem 0;" ><span style="font-weight: 100; ">drawing</span>experience</h1>
				<a href="login.php" class="waves-effect waves-light btn-flat tooltipped" data-position="bottom" data-delay="50" data-tooltip="Entre ou cadastre-se">Sign Up / Log In</a>
				<!-- <img src="images/logo-drawing.png" class="responsive-img"> -->
			</div>
		</div>
	</div>
	<!-- <div class="container">
		<div class="row">
			<div class="col s4 center">
				<h1 class="material-icons">web</h1>
				<h4>A WEB INTERFACE</h4>
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col s4 offset-s2 center">
				<h1 class="material-icons">people</h1>
				<h4>YOU AS USER</h4>
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div> -->
	<div class="container-fluid footer">
		<div class="row">
			<p class="col s1 offset-s11"><span style="font-size: 2rem"><span style="font-weight:100;">d</span>.exp</span><br> <span style="color:#383838; font-size: 0.8rem;">as a IFSP tool</span></p>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/vendor/materialize.min.js"></script>
</html>