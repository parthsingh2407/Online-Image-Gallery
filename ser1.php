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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


	<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<script src="jss/jquery-1.11.0.min.js"></script>
<script src="jss/lightbox.min.js"></script>
				<link href="css/lightbox.css" rel="stylesheet" />


		<link rel="stylesheet" type="text/css" href="llite.css">
	<link rel="stylesheet" type="text/css" href="lliite.css">
		<script>function showHint(str){if (str.length==0){ document.getElementById("txtHint").innerHTML=""; return;}if (window.XMLHttpRequest){
                     xmlhttp=new XMLHttpRequest();}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); }
xmlhttp.onreadystatechange=function() {if (xmlhttp.readyState==4 && xmlhttp.status==200) {document.getElementById("txtHint").innerHTML=xmlhttp.responseText;} }xmlhttp.open("GET","gethint.php?q="+str,true); xmlhttp.send();}</script></head>
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
<h3><b>Image Search</b></h3>
<form action='check1.php' method='get' name='fem'>

<div id="tt"><div class="wrapper"><input type="text" name='n' onkeyup="showHint(this.value)" onchange="DropDown(this.value)"  size="35"> 
 <button>GO&nbsp&nbsp</button>
</div><div id="txtHint"></div>

</div>
</form>
<br>

<br>
		</div>
		</td></tr> </table>

</div>
	
</div>


		
		</div>

</body></html>
<?php
}
?>