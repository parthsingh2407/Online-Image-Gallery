<?php
session_start();
$k=$_SESSION['name'];
$a=$_REQUEST['aname'];
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";

$query2="insert into imm(id,ialbum)values('$k','$a')";
$result2=mysql_query($query2);


header("Location: album.php");


?>
