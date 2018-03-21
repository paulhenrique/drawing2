<?php
	include "lib.php";
	$action = $_GET["a"];
	switch ($action) {
		case 'register':
			$result = register();
			if($result)
				header("location: ../login.php?a=1");
		break;
		case 'login':
			$result = login();
			echo ($result)? 1 : 0;
		break;
		case 'email':
			$result = verify_email();
			echo ($result)? 1 : 0;
		break;
		case 'delete-drawing':
			$result = delete_drawing();
			echo ($result)? 1:0;
		break;
		default:

			break;
	}
?>
