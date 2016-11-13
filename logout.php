<?php
session_start();

session_destroy();

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

														
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-2.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-2.jpg'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-3.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-3.jpg'},
							

{image : 'p1.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg'},
																		
												]
					
				});
		    });
	function actionForm()
{
var p=document.forms["myForm"]["un"].value;
var q=document.forms["myForm"]["p"].value;
if(p==''||q=='')
{
alert("Please Enter Both The Entries");
return false;

}
}	    
		</script>
<link rel="stylesheet" type="text/css" href="lite444.css">		
	</head>
	
	<style type="text/css">
		ul#demo-block{ margin:0 15px 15px 15px; }
			ul#demo-block li{ margin:0 0 10px 0; padding:10px; display:inline; float:left; clear:both; color:#aaa; background:url('buildinternet-supersized-2ccedfd/slideshow/img/bg-black.png'); font:11px Helvetica, Arial, sans-serif; }
			ul#demo-block li a{ color:#eee; font-weight:bold; }
	</style>

<body>
	<div id="site_main">
	<div id="site_content">
		
</div>
<div id="site_content1">
<table>
		<tr> 
		<td>
		<div id="home_main">
<form name="myForm" action='temp1.php'  onsubmit="return actionForm()" method='post' >

<br>

<input type="submit" name='b' value='Logged Out… Go To The HomePage' class="rc-button rc-button-submit"/><br>
		</div>
		</td></tr> </table>

</div>
	
</div>


		
		</div>
	
			
</body>
</html>
<?php
?>
