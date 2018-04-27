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
	<li><a href="application.php" class="waves-effect"><i class="material-icons">edit</i>Drawing</a></li>
	<li class="<?= ($action == sha1("sobre"))? "active" : "" ?>" ><a href="admin.php?page=<?= sha1("sobre") ?>" class="waves-effect"><i class="material-icons">info</i>Sobre</a></li>
</ul>