<?php 
	include "lib.php";
	$action = $_GET["a"];
	if ($action=="register"){
		$result = register();
		if($result)
			header("location: ../login.php?a=1");
	}
	else if ($action=="login"){
		$result = login();
		if ($result) 
			header("location: ../application.php");
		else
			header("location: ../login.php?a=2");
	}
?>