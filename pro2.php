
<?php
?>




<!DOCTYPE html>
<html>
<head>
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
var gen=0;

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
alert(k[ffname]+j[llname]+l[uuname]+m[ppass]+g[gen]+pro[pro1]+"is not filled");
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

	<title> How To Reach Vanarasi </title>
	<link rel="stylesheet" type="text/css" href="lite.css">
</head>
<body>

<form name="myForm" action="u7.php" onsubmit="return validateForm()" method="get">
<div id="site_main">
	<div id="site_content">
		<div id="header_div">
			<style="vertical-align:bottom;">&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp Picasa
		</div>
</div>
<div id="site_content1">

		<div id="home_main">
<b>Registration Form<b><br>
First name: <input type="text" name="fname"></t>
Last name: <input type="text" name="lname"></br>
Username: <input type="text" name="uname" id="username" maxlength="15">
<span id="user-result"></span></br>
Password: <input type="password" name="pass"></br>
Confirm Password: <input type="password" name="cpass"></br>
Gender: <select id="Gender"  name="gen">
<option value="0">Select</option>
<option value="1">Male</option>
<option value="2">Female</option></select>
Profession <select id="Profession" name="profe">
<option value="0">Select</option>
<option value="1">Student</option>
<option value="2">Service</option>
<option value="3">Businessman</option>
</select>  
Birthday: <input type="date" name="bday">
<br>
<br>
<div class="cc">
<input type="submit" name='b' value="Submit" class="rc-button rc-button-submit"/><br>
	</div>	</div>
		</td></tr> </table>

</div>

</div>
</form>
</body>
</html>