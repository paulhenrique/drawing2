<?php
include 'conn.php';
session_start();

$title = $_POST["title"];
$alteracoes = $_POST['dtAlteracoes'];
$data = $_POST['data'];
$data = substr($data,strpos($data,",")+1);
$data = base64_decode($data);
$author = $_SESSION["user"]["id"];
$file = 'users/'.$author.'/'.sha1(time()).'.png';
file_put_contents($file, $data);

$conexao = new Connect();
$conn = $conexao->nova_conexao();

$query = "INSERT INTO drawings(file, author, title, dtAlteracoes) VALUES('".$file."', '".$author."', '".$title."', '".$alteracoes."')";
$result = mysqli_query($conn,$query);

echo mysqli_error($conn);
echo "Sucesso";
?>
