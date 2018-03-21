<?php
session_start();

$title = $_POST["title"];
$data = $_POST['data'];
$data = substr($data,strpos($data,",")+1);
$data = base64_decode($data);
$author = $_SESSION["user"]["id"];
$file = 'users/'.$author.'/'.sha1(time()).'.png';
file_put_contents($file, $data);

include 'conn.php';
$query = "INSERT INTO drawings(file, author, title) VALUES('".$file."', '".$author."', '".$title."')";
$result = mysqli_query($conn,$query);

?>
