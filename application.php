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
	<!-- <div class="top-bar-config">
				<ul>
					<li><a href="#save-drawing-modal">Save</a></li>
					<li><a href="admin.php">Admin</a></li>
					<li><a href="controller/logout.php">Sair</a></li>
				</ul>
			</div> -->
			<body class="main-application user-functions">
				<div class="bar-footer">
					<a class="mode-selection active tooltipped" data-position="right" data-delay="50" data-tooltip="Select" data-active="#select">
						<i class="fa fa-mouse-pointer" aria-hidden="true"></i>
					</a>
					<a class="mode-selection" data-form="#square" data-active="#forma">
						<i class="far fa-square"></i>
					</a>
					<a class="mode-selection" data-form="#circle" data-active="#forma">
						<i class="far fa-circle"></i>
					</a>
					<a class="mode-selection" data-form="#diamond" data-active="#forma">
						<i class="fas fa-diamond"></i>
					</a>
					<a class="mode-selection" data-form="#triangle" data-active="#forma">
						<i class="fas fa-exclamation-triangle"></i>
						
					</a>
				</div>
	<!-- 	<div class="row">
			<div class="col s1 grey darken-4 white-text align-left" id="painel">
				<div class="mode">
					<a class="mode-selection active tooltipped" data-position="bottom" data-delay="50" data-tooltip="Select" data-active="#select">
						<i class="fa fa-mouse-pointer" aria-hidden="true"></i>
					</a>
					<a class="mode-selection tooltipped" data-position="bottom" data-delay="50" data-tooltip="Adicionar Geometria" data-active="#forma">
						<i class="fa fa-plus-square" aria-hidden="true"></i>
					</a>
					<a class="mode-selection tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar Propriedades" data-active="#camadas">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</a>
				</div>
				<div id="select" class="col s12 hidden ">
				</div>
				<div id="balde" class="col s12 hidden">
				</div>
				<div id="forma" class="hidden">
					<div class="row">
						<p class="clear">Formas:</p>
					</div>
					<div class="row formas">
						<div>
							<a class="forma-selection active" data-active="#square">
								<div class="forma-icone quadrado"></div>
							</a>
							<a class="forma-selection" data-active="#circle">
								<div class="forma-icone circulo"></div>
							</a>
							<a class="forma-selection" data-active="#diamond">
								<div class="forma-icone diamante"></div>
							</a>
							<a class="forma-selection" data-active="#triangle">
								<div class="forma-icone triangulo"></div>
							</a>
						</div>
					</div>
					<div class="row">
						<p>Cor:</p>
						<div id="colorSelector">
							<div ></div>
						</div>
						<p>Borda:</p>
						<div id="borderSelector">
							<div></div>
						</div>
						<div class="row">
							<p>Espessura da borda:</p>
						</div>
						<form action="#">
							<p class="range-field">
								<input type="range" id="range" min="0" max="50" />
							</p>
						</form>
					</div>
				</div> -->

				<!-- </div> -->
				<div id="containment-wrapper" class=" col s10 container-obj">
				</div>
				<!-- <div class="row">
					<p>Cor:</p>
					<div class="row">
						<p>Espessura da borda:</p>
					</div>
					<form action="#">
						<p class="range-field">
							<input type="range" id="range" min="0" max="50" />
						</p>
					</form>
				</div> -->
				<div id="camadas">
					<div id="layers">
						<ul id="listObjetos" class="collection black-text">
						</ul>
					</div>
					<div id="colors-config">
						<h1 class="title">Colors</h1>
						<div id="colorSelector">
							<div></div>
						</div>
						<div id="borderSelector">
							<div></div>
						</div>
					</div>
					<a id="deletar-item" class="red-text darken-1 tooltipped right" data-position="bottom" data-delay="50" data-tooltip="Deletar" data-item="" ><i class="material-icons">delete</i></a>

				</div>
			</div>
		</div>
		<div class="canvas-container">
		</div>
		<!-- Modal Trigger -->
		<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->

		<!-- Modal Structure -->
		<div id="save-drawing-modal" class="modal">
			<div class="modal-content">
				<h4>Save Drawing</h4>
				<div class="row">
					<form class="col s6 " action=""  method="post">
						<div class="row center">
							<div class="input-field col s12 center">
								<input id="title-text" type="text" class="validate tooltipped" value="" data-position="bottom" data-delay="50" data-tooltip="A title for your Drawing" name="email-login" value="drawing" minlength=3>
								<label for="email-login">Title</label>
							</div>
						</div>
						<!-- <div class="row">
							<div class="input-field col s12 center">
								<textarea id="textarea1" class="materialize-textarea validate" maxlength="150"></textarea>
								<label for="textarea1">Description</label>
							</div>
						</div> -->
					</form>
					<div class="col s6">
						<p>Os desenhos salvos no Drawing ficam disponíveis na área "admin" onde podem ser visualizados, salvos e excluídos</p>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<a href="#!"  id="save-drawing" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons left">save</i> Save</a>
			</div>
		</div>


	</body>
	<script  src="js/vendor/labjs.js"></script>
	<script  src="js/main.js"></script>
	</html>
