<?php $authentication = false;  ?>
<?php include 'controller/bootstrap.php' ?>
<?php $page_title = "Login - Drawing Experience" ?>
<?php include 'controller/metainformations.php' ?>
<?php include 'view/style.php' ?>
<body>
	<div class="container-fluid">
		<div class="row center mt-5">
			<div class="col s6 offset-s3 center">
				<div class="container">
					<h4 class="toggle-for-login">Log In</h4>
					<div class="row mt-5" id="login">
						<form class="col s12" method="post" id="login_form" action="controller/verify.php?a=login">
							<div class="row center">
								<div class="input-field col s8 offset-s2 center">
									<input id="email-login" type="email" class="validate" name="email-login" value="">
									<label for="email-login">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s8 offset-s2 center">
									<input id="password-login" type="password" class="validate" name="password-login" value="">
									<label for="password-login">Password</label>
								</div>
							</div>
							<div class="row center mt-5">
								<a href="index.php" class="btn-flat">Go Back</a>
								<button class="btn-flat" type="submit" id="btn-login">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include 'view/script.php' ?>
<?php if(isset($_GET["a"])):?>
	<?php $action = $_GET["a"];?>
	<?php errorAlert($action); ?>
<?php endif; ?>

