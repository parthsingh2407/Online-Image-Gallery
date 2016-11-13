<?php
$f1=$_SERVER['/Users/Parthsingh/Documents/'].'Untitled.txt';
$f2=$_SERVER['/Users/Parthsingh/Documents/'].'Untitled1.txt';
copy($f2,$f1);
$str=file_get_contents($_SERVER['/Users/Parthsingh/Documents/'].'Untitled.txt');
?>
