<?php
?>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<script src="jss/jquery-1.11.0.min.js"></script>
<script src="jss/lightbox.min.js"></script>
				<link href="css/lightbox.css" rel="stylesheet" />

					
<link rel="stylesheet" type="text/css" href="llite.css"></head>
</html>
<?php$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query1='select distinct iname from im';
$result1=mysql_query($query1);
$a[]="";
while($row=mysql_fetch_array($result1))
{	
	$a[]=$row['iname'];
}
//get the q parameter from URL$q=$_GET["q"];//lookup all hints from array if length of q>0if (strlen($q) > 0)  {  $hint="";  for($i=0; $i<count($a); $i++){if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))      {        $hint[]=$a[$i];        }
}} // Set output to "no suggestion" if no hint were found // or to the correct values
//output the response
for($l=0; $l<count($hint); $l++){
	$response=$hint[$l];
	if($response=="")
	{
		$response="no suggestion";
		echo $response;
	}
	else
	{	?>
  <a href='<? echo $response; ?>' data-lightbox="image-1" data-title="My caption"><? echo $response; ?></a>
<?php


	}
	echo "<br>";}
?>