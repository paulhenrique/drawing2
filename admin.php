<?php
include "controller/lib.php";
include 'controller/conn.php';
session_start();
if(!isset($_SESSION["user"]))
	header("location:login.php?a=3");
$data = get_drawings($_SESSION["user"]["id"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Drawing</title>
	<?php include 'view/style.php' ?>
</head>
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
<script  src="js/vendor/labjs.js"></script>
<script  src="js/main.js"></script>
</html>
