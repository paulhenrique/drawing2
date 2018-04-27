<?php $authentication = true; ?>
<?php include "controller/bootstrap.php"; ?>
<?php $page_title = "Drawing - Application " ; ?>
<?php include "controller/metainformations.php"; ?>
<body class="main-application user-functions">
	<?php include 'view/components/navbar_general.php' ?>
	<?php include 'view/components/footer_application.php' ?>
	<?php include 'view/components/containment_wrapper_application.php'; ?>
	<?php include 'view/components/sidebar_application.php'; ?>
	<?php include 'view/components/canvas_application.php'; ?>
	<?php include 'view/components/elements/modal_save_drawing.php' ?>
</body>
<?php include 'view/script.php' ?>

