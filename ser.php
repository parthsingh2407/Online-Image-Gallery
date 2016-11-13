<?php

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
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp<a href=temp1.php >Picasa</a>
		</div>

</div>
<div id="site_content1">
<table>
		
		<td>
		<div id="home_main">
<h3><b>Image Search</b></h3>
<form action='check.php' method='get' name='fem'>

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