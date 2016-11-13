<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" 
	"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Ajax Loader</title>
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.history.js"></script>

	<script type="text/javascript">
	
	$(document).ready(function () {


	    $.history.init(pageload);	
	    
		$('a[href=' + window.location.hash + ']').addClass('selected');
		
		$('a[rel=ajax]').click(function () {
		
			var hash = this.href;
			hash = hash.replace(/^.*#/, '');
	 		$.history.load(hash);	
	 		
	 		$('a[rel=ajax]').removeClass('selected');
	 		$(this).addClass('selected');
	 		$('#body').hide();
	 		$('.loading').show();
	 		
			getPage();
	
			return false;
		});	
	});
	
	function pageload(hash) {
		if (hash) getPage();    
	}
		
	function getPage() {
		var data = 'page=' + encodeURIComponent(document.location.hash);
		$.ajax({
			url: "loader.php",	
			type: "GET",		
			data: data,		
			cache: false,
			success: function (html) {	
				$('.loading').hide();				
				$('#content').html(html);
				$('#body').fadeIn('slow');		
		
			}		
		});
	}

	</script>
	
	<style>
		body {
			margin:20px 0 0 0; 
			padding:0; 
			text-align:center;
			font-family: arial;
			font-size:12px;
			background:#282828;
		}
		
			#wrapper {
				width:600px; 
				margin:0 auto;
			}
			
			#header {
				background:url(images/header.gif) no-repeat center center; 
				width:670px;
				height:58px;
			}
		
				#menu {
					list-style:none; 
					padding:0; 
					margin:23px 55px 0 0;
					float:right;
				}
				
				#menu li {
					float:left; 
					padding:0 15px 0 0;
				}
			
				#menu li a {
					color:#666; 
					font-weight: 700; 
					text-decoration:none;
				}
			
				#menu li a.selected {
					color:#333; 
					font-weight: 700; 
					text-decoration:underline;
				}
		
			#body {
				clear:both; 
				display:none;
			}
			
				#body .header {
					background: url(images/body_header.gif) no-repeat center center;
					width:670px;
					height:28px;
				}
				
				#body .body {
					background: url(images/body.gif) repeat-y;
					width:600px;
					padding:0 40px;
					text-align:left;
					color:#444;
				}
				
				#body .footer {
					background: url(images/body_footer.gif) no-repeat center center;
					width:670px;
					height:24px;
				}
			
			.loading {
				background: url(images/load.gif) no-repeat center center;
				height:48px;
				display:none;
			}
			
			
	</style>
	
</head>
<body>

<div id="wrapper">

	<div id="header">
		<ul id="menu">
			<li><a href="#page1" rel="ajax">Home</a></li> 
			<li><a href="#page2" rel="ajax">Portfolio</a></li> 
			<li><a href="#page3" rel="ajax">About</a></li>
			<li><a href="#page4" rel="ajax">Contact</a></li>
		</ul>
	</div>
		<div class="loading"></div>
	<div id="body">
		<div class="header"></div>
		<div class="body">
			<div id="content">
			<!-- Ajax Content -->
			</div>
		</div>
		<div class="footer"></div>
	</div>
</div>

</div>
</body>
</html>