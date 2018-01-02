<?php
include "controller/lib.php";
include 'controller/conn.php';
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
	<div class="container-fluid">
		<div class="row">
			<div class="col s2 dark-area position-relative side-bar">
				<div class="section center">
					<img class="responsive-img" width="150" src="images/logo-drawing.png">
				</div>
				<div class="divider"></div>
				<div class="section">
					<h6><?= $_SESSION["user"]["name"]; ?></h6>
				</div>
				<div class="divider"></div>
				<ul>

					<li>Sobre</li>
					<li>Outras Aplicações</li>
					<a href="application.php"><li>Voltar ao Drawing</li></a>
					<li>Configurações</li>
					<a href="controller/logout.php"><li>Sair</li></a>
				</ul>
			</div>
			<div class="col s10 offset-s2 black-text">
				<div class="container-fluid">
					<div class="row">
						<?php	$data = get_drawings($_SESSION["user"]["id"]);?>
						<?php foreach ($data as $media): ?>
							<div class="col s4 viewer-drawing">
								<div class="card">
									<div class="card-image">
										<img class="responsive-img materialboxed" src="controller/<?= $media["file"]; ?>">
										<span class="card-title">Card Title</span>
										<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
									</div>
									<div class="card-content">
										<p><?= $media["name"] ?></p>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script  src="js/vendor/labjs.js"></script>
<script  src="js/main.js"></script>
</html>
