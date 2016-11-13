<?php
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Search Dropdown</title>
  <link rel="stylesheet" href="10/10/css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <form class="search" method="post" action="index.html">
      <input type="search" name="q" placeholder="Search..." autocomplete="on">
      <ul class="search-ac">
<?php
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query1='select * from im';
$result1=mysql_query($query1);
$a[]="";
while($row=mysql_fetch_array($result1))
{	
	$a=$row['iname'];
?>
<li><a href='<? echo $a; ?>'>'<? echo $a; ?>'<br><span>Description...</span></a></li>
<?php
}
?>
        
       </ul>
    </form>
  </section>

  <section class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/search-dropdown" target="_parent">View Article</a>
      <a href="http://www.cssflow.com/snippets/search-dropdown.zip" target="_parent">Download</a>
    </p>
    <p class="about-author">
      &copy; 2012&ndash;2013 <a href="http://thibaut.me" target="_blank">Thibaut Courouble</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">MIT License</a><br>
      Original PSD by <a href="http://365psd.com/day/2-253/" target="_blank">Blaze Pollard</a>
    </p>
  </section>
</body>
</html>
