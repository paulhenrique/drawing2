<?php
include "controller/lib.php";
session_start();
if(!isset($_SESSION["user"]))
	header("location:login.php?a=3");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Drawing</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/colorpicker.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/application.css">
</head>
<body class="main-administration">
<img src="controller/output.png">
</body>
<script  src="js/vendor/labjs.js"></script>
<script  src="js/main.js"></script>
</html>