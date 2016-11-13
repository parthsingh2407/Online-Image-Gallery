<?php
$pic=$_REQUEST['b'];
echo $pic;
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query1="DELETE from im where iname='$pic'";
$result1=mysql_query($query1);
unlink($pic);
echo "<a href='login.php'>Redirect</a>";
?>