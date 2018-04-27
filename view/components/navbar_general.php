<div class="navbar-fixed ">
	<nav>
		<div class="nav-wrapper grey darken-4">
			<a href="#!" class="brand-logo ml-1">d.exp<i class="material-icons">edit</i></a>
			<ul class="right hide-on-med-and-down">
				<?php if ($page_title == "Drawing - Application "): ?>
					<li><a class="white-text modal-trigger tooltipped"  data-position="bottom" data-tooltip="Salvar Drawing" href="#save-drawing-modal""><i class="material-icons">save</i></a></li>
					<li><a class="white-text tooltipped"  data-position="bottom" data-tooltip="Área de administração " href="admin.php"><i class="material-icons">person</i></a></li>	
				<?php endif ?>
				<?php if ($page_title != "Início - Drawing Experience"): ?>
					<li><a href="sass.html" class="tooltipped"  data-position="bottom" data-tooltip="Ajuda"><i class="material-icons">help_outline</i></a></li>
					<li><a href="controller/logout.php" class="tooltipped"  data-position="left" data-tooltip="Sair"><i class="material-icons">exit_to_app</i></a></li>
				<?php else: ?>
					<li><a href="index.php"><i class="material-icons left">home</i>Início</a></li>
					<li><a href="login.php" class="white-text"><i class="material-icons left">person</i>Entrar</a></li>
					<li><a href="cadastro.php" class="white-text"><i class="material-icons left">person_add</i>Cadastro</a></li>
				<?php endif ?>
			</ul>
		</div>
	</nav>
</div>