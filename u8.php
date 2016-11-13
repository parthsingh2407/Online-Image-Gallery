<?php
session_start();
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$profe=$_REQUEST['profe'];
$bday=$_REQUEST['bday'];
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$gen=$_REQUEST['gen'];
$_SESSION['pass']=$pass;
$pass1=MD5($pass);
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query2="update users SET firstname='$fname', lastname='$lname', password= '$pass', profession= '$profe', dob= '$bday', gender= '$gen' WHERE username= '$uname'";
$query1="select * from users";
$result2=mysql_query($query2);
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
;
}



header("Location: pro6.php");
?>
