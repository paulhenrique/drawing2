<?php
session_start();

$data = $_POST['data'];
$data = substr($data,strpos($data,",")+1);
$data = base64_decode($data);
$author = $_SESSION["user"]["id"];
$file = 'users/'.$author.'/'.sha1(time()).'.png';
file_put_contents($file, $data);

include 'conn.php';
$query = "INSERT INTO drawings(file, author) VALUES('".$file."', '".$author."')";
$result = mysqli_query($conn,$query);
if(!result)
	echo "batata";
else
	echo"laranja";
?>