<?php
session_start();
if($_SESSION['name']=='')
{
header('location: temp1.php');
}
else
{
	$k=$_SESSION['name'];
	$p=$_SESSION['pass'];
if($_SESSION['name']=='pea')
{
header('location: temp1.php');
}

$image='';
$f=0;
$ff=0;
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
?>
<html>
<title> Picasa </title>
<head>

<script src="jss/jquery-1.11.0.min.js"></script>
<script src="jss/lightbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="lite3.css">
<link href="css/lightbox.css" rel="stylesheet" />


</head>
<body>

<div id="site_main">
	<div id="site_content">
		<div id="header_div">
<div id="collor">


<style=\"vertical-align:bottom;\">
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<a href=pro4.php >Picasa</a>
		</div>
</div>
<div id="logout">
<a href=logout.php class="hover-shadow"> Logout</a>
</div> 
</div>
<div id="site_content1">
<div id="color">
<table>
		<tr> <td> <div id="side_menu">
<div class="outside">
  
<div class="inside">


<?php
if($image!="")
{
?>


<a href='<? echo $image; ?>' data-lightbox="image-1" data-title="My caption"><img src='<? echo $image; ?>'  id="pic"></a>
<?php
}
?>
			<table id="smenu" cellspacing="5px" cellpadding="7px">
			<tr> <td class="hover-shadow"> <a href="pro6.php"> About Me</a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="ass.php"> Photos</a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="loc.php"> Locate Friends </a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="ser1.php"> Search</a> </td> </tr>
			</table></div>
		
</div>
</div>
</div> </td>
<td>
		<div id="home_main">
<div class="outtside">
  
<div class="innside">

  <?php
$album=0;
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query3="select distinct * from imm where id='$k'";
$result3=mysql_query($query3);
while($row=mysql_fetch_array($result3))
{
	$album=$row['ialbum'];
	$cover=$row['coverpic'];
?>
<a href="albumpic.php?album=<?php echo $album; ?>"><img src=<?php echo $cover; ?> style="box-shadow: 0px 0px 0px 3px #000;" width="150" height="150" />
<br>
<a href="albumpic.php?album=<?php echo $album; ?>"><?php echo $album; ?></a><br>
<a href="albumdel.php?album=<?php echo $album; ?>">Delete</a>

<br>
<br>
<?php
}
?>
</div>
</div>
</div>
		</td>
<td>
<div id="home_mmain">
<?php
echo "Welcome ".$fname." ".$lname;
echo "<br>";
echo "Photos ";
echo "<br>";
echo "<br>";
echo "Do you want to create a new album?";
echo "<br>";
?>
<form name="myForm" action='albumcreate.php'  method='get'>
Album Name: <input type="text" name="aname" value=''></br>
<?php
echo "<input type='submit' name='submit' value='Save File'/>";
echo "<br>";
?>
<a href=ass.php>View All Photos</a>

</div>
</td>
</tr> </table>

</div>
	
</div>
</body>
</html>
<?php
}
?>


