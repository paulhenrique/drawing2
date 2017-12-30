<?php
	include "controller/lib.php";
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="row">
		<div class="col s2 grey darken-4 white-text align-left" id="painel">
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
			</div>
			<div id="camadas" class="hidden">
				<div id="layers">
					<ul id="listObjetos" class="collection black-text">
					</ul>
				</div>
				<div class="Propriedades">
					<a id="deletar-item" class="red-text darken-1 tooltipped right" data-position="bottom" data-delay="50" data-tooltip="Deletar Item" data-item="" ><i class="material-icons">delete</i></a>
					<h6>Propriedades</h6>
					<div class="row">
						<p>Cor:</p>
						<div id="alterColor">
							<div ></div>
						</div>	
						<p>Borda:</p>
						<div id="alterBorderColor">
							<div></div>
						</div>
						<form action="#">
							<p class="range-field">
							<input type="range" id="rangeAlter" min="0" max="50" />
							</p>
						</form>	
					</div>
				</div>
			</div>
		</div>
		<div id="containment-wrapper" class=" col s10 container-obj">
		</div>
	</div>
</body>
<script  src="js/vendor/jquery.js"></script>
<!-- <script  src="js/vendor/jqueryui.js"></script> -->
<script data-main="js/main" src="js/vendor/require.js"></script>
</html>