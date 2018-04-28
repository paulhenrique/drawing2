<h3 class="thin">Configurações</h3>
<div class="row">
	<div class="col m8 s12">
		<blockquote>
			Lembre-se que erros ainda podem ser encontrados, bem como falhas e bugs, pois o sistema está em desenvolvimento. Informe qualquer tipo de problema utilizando o página de ajuda.
		</blockquote>
	</div>
</div>
<?php foreach ($data_user as $user): ?>
<form class="col m10 mt-3 " action="controller/verify.php?a=<?= sha1("update_user") ?>" method="post">
	<div class="row">
		<div class="input-field col m12">
			<input placeholder="Nome" value="<?= $user["name"] ?>" name="name" id="nome_perfil" type="text" class="validate" disabled>
			<input type="hidden" name="id" value="<?= $_SESSION["user"]["id"]; ?>">
			<label for="nome_perfil">Nome</label>
		</div>
	</div>
	<div class="row">
		<div class="col m6 offset-m6 right-align">
			<a class="waves-effect waves-light btn disabled-input-remove" data-ref="#nome_perfil">Alterar
				<i class="material-icons right">edit</i>
			</a>
		</div>
	</div>
</form>
<form class="col m10 mt-3 " action="controller/verify.php?a=<?= sha1("update_user") ?>" method="post">
	<div class="row">
		<div class="input-field col m12">
			<input placeholder="Email" value="<?= $user["email"] ?>" name="email" id="email_usuario" type="email" class="validate" name="email" disabled>
			<label for="email_usuario">Email</label>
		</div>
	</div>
	<div class="row">
		<div class="col m6 offset-m6 right-align">
			<a class="btn waves-effect waves-light btn disabled-input-remove" data-ref="#email_usuario">Alterar
				<i class="material-icons right">edit</i>
			</a>
		</div>
	</div>
</form>
<div class="col m3 mt-3">
	<button class="btn waves-effect waves-light btn" type="submit">Alterar Senha
		<i class="material-icons right">edit</i>
	</button>        
</div>
<?php endforeach ?>