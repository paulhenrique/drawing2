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
					<p><a href="#">View</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4 uppercase"><?= $media["title"] ?><i class="material-icons right">close</i></span>
					<div class="chip">
						<?= date('d/m/Y', strtotime($media["added"])); ?>
					</div>			
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>