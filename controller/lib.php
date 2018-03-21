<?php
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
			$_SESSION["user"]["folder"] = sha1($row["name"]);
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

	include "conn.php";

	$sql = "INSERT INTO user(email, senha, name) VALUES ('".$email."', '".$senha."', '".$name."');";
	$result = mysqli_query($conn, $sql);
	shell_exec("mkdir users/".get_last_insert_id());
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

		break;
	}
}

function get_drawings($id){
	include 'conn.php';
	// $query = "SELECT * FROM drawings WHERE author=".$id;
	$query = "SELECT drawings.id, author, title, file, added, name  FROM drawings INNER JOIN user ON drawings.author=user.id WHERE author=".$id;
	$result = mysqli_query($conn, $query);
	$drawings = array();
  while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $drawings[] = $linha;
  }

	return $drawings;
}

function get_last_insert_id(){
	include'conn.php';
	$query = "SELECT * FROM user ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($conn, $query);
	while ($linha = $result->fetch_assoc()) {
		$id =  $linha["id"];
	}
	return $id;
}
function verify_email(){
	include 'conn.php';
	$email = $_POST["email"];
	$query = "SELECT * FROM user WHERE email ='".$email."'";
	$result = mysqli_query($conn, $query);
	if($result->num_rows>0)
		return true; //há um email registrado
	else
		return false; //não há um email registrado
}

function delete_drawing(){
	include "conn.php";
	$drawing_id = $_POST["id"];
	$query = "DELETE from drawings WHERE id=".$drawing_id;
	$result = mysqli_query($conn, $query);
	return ($result)? true:false;
}
?>
