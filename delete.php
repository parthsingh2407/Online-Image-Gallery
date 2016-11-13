<?php
echo "<form action='delete1.php' value='frm' method='post'>";
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$k=$_COOKIE['u1'];
echo $k;
$query1="select distinct * from im where id='$k'";
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{
	$pic=$row['iname'];
        echo "Name<input type='name' name='b' value='$pic'/>";
	echo "<img src='$pic' style=width:100px;hieght:80px;>";
	echo "<input type='submit' name='d' value='delete'/>";
}
?>