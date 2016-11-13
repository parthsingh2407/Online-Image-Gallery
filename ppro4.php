<?php
session_start();
$k=$_POST['un'];
$p=$_POST['p'];
$_SESSION['name']=$k;
	$_SESSION['pass']=$p;
header('location: pro4.php');
?>