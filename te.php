<?php
session_start();

$_SESSION['name']='pea';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


	<head>

		<title>Supersized - Full Screen Background Slideshow jQuery Plugin</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="buildinternet-supersized-2ccedfd/slideshow/css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="buildinternet-supersized-2ccedfd/slideshow/theme/supersized.shutter.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="aajax.js"></script>
		<script type="text/javascript" src="buildinternet-supersized-2ccedfd/slideshow/js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="buildinternet-supersized-2ccedfd/slideshow/js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="buildinternet-supersized-2ccedfd/slideshow/theme/supersized.shutter.min.js"></script>
		
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   4000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1500,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														
{image : 'photo2.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg'},


{image : 'photo33.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg'},


{image : 'photo44.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg'},


																		

{image : 'p1.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg'},
																		
												]
					
				});
		    });
var flag=0;	  
var flag1=0;  
	function actionForm()
{
var p=document.forms["myForm"]["un"].value;
var q=document.forms["myForm"]["p"].value;
if((flag==0)&&(flag1==0))
{alert("Please Enter Both The Entries");
return false;
}
else if(p==''||q=='')
{
alert("Please Enter Both The Entries");
return false;

}
}

function username()
{
if((document.forms["myForm"]["un"].value=='Username')&&(flag==0))
{

document.forms["myForm"]["un"].value='';flag=1;
}


return ;}
function password()
{
if((document.forms["myForm"]["p"].value=='Password')&&(flag1==0))
{
document.forms["myForm"]["p"].type='password';
document.forms["myForm"]["p"].value='';

flag1=1;
}

return ;}


		</script>
<link rel="stylesheet" type="text/css" href="lite44.css">		
	</head>
	
	<body>
	<div id="site_main">
	<div id="site_content">
		<div id="header_div">
			<style="vertical-align:bottom;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Picasa
		</div>
	<div id="home_main">
<form name="myForm" action='ppro4.php'  onsubmit="return actionForm()" method='post' >
<input type='text' class ="glow" id="height" name='un' size='28' value='Username' onkeydown="return username()" /><br>
<input type='text' name='p' id="height" class ="glow" size='28' value='Password' onkeydown="return password()"/><br> 
<br>

<input type="submit" name='b' value='Sign In' class="rc-button rc-button-submit"/><br><br>
<br>
<br>
<br>
&nbsp&nbsp&nbsp<a href='pro2.htm' class="hover-shadow">New User Click Here</a><br>

</div>

</div>


		
		</div>
	
			
</body>
</html>
