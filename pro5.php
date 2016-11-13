<?php
session_start();
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "\n";
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
{;
} 
echo "<html>\n"; 
echo "<head>\n"; 
echo "	<title> How To Reach Vanarasi </title>\n"; 
echo "	<link rel=\"stylesheet\" type=\"text/css\" href=\"lite1.css\">\n"; 
echo "</head>\n"; 
echo "<body onload=\"setupZoom()\">\n"; 
echo "<div id=\"site_main\">\n"; 
echo "	<div id=\"site_content\">\n"; 
echo "		<div id=\"header_div\">\n"; 
echo "			<style=\"vertical-align:bottom;\">&nbsp &nbsp Picasa\n"; 
echo "		</div>\n"; 
echo "</div>\n"; 
echo "<div id=\"site_content1\">\n"; 
echo "<table>\n"; 
echo "		<tr> <td> <div id=\"side_menu\">\n"; 
if($image!="")
{
	echo "<img src='$image' id=\"pic\">"."<br>";
//echo "<a href=‘$image’>”.”<img alt='thumb' src='$image'>"."</a>";
}
echo "			<table id=\"smenu\" cellspacing=\"5px\" cellpadding=\"7px\">\n"; 
echo "			<tr> <td class=\"m_top\"> <a href=\"about_city.html\"> About Me</a> </td> </tr>\n"; 
echo "			<tr> <td class=\"m_top\"> <a href=\"culture.html\"> Photos</a> </td> </tr>\n"; 
echo "			<tr> <td class=\"m_top\"> <a href=\"locmap.html\"> Locate Friends </a> </td> </tr>\n"; 
echo "			<tr> <td class=\"m_top\"> <a href=\"howto.html\"> Search</a> </td> </tr>\n"; 
echo "			</table>\n"; 
echo "		</div> </td>\n"; 
echo "		<td>\n"; 
echo "		<div id=\"home_main\">\n"; 
echo "\n"; 

echo "Welcome ".$fname." ".$lname;
echo "<br>";
echo "Photos ";
echo "<br>";
foreach(glob('*'.jpg)as $filename)
{
$query3="select distinct * from im where id='$k' && iname='$filename'";
$result3=mysql_query($query3);
while($row=mysql_fetch_array($result3))
{
echo "<a href='$filename'>"."<img src='$filename' style=width:300px;hieght:240px;>"."</a>";
}
}

echo "<br>";
echo "Do you want to add more pics?";
echo "<form action='m.php' method='post' enctype='multipart/form-data'/>";
echo "<input type='file' name='file'>";
echo "Type Of Image<input type='radio' name='m1' value='public'>Public</input>";
echo "<input type='radio' name='m1' value='private'>Private</input>";
echo "<br>";
echo "<input type='submit' name='submit' value='Save File'/>";
echo "<br>";

echo "<br>";
echo "DO YOU WANT TO LOGOUT?";
echo "<a href='logout.php'>LOGOUT</a>";
echo "<br>";

echo "		</div>\n"; 
echo "		</td></tr> </table>\n"; 
echo "\n"; 
echo "</div>\n"; 
echo "	\n"; 
echo "</div>\n"; 
echo "</body>\n"; 
echo "</html>\n";
?>