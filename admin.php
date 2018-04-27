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
		<?php include 'view/components/navbar_general.php' ?>
		<?php include 'view/components/sidebar_admin.php' ?>
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
