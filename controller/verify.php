<?php 
	include "lib.php";
	$action = $_GET["a"];
	if ($action=="register"){
		$result = register();
		if($result)
			header("location: ../login.php?a=login");
	}
	else if ($action=="login"){
		$result = login();
		if ($result) 
			header("location: ../application.php");
		else
			echo "<script>javascript:history.back()</script>";
	}
?>