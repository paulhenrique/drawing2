<?php

require_once '../conn.php';


$sql = "CREATE TABLE user(
	id INT 	UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name 	VARCHAR(255) NOT NULL,
	email 	VARCHAR(255) NOT NULL,
	senha 	VARCHAR(255) NOT NULL
	
);";

$resultado = mysqli_query($conn, $sql);

if(!$resultado)
    echo mysqli_error(conn());