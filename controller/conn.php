<?php
// $servername = "mysql.hostinger.com.br";
$servername = "localhost";
// $username = "u766864963_drawi";
$username = "root";
// $password = "123456";
$password = "123";
// $database = "u766864963_drawi";
$database = "drawing";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

mysqli_query($conn, "set names 'utf8'");
// Check connection
if (!$conn)
	die("Connection failed: " . mysqli_connect_error());

// echo "Connected successfully";
?>
