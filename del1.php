<?php
$id = $_GET['fname'];            
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("db");
$query1="delete from im WHERE iname = '$id'";		
$result1=mysql_query($query1);

unlink($id);
header('location: ass.php');

?>
