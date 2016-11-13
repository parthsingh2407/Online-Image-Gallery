<?php
$a="album";
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$pass1=MD5($pass);
$profe=$_REQUEST['profe'];
$bday=$_REQUEST['bday'];
$gen=$_REQUEST['gen'];
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query2="insert into users(firstname,lastname,username,password,gender,profession,dob) values('$fname','$lname','$uname','$pass','$gen','$profe','$bday')";
$query3="insert into imm(id,ialbum)values('$uname','$a')";
$query1="select * from users";
$result2=mysql_query($query2);
$result3=mysql_query($query3);
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
;
}

header("Location: pro3.htm");
?>
