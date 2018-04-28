<div class="modal grey-text text-darken-4 modal-fixed-footer" id="modal_login_index">
	<div class="modal-content">
		<h4 class="grey-text text-darken-4 center">Entrar</h4>
		<form class="col s12 mt-5" method="post" id="login_form" action="controller/verify.php?a=<?= sha1('login') ?>">
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
		</div>
		<div class="row center mt-5 modal-footer ">
			<a href="index.php" class="btn-flat">Voltar</a>
			<button class="btn" id="btn-login">Entrar</button>
		</form>
	</div>
	
</div>