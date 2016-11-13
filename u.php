<?php
$name=$_REQUEST['n1'];
$pass=$_REQUEST['p1'];
$connection=mysql_connect("localhost","root","");
echo "connection established<br>";
$db=mysql_select_db("db");
echo "database selected<br>";
$query1="select * from student";
$query2="insert into student(name,password)values('$name','$pass')";
$result2=mysql_query($query2);
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
echo $row['name']."<br>";
echo $row['password'];
}
?>