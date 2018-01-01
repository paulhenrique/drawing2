<?php
$data = $_POST['data'];
$data = substr($data,strpos($data,",")+1);
$data = base64_decode($data);
$file = 'output.png';
file_put_contents($file, $data);
echo "Success!";
?>