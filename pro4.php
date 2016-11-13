<?php
session_start();
	
if($_SESSION['name']=='')
{
header('location: temp1.php');
}

else 
{


if($_SESSION['name']=='pea')
{
header('location: temp1.php');
}

	$k=$_SESSION['name'];
	$p=$_SESSION['pass'];


	$image='';
$f=0;
$pass1=$p;
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query1='select * from users';		
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
	
	if($row['username']==$k && $row['password']==$pass1)
	{	$f=1;
		$image=$row['profilepic'];
		$fname=$row['firstname'];
		$lname=$row['lastname'];
	}
}
if($f==0)
{header('location: temp1.php');
} 
echo "<html>\n"; 
echo "<head>\n"; 
?>

<script src="jss/jquery-1.11.0.min.js"></script>
<script src="jss/lightbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="litein.css">
<link href="css/lightbox.css" rel="stylesheet" />
<?php
echo "</head>\n"; 
echo "<body onload=\"setupZoom()\">\n"; 
echo "<div id=\"site_main\">\n"; 
echo "	<div id=\"site_content\">\n"; 
echo "		<div id=\"header_div\">\n"; 
?>
<div id="collor">
<style=\"vertical-align:bottom;\">
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<a href=pro4.php >Picasa</a>
</div>
</div>
<div id="logout">
<a href="logout.php" class="hover-shadow"> Logout</a>
</div>
<?php 
echo "</div>\n"; 
echo "<div id=\"site_content1\">\n"; 
?>
<div id="color">
<?php
echo "<table>\n"; 
echo "		<tr> <td> <div id=\"side_menu\">\n"; 
?>
<div class="outside">
  
<div class="inside">
<?php

if($image!="")
{
?>
	<a href='<? echo $image; ?>' data-lightbox="image-1" data-title="My caption"><img src='<? echo $image; ?>' id="pic"></a>
<?php
}
?>
<table id="smenu" cellspacing="5px" cellpadding="7px">
			<tr> <td class="hover-shadow"> <a href="pro6.php"> About Me</a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="ass.php"> Photos</a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="loc.php"> Locate Friends </a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="ser1.php"> Search</a> </td> </tr>
			</table>
</div>
</div>
</div>
<?php
echo "		</div> </td>\n"; 
echo "		<td>\n"; 
echo "		<div id=\"home_main\">\n"; 
echo "\n"; 

echo "Welcome ".$fname." ".$lname;
echo "<br>";

if($image!="")
{
	echo "<b>"."Do you want to change the profile pic?"."</b>";
        echo "<form action='n.php' method='post' enctype='multipart/form-data'/>";
	echo "<input type='file' name='file1'>";
	echo "<br>";
	echo "<input type='submit' name='submit' value='Save File'/>";
}
else
{
	echo "<form action='n.php' method='post' enctype='multipart/form-data'/>";
	echo "<input type='file' name='file1'>";
	echo "<br>";
	echo "<input type='submit' name='submit1' value='Save.File'/>";
}
echo "<br>";


echo "		</div>\n"; 
echo "		</td></tr> </table>\n"; 
echo "\n"; 
echo "</div>\n"; 
echo "	\n"; 
echo "</div>\n"; 
echo "</body>\n"; 
echo "</html>\n";
}
?>