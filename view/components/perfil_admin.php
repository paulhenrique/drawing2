<h3 class="thin">Perfil</h3>
<p>essas são as informações disponíveis</p>
<div class="col m8 s12">
	<blockquote>
		Lembre-se que erros ainda podem ser encontrados, bem como falhas e bugs, pois o sistema está em desenvolvimento. Informe qualquer tipo de problema utilizando o página de ajuda.
	</blockquote>
</div>

<?php foreach ($data_user as $user): ?>

<form class="col s10 mt-3 ">
	<div class="row">
		<div class="input-field col s10">
			<input placeholder="Nome" value="<?= $user["name"] ?>" id="nome_perfil" type="text" class="validate" disabled>
			<label for="nome_perfil">Nome</label>
		</div>
		<div class="input-field col s10 mt-3">
			<input id="email_perfil" value="<?= $user["email"] ?>" type="email" class="validate" disabled="">
			<label for="email_perfil">Email</label>
		</div>
		<div class="col s10 align-right mt-3">
			<a href="admin.php?page=<?= sha1("configuracoes") ?>" class="waves-effect waves-light right btn">Editar Informações
				<i class="material-icons right">edit</i>
			</a>        
		</div>
	</div>
</form>
<?php endforeach; ?>