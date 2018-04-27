<?php $authentication = false;  ?>
<?php include 'controller/bootstrap.php' ?>
<?php $page_title = "Início - Drawing Experience" ?>
<?php include 'controller/metainformations.php' ?>
<?php include 'view/style.php' ?>

<body class="main home-page grey lighten-5">
	<?php include 'view/components/navbar_general.php' ?>
	<div class="container-fluid center">
		<div class="row header mt-5">
			<div class="col s4 offset-s4">
				<h1 style="font-size: 10rem;" ><span style="font-weight: 100; ">d</span>.exp</h1>
				<h1 style="font-size: 3rem; margin: 5rem 0 5rem 0;" ><span style="font-weight: 100; ">drawing</span>experience</h1>
				<a href="login.php" class="waves-effect waves-light btn-flat">Log In</a>
				<a href="cadastro.php" class="waves-effect waves-light btn-flat ">Sign Up</a>
			</div>
		</div>
	</div>
	<!-- <div class="container-fluid footer">
		<div class="row">
			<p class="col s1 offset-s11"><span style="font-size: 2rem"><span style="font-weight:100;">d</span>.exp</span><br> <span style="color:#383838; font-size: 0.8rem;">as a IFSP tool</span></p>
		</div>
	</div> -->
</body>


<?php include 'view/script.php' ?>