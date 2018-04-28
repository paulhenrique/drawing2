<h3 class="thin">Configurações</h3>
<div class="row">
	<div class="col m8 s12">
		<blockquote>
			Lembre-se que erros ainda podem ser encontrados, bem como falhas e bugs, pois o sistema está em desenvolvimento. Informe qualquer tipo de problema utilizando o página de ajuda.
		</blockquote>
	</div>
</div>
<form class="col m10 mt-3 " action="verify.php?a=<?= sha1("update_user") ?>" method="post">
	<div class="row">
		<div class="input-field col m8">
			<input placeholder="Nome" value="<?= $_SESSION["user"]["name"] ?>" id="nome_perfil" type="text" class="validate" disabled>
			<label for="nome_perfil">Nome</label>
		</div>
		<div class="col m3 mt-3">
			<a href="admin.php?page=<?= sha1("configuracoes") ?>" class="waves-effect waves-light btn">Alterar
				<i class="material-icons right">edit</i>
			</a>        
		</div>
	</div>
</form>
<form class="col m10 mt-3 " action="verify.php?a=<?= sha1("update_user") ?>" method="post">
	<div class="row">
		<div class="input-field col m8">
			<input placeholder="Email" value="<?= $_SESSION["user"]["email"] ?>" id="email_usuario" type="email" class="validate" name="email" disabled>
			<label for="email_usuario">Email</label>
		</div>
		<div class="col m3 mt-3">
			<button class="btn waves-effect waves-light btn" type="submit">Alterar
				<i class="material-icons right">edit</i>
			</button>        
		</div>
	</div>
</form>
<div class="col m3 mt-3">
	<button class="btn waves-effect waves-light btn" type="submit">Alterar Senha
		<i class="material-icons right">edit</i>
	</button>        
</div>
