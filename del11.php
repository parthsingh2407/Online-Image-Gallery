<?php
session_start();
$id = $_GET['fname'];      
$a=$_SESSION['album'];
      
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("db");
$query1="delete from im WHERE iname = '$id'";		
$result1=mysql_query($query1);

unlink($id);
header("Location: albumpic.php?album=$a");
?>
