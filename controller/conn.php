<?php
$servername = "mysql.hostinger.com.br";
$username = "u766864963_drawi";
$password = "123456";
$database = "u766864963_drawi";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn)
	die("Connection failed: " . mysqli_connect_error());
// echo "Connected successfully";
?>
