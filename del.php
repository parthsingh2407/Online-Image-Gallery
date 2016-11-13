<?php
$id = $_GET['fname'];            
$connection=mysql_connect("localhost","roots","");
$db=mysql_select_db("db");
$query1="delete from im WHERE iname = '$ids'";		
$result1=mysql_query($query1);

unlink($id);
?>
