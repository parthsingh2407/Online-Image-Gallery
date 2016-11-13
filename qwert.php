<?php
session_start();
$_SESSION['name']='';
$_SESSION['pass']='';
session_destroy();
$k=$_SESSION['name'];
	$p=$_SESSION['pass'];
include 'temp1.php';
?>
