<?php $authentication = false;  ?>
<?php include 'controller/bootstrap.php' ?>
<?php $page_title = "Início - Drawing Experience" ?>
<?php include 'controller/metainformations.php' ?>
<?php include 'view/style.php' ?>
<body class="grey lighten-5">
	<?php include 'view/components/navbar_general.php' ?>
	<div class="container-fluid ">
		<div class="row center mt-5">
			<div class="col s6 offset-s3 center">
				
			</div>
		</div>
	</div>
</body>
<?php include 'view/script.php' ?>
<?php if(isset($_GET["a"])):?>
	<?php $action = $_GET["a"];?>
	<?php errorAlert($action); ?>
<?php endif; ?>

