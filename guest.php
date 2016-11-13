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

$kk=$_REQUEST['un'];
	$image='';
$f=0;
$pass1=$p;


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

<style=\"vertical-align:bottom;\">&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<a href=pro4.php >Picasa</a> </div>

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
echo "<table>\n"; 
echo "		<tr> <td> <div id=\"side_menu\">\n"; 

$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query1='select * from users';		
$result1=mysql_query($query1);
while($row=mysql_fetch_array($result1))
{	
	
	if($row['username']==$kk)
	{	$f=1;
		$image1=$row['profilepic'];
		$fname=$row['firstname'];
		$lname=$row['lastname'];
		$gender=$row['gender'];
		$profe=$row['profession'];
		$dob=$row['dob'];
	}
}

if($image1!="")
{
?>
	<a href='<? echo $image1; ?>' data-lightbox="image-1" data-title="My caption"><img src='<? echo $image1; ?>' id="pic"></a>
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


?>
Name: <?php echo $fname; ?>&nbsp<?php echo $lname; ?>
<br>
<?php
if($gender==1){$gen1='Male';}
if($gender==2){$gen1='Female';}
?>
Gender: <?php echo $gen1; ?>
<br>
<?php
if($profe==1){$profe1='Student';}
if($profe==2){$gen1='Service';}
if($profe==3){$gen1='Businessman';}
?>
Profession: <?php echo $profe1; ?>
<br>
Date Of Birth: <?php echo $dob; ?>
<br>
<br>
<br>
<br>
<?php
echo "\n"; 
$x=0;
foreach(glob('*'.jpg)as $filename)
{
$query3="select distinct * from im where id='$kk' && iname='$filename'";
$result3=mysql_query($query3);
while($row=mysql_fetch_array($result3))
{
$x++;
if($x==5)
{	?>
<br>
<?php
$x=1;
}

?>
<a href='<? echo $filename; ?>' data-lightbox="image-1" data-title="My caption"><img src='<? echo $filename; ?>' style="box-shadow: 0px 0px 0px 3px #000;" width="150" height="150" /></a>
<?php
}
}
if($x==0)
{
?>
<h3><b>No Images For Your Search</b></h3>
<?php
}

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