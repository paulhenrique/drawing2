<?php $authentication = true; ?>
<?php include "controller/bootstrap.php"; ?>
<?php $page_title = "Administration Area - Application " ; ?>
<?php $data = get_drawings($_SESSION["user"]["id"]); ?>
<?php include "controller/metainformations.php"; ?>
<?php 
	$action = (empty($_GET["page"]))? sha1("inicio") : $_GET["page"];
 ?>

<body class=" grey lighten-5">
	<div class="container-fluid">
		<div class="navbar-fixed ">
			<nav>
				<div class="nav-wrapper grey darken-4">
					<a href="#!" class="brand-logo ml-1">d.exp<i class="material-icons">edit</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html"><i class="material-icons">help_outline</i></a></li>
						<li><a href="controller/logout.php"><i class="material-icons">exit_to_app</i></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<ul class="sidenav sidenav-fixed pt-3">
			<li><div class="user-view">
				<div class="background">
					<img src="webroot/images/bg-user-sidebar.png">
				</div>
				<a href="#user"><i class="white-text material-icons medium">person</i></a>
				<a href="#name"><span class="white-text name"><?= $_SESSION["user"]["name"] ?></span></a>
				<a href="#email"><span class="white-text email"><?= $_SESSION["user"]["email"] ?></span></a>
			</div></li>
			<li><a class="subheader">Admin</a></li>
			<li class="<?= ($action == sha1("inicio"))? "active" : "" ?>"><a href="admin.php?page=<?= sha1("inicio") ?>" class="waves-effect"><i class="material-icons">home</i>Inicio</a></li>
			<li class="<?= ($action == sha1("perfil"))? "active" : "" ?>"><a href="admin.php?page=<?= sha1("perfil") ?>" class="waves-effect"><i class="material-icons">person</i>Perfil</a></li>
			<li class="<?= ($action == sha1("configuracoes"))? "active" : "" ?>"><a href="admin.php?page=<?= sha1("configuracoes") ?>" class="waves-effect"><i class="material-icons">settings</i>Configurações</a></li>
			<li><a href="#!" class="waves-effect"><i class="material-icons">edit</i>Drawing</a></li>
			<li class="<?= ($action == sha1("sobre"))? "active" : "" ?>" ><a href="admin.php?page=<?= sha1("sobre") ?>" class="waves-effect"><i class="material-icons">info</i>Sobre</a></li>
		</ul>
	</div>
	<div class="container-fluid">

		<div class="row">
			<div class="col s9 offset-s3 pt-1">
				<?php 
					switch ($action) {
						case sha1("inicio"):
							include 'view/components/inicio_admin.php';
							break;
						case sha1("perfil"):
							include 'view/components/perfil_admin.php';
							break;
						case sha1("configuracoes"):
							include 'view/components/configuracoes_admin.php';
							break;
						case sha1("sobre"):
							include 'view/components/sobre_admin.php';
							break;
						default:
							// code...
							break;
					}
				 ?>
			</div>
		</div>
	</div>
</div>
</body>
<?php include 'view/script.php' ?>
