<?php $authentication = true; ?>
<?php include "controller/bootstrap.php"; ?>
<?php $page_title = "Administration Area - Application " ; ?>
<?php $data = get_drawings($_SESSION["user"]["id"]); ?>
<?php include "controller/metainformations.php"; ?>
<body class="">
	<div class="section">
		<div class="container">
			<div class="row center-align">
				<h5>Your Drawings</h5>
			</div>
			<div class="row mt-5">
				<?php foreach ($data as $media): ?>
					<div class="col s4 right-align content-preview-drawing">
						<span>
							<img class="responsive-img materialboxed" src="controller/<?= $media["file"]; ?>">
						</span>
						<div class="info">
							<h6><?= $media["title"] ?></h6>
							<p><?= date('d/m/Y', strtotime($media["added"])); ?></p>
						</div>
					</div>	
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
</body>
<?php include 'view/script.php' ?>
