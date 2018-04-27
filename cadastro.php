<?php $authentication = false;  ?>
<?php include 'controller/bootstrap.php' ?>
<?php $page_title = "Início - Drawing Experience" ?>
<?php include 'controller/metainformations.php' ?>
<?php include 'view/style.php' ?>
<body class=" grey lighten-5">
	<?php include 'view/components/navbar_general.php' ?>
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="row">
				<div class="col s12 ">
					<div class="container center">
						<h4 class="toggle-for-sign-up">Cadastro</h4>
						<div class="row mt-5" id="sign-up">
							<form class="col s12" id="register-form" method="post" action="controller/verify.php?a=register">
								<div class="row">
									<div class="input-field col s8 offset-s2">
										<input name="name-register" id="first_name" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Preencha com seu nome">
										<label for="first_name">Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8 offset-s2">
										<input id="password_register" name="password-register" type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Sua senha deve conter no mínimo 6 caracteres" minlength=6 >
										<label for="password_register">Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8 offset-s2">
										<input id="password_register_verify" type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Confirme sua senha"  minlength=6 >
										<label for="password_register_verify">Rewrite Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8 offset-s2">
										<input id="email-register" type="email" name="email-register" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Você fará login através desse email">
										<label for="email">Email</label>
									</div>
								</div>
								<div class="row center mt-5">
									<a href="index.php" class="btn-flat">Voltar</a>
									<a class="btn" id="btn-register">Cadastrar</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php include 'view/script.php' ?>
	<script type="text/javascript">
		verify_passwords();
	</script>
	<?php 
	$action = (empty($_GET))? "null" : $_GET["a"];
	errorAlert($action);
	?>
	</html>
