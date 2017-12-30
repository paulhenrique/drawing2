<?php
include'lib.php';
session_start();
session_unset();
session_destroy();
$_SESSION = array();
// header("location: index.php");
echo "<script>location.href='../index.php'</script>";
?>