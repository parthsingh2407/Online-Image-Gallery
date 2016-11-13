

<?php
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

?>


<html>
<head>
	<title> How To Reach Vanarasi </title>
	<link rel="stylesheet" type="text/css" href="lite.css">
</head>
<body>
<div id="site_main">
	<div id="site_content">
		<div id="header_div">
			<style="vertical-align:bottom;">&nbsp &nbsp &nbsp &nbsp&nbsp  Picasa
		</div>
</div>
<div id="site_content1">
<table>
		<tr> <td> <div id="side_menu">
			<table id="smenu" cellspacing="5px" cellpadding="7px">
			<tr> <td class="hover-shadow"> <a href="error.html"> About Me</a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="error.html"> Photos</a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="error.html"> Locate Friends </a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="error.html"> Search</a> </td> </tr>
			</table>
		</div> </td>
		<td>
		<div id="home_main">
<?php

$query2="insert into users(firstname,lastname,username,password,gender,profession,dob) values('$fname','$lname','$uname','$pass','$gen','$profe','$bday')";
$query1="select * from users";

$result2=mysql_query($query2);
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
;
}
?>
<a href='temp1.htm' class="hover-shadow">Thank You for Signing Up. </a><br>
		</div>
		</td></tr> </table>

</div>
	
</div>
</body>
</html>