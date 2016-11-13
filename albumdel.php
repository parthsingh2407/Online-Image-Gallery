<?php
session_start();
$k=$_SESSION['name'];
$id = $_GET['album'];            
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("db");
$query1="select * from im WHERE ialbum='$id' && id='$k'";		
$result1=mysql_query($query1);
$query3="delete from im WHERE ialbum='$id' && id='$k'";		
$result3=mysql_query($query3);
$query2="delete from imm WHERE ialbum='$id' && id='$k'";		
$result2=mysql_query($query2);
while($row=mysql_fetch_array($result1))
{
$i=$row['iname'];
unlink($i);
}
header('location: album.php');

?>
