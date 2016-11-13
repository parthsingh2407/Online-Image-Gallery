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
		$dob=$row['dob'];
		$gen=$row['gender'];
		$pro=$row['profession'];
		
	}
}
if($f==0)
{;
} 
echo "<html>\n"; 
echo "<head>\n"; 
?>
<link rel="stylesheet" type="text/css" href="litein.css">
<link href="css/lightbox.css" rel="stylesheet" />

<script src="jss/jquery-1.11.0.min.js"></script>
<script src="jss/lightbox.min.js"></script>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 4){$("#user-result").html('');return;}
		
		if(username.length >= 4){
			$("#user-result").html('<img src="imgs/ajax-loader.gif" />');
			$.post('check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
function validateForm()
{
var x=document.forms["myForm"]["fname"].value;
var y=document.forms["myForm"]["lname"].value;
var p=document.forms["myForm"]["uname"].value;
var q1=document.forms["myForm"]["pass"].value;
var q2=document.forms["myForm"]["cpass"].value;

var pro1=0;
var ffname=0;
var llname=0;
var uuname=0;
var ppass=0;
var k=new Array();
k[1]="First name ";
k[0]=" ";
var j=new Array();
j[1]="Last name ";
j[0]=" ";
var l=new Array();
l[1]="Username ";
l[0]=" ";
var m=new Array();
m[1]="Password ";
m[0]=" ";
var pro=new Array();
pro[1]="Profession ";
pro[0]=" ";
var g=new Array();
g[1]="Gender ";
g[0]=" ";
if (x==null || x=="")
  {
  ffname++;
  }
if(y==null||y=="")
{
llname++;
 }
if(p==null||p=="")
{
uuname++;
 }
if(q1==null||q1==""||q2==null||q2=="")
{
ppass++;
 }
var d = document.getElementById("Gender");
var sstrUser = d.options[d.selectedIndex].value;
var sstrUser1 = d.options[d.selectedIndex].text;
if(sstrUser==0)
{
gen++;
}
var e = document.getElementById("Profession");
var strUser = e.options[e.selectedIndex].value;
var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
pro1++;
}
if(ffname!=0||llname!=0||uuname!=0||ppass!=0)
{
alert(k[ffname]+j[llname]+l[uuname]+m[ppass]+pro[pro1]+"is not filled");
return false;
  }
if(q1!=q2)
{
alert("Enter a correct password");
document.forms["myForm"]["pass"].value="";
document.forms["myForm"]["cpass"].value="";
return false;
}
}
</script>

<?php
echo "	<title> How To Reach Vanarasi </title>\n"; 
echo "</head>\n"; 
echo "<body onload=\"setupZoom()\">\n"; 
?>
<form name="myForm" action="u8.php" onsubmit="return validateForm()" method="get">
<?php
echo "<div id=\"site_main\">\n"; 
echo "	<div id=\"site_content\">\n"; 
echo "		<div id=\"header_div\">\n"; 
?>
<div id="collor">

<style=\"vertical-align:bottom;\">
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp<a href=pro4.php > Picasa</a>
</div>
</div>

<div id="logout">
<a href=logout.php class="hover-shadow"> Logout</a>
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
?>
First name: <input type="text" name="fname" value='<?echo $fname;?>' style="hieght: 30px;" ></t>
Last name: <input type="text" name="lname" value='<? echo $lname; ?>'></br>
Username: <input type="text" name="uname" id="username" maxlength="15" value='<? echo $k; ?>'>
<span id="user-result"></span></br>
Password: <input type="password" name="pass" value=<? echo $pass1; ?>></br>
Confirm Password: <input type="password" name="cpass" value=<? echo $pass1; ?>></br>
Gender: <select id="Gender"  name="gen">
<?php
if($gen=="1")
{
?>
<option value="1">Male</option>
<option value="2">Female</option>
<?php
}
else if($gen=="2")
{
?>
<option value="2">Female</option>
<option value="1">Male</option>

<?php
}
?>
</select>

Profession <select id="Profession" name="profe" >
<?php
if($pro=="1")
{
?>
<option value="1">Student</option>
<option value="2">Service</option>
<option value="3">Businessman</option>
<?php
}
else if($pro=="2")
{
?>
<option value="2">Service</option>
<option value="1">Student</option>
<option value="3">Businessman</option>
<?php
}
else if($pro=="3")
{
?>
<option value="3">Businessman</option>
<option value="1">Student</option>
<option value="2">Service</option>
<?php
}

?>

</select>  
Birthday: <input type="date" name="bday" value='<? echo $dob; ?>'>
<input type="submit" value="Submit">




<?php

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