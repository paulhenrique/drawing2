<div class="modal " id="modal_cadastro_index">
	<div class="modal-content center">
		<h4 class="grey-text text-darken-4">Cadastro</h4>
		<div class="row mt-3" id="sign-up">
			<form class="col s12" id="register-form" method="post" action="controller/verify.php?a=register">
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<input name="name-register" id="first_name" type="text" class="validate" title="Preencha com seu nome" require>
						<label for="first_name">Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<input id="password_register" name="password-register" type="password" class="validate" title="Sua senha deve conter no mínimo 6 caracteres" minlength=6 require>
						<label for="password_register">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<input id="password_register_verify" type="password" class="validate" title="Confirme sua senha"  minlength=6 require>
						<label for="password_register_verify">Rewrite Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<input id="email-register" type="email" name="email-register" class="validate" require>
						<label for="email">Email</label>
						<span class="helper-text" data-error="wrong" data-success="right">Você fará login através desse email</span>
					</div>
				</div>
				<!-- <button type="submit" id="btn-register">Cadastrar</button> -->
			</form>
		</div>
	</div>
	<div class="modal-footer">
		<div class="row">
			<a href="index.php" class="btn-flat">Voltar</a>
			<a class="btn" id="btn-register">Cadastrar</a>
		</div>
	</div>
</div>