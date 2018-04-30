<h3 class="thin">Início</h3>
<div class="row">
	<div class="col m8 s12">
		<blockquote>
			Aqui você pode visualizar os desenhos que criou e salvou ao longo da utilização do <strong>d.exp</strong>, lembre-se que ainda pode encontrar falhas pois o sistema está em desenvolvimento. Informe qualquer tipo de problema utilizando o página de ajuda.
		</blockquote>
	</div>
</div>
<div class="row">
	<?php foreach ($data as $media): ?>
		<div class="col s12 m3">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="controller/<?= $media["file"]; ?>">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4"><?= $media["title"] ?><i class="material-icons right">more_vert</i></span>
				</div>
				<div class="card-reveal grey darken-4">
					<span class="card-title white-text text-darken-4 uppercase"><?= $media["title"] ?><i class="material-icons right">close</i></span>
					<p><a href="controller/<?= $media["file"]; ?>" download="<?= $media["title"] ?>"><i class="material-icons left">file_download</i> Download</a></p>
					
					<form method="post" action="application.php">
						<input type="hidden" name="data" value='<?= $media["dtAlteracoes"] ?>'>
						<button type="submit" id="editar_data" style="display: none;"></button>
					</form>
					<label for="editar_data">
						<p>
							<a class="green-text text-darken-1" ><i class="material-icons left">edit</i> Edit</a>
						</p>
					</label>

					<p><a class="red-text delete-drawing" href="admin.php?page=<?= sha1("inicio") ?>" data-figure="<?= $media["id"] ?>"><i class="material-icons left">delete_forever</i> Excluir</a></p>
					<div class="chip">
						Criado em: <?= date('d/m/Y', strtotime($media["added"])); ?>
					</div>			
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>