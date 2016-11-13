<?php
$name=$_REQUEST['n1'];
$pass=$_REQUEST['p1'];
$course=$_REQUEST['course'];
$date=$_REQUEST['Date'];
$month=$_REQUEST['Month'];
$year=$_REQUEST['Year'];
if(isSet($_REQUEST['m'])=='male'||isSet($_REQUEST['m'])=='female')
{	$gender=$_REQUEST['m'];	}
$connection=mysql_connect("localhost","root","");
echo "connection established"."<br>";
$db=mysql_select_db("db");
echo "database selected"."<br>";
$query2="insert into student1(name,password,course,date,age,gender) values('$name','$pass','$course','$year-$month-$date','$age','$gender')";
$query1="select * from vu";
$result2=mysql_query($query2);
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
echo "<br>";
echo $row['name']."<br>";
echo $row['password']."<br>";
echo $row['course']."<br>";
echo $row['date']."<br>";
echo $row['year(sysdate())-year(date)']."<br>";
echo $row['gender'];
}
?>