<?php
session_start();
$f=0;
if($_COOKIE['u1']=='')
{
	$k=$_SESSION['name']=$_REQUEST['n'];
	setcookie('u1',$k);
	$p=$_SESSION['pass']=$_REQUEST['p'];
	setcookie('p1',$p);
	}
else
{
	$k=$_COOKIE['u1'];
	$p=$_COOKIE['p1'];
}
$pass1=MD5($p);
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query1='select * from student2';
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
	
	if($row['name']==$k && $row['password']==$pass1)
	{	$f=1;	
		$image=$row['profilepic'];
	}
}
if($f==0)
{
header('Location:logout.php');
} 
echo "Welcome ".$_SESSION['name'];
echo "<br>";
if($image!="")
{
	echo "<img src='$image' style=width:300px;hieght:240px;>"."<br>";
	echo "<b>"."Do you want to change the profile pic?"."</b>";
        echo "<form action='pro4.php' method='post' enctype='multipart/form-data'/>";
	echo "<input type='file' name='file1'>";
	echo "<br>";
	echo "<input type='submit' name='submit' value='Save File'/>";
}
else
{
	echo "<form action='n.php' method='post' enctype='multipart/form-data'/>";
	echo "<input type='file' name='file1'>";
	echo "<br>";
	echo "<input type='submit' name='submit1' value='Save File1'/>";
}
echo "<br>";
echo "Name:".$_SESSION['name'];
echo "<br>";
echo "Pass:".$_SESSION['pass'];
echo "<br>";
echo "For personal information:";
echo "<a href='info.php'>Click Here</a>";
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
foreach(glob('*'.JPG)as $filename)
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
//echo "<a href='delete.php'>Delete Photos</a>";
echo "<br>";
echo "DO YOU WANT TO LOGOUT?";
echo "<a href='logout.php'>LOGOUT</a>";
echo "<br>";
?>
