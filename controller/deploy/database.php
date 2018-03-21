<?php

include '../conn.php';


$table = "CREATE TABLE user(
	id INT 	UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name 	VARCHAR(255) NOT NULL,
	email 	VARCHAR(255) NOT NULL,
	senha 	VARCHAR(255) NOT NULL
);";

$table2 = "CREATE TABLE drawings(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	author INT NOT NULL REFERENCES user(id) ON UPDATE CASCADE ON DELETE SET NULL,
	file VARCHAR(255) NOT NULL,
	title VARCHAR(255) NOT NULL
);";

$drop = "DROP table user, drawings;";

$result = mysqli_query($conn, $table2);

if ($result) {
	echo "Foi";
	mysqli_close($conn);
}else{
	echo "não foi".$result;
}

?>
