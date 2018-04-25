<?php 
include "controller/lib.php";

session_start();

if($authentication == true){
	if(!isset($_SESSION["user"]))
		header("location:login.php?a=3");
}else{
	if(isset($_SESSION["user"]))
		header("location:application.php");
}
?>
<!DOCTYPE html>
<html>
