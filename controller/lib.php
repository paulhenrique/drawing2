<?php
function view($viewName, $data = [], $templatePersonalized = false) {
	if ($templatePersonalized) {
		$templatePath = $viewName . '.view.php';
	} else {
		$templatePath = 'template.php';
	}
    //TODO: criar validação para verificar se o arquivo existe antes de tentar chamar!
	require "view/" . $templatePath;
}

function login(){
	session_start();
	$email = $_POST["email-login"];
	$senha = sha1($_POST["password-login"]);
	
	require "conn.php";

	$sql = "SELECT * FROM user WHERE email='".$email."' AND senha='".$senha."';";

	$result = mysqli_query($conn, $sql);;

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$_SESSION["user"]["name"] = $row["name"];
			$_SESSION["user"]["email"] = $row["email"];
			$_SESSION["user"]["id"] = $row["id"];
		}
		return true;
	}
	else
		return false;

	$conn->close();
}

function register(){
	session_start();
	
	$email = $_POST["email-register"];
	$senha = sha1($_POST["password-register"]);
	$name =  $_POST["name-register"];
	
	echo $email;
	echo $senha;
	echo $name;
	
	include "conn.php";

	$sql = "INSERT INTO user(email, senha, name) VALUES ('".$email."', '".$senha."', '".$name."');";
	echo $sql;
	$result = mysqli_query($conn, $sql);

	if($result)
		return true;
	else
		return false;

	$conn->close();
}
function toastThis($string){
	echo "<script>";
	echo "Materialize.toast('".$string."', 4000);";
	echo "</script>";
}

function errorAlert($action){
	switch ($action) {
		case '1':
			toastThis("Welcome, enter to access the system");
		break;
		case '2':
			toastThis("User or password are wrong");
		break;
		case '3':
			toastThis("You need connected to access this page");
		break;
		default:
			toastThis("something wrong is not right");
		break;
	}
}
?>
