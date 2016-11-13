<?php
$k=$_REQUEST['n'];
if($k=='')
{
header("location:ser1.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


	<head>

		<title>Supersized - Full Screen Background Slideshow jQuery Plugin</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<script src="jss/jquery-1.11.0.min.js"></script>
<script src="jss/lightbox.min.js"></script>
				<link href="css/lightbox.css" rel="stylesheet" />

					
<link rel="stylesheet" type="text/css" href="llite44.css">		
	</head>
	
	
<body>
	<div id="site_main">
	<div id="site_content">
		<div id="header_div">
			<style=\"vertical-align:bottom;\">
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp<a href=pro4.php >Picasa</a>
		</div>
<div id="logout">
<a href="logout.php" class="hover-shadow"> Logout</a>
</div>
</div>
<div id="site_content1">
<table>
		<tr> <td> <div id="side_menu">
			<table id="smenu" cellspacing="5px" cellpadding="7px">
				<tr> <td class="hover-shadow"> <a href="pro6.php"> About Me</a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="ass.php"> Photos</a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="loc.php"> Locate Friends </a> </td> </tr>
			<tr> <td class="hover-shadow"> <a href="ser1.php"> Search</a> </td> </tr>
			</table>
		</div> </td>
		<td>
		<div id="home_main">
<?php
$n=$_REQUEST['n'];
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query1="select distinct * from im where iname like '%$n%' && itype!='private'";
$result1=mysql_query($query1);
$k=0;
while($row=mysql_fetch_array($result1))
{
	$image=$row['iname'];
	$k++;
if($k==5)
{	?>
<br>
<?php
$k=1;
}
?>
  <a href='<? echo $image; ?>' data-lightbox="image-1" data-title="My caption"><img src='<? echo $image; ?>' style="box-shadow: 0px 0px 0px 3px #000;" width="150" height="150" /></a>
<?php
}
if($k==0)
{
?>
<h3><b>No Images For Your Search</b></h3>
<?php
}
?>


		</div>
		</td></tr> </table>

</div>
	
</div>


		
		</div>
	
			
</body>
</html>
