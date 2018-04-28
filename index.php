<?php $authentication = false;  ?>
<?php include 'controller/bootstrap.php' ?>
<?php $page_title = "Início - Drawing Experience" ?>
<?php include 'controller/metainformations.php' ?>
<?php include 'view/style.php' ?>

<body class="main home-page grey lighten-5 background-image">
	<?php include 'view/components/navbar_general.php' ?>
	<div class="container-fluid center">
		<div class="row header mt-5">
			<div class="col s4 offset-s4">
				<h1 style="font-size: 10rem;" ><span style="font-weight: 100; ">d</span>.exp</h1>
				<h1 style="font-size: 3rem; margin: 5rem 0 5rem 0;" ><span style="font-weight: 100; ">drawing</span>experience</h1>
				<a href="#modal_cadastro_index" class="waves-effect waves-light btn-flat white-text modal-trigger">Cadastrar</a>
				<a  href="#modal_login_index" class="white-text waves-effect waves-light btn modal-trigger">Entrar</a>
			</div>
		</div>
	</div>
</body>

<?php include 'view/components/elements/modal_login_index.php' ?>
<?php include 'view/components/elements/modal_cadastro_index.php' ?>
<?php include 'view/script.php' ?>
<script type="text/javascript">
	verify_passwords();
</script>