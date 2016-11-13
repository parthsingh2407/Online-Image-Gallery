<?php
//$handle=fopen($_SERVER['/Users/Parthsingh/Documents/'].'Untitled.txt',"w")or exit("no file found");
//$v="I m talking to you dumb";
//fwrite($handle,$v);
//fclose($handle);
$handle=fopen($_SERVER['/Users/Parthsingh/Documents/'].'156.jpg',"r")or exit("no file found");
while(!feof($handle))
{
	echo fgetc($handle);
}
fclose($handle);
?>