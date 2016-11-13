<?php
$name1=$_REQUEST['n2'];
$connection=mysql_connect("localhost","root","");
echo "connection established"."<br>";
$db=mysql_select_db("db");
echo "database selected"."<br>";
$query2="insert into stu4(name)values('$name1')";
$query1="select * from stu4";
$result2=mysql_query($query2);
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
echo $row['name']."<br>";
}
?>