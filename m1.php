<?php
session_start();
$a=$_SESSION['album'];
if(isSet($_REQUEST['m1'])=='private'||isSet($_REQUEST['m1'])=='public')
{	$type=$_REQUEST['m1'];	}
$filename=$_FILES["file"]["name"];$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG"); $extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/JPG")|| ($_FILES["file"]["type"] == "image/pjpeg")|| ($_FILES["file"]["type"] == "image/x-png")|| ($_FILES["file"]["type"] == "image/png")))  {  if ($_FILES["file"]["error"] > 0){//echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
 }else {//echo "Upload: " . $_FILES["file"]["name"] . "<br>";//echo "Type: " . $_FILES["file"]["type"] . "<br>";//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>"; echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";if (file_exists("upload/" . $_FILES["file"]["name"])){//echo $_FILES["file"]["name"] . " already exists. ";
 }else {move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);//echo "Stored in: " . "upload/" . $_FILES["file"]["name"]; 
}
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$n=$_SESSION['name'];$query2="insert into im(iname,id,itype,ialbum)values('$filename','$n','$type','$a')";
$result2=mysql_query($query2);
$query3="update imm set coverpic='$filename' where id='$n' && ialbum='$a'";
$result3=mysql_query($query3);
} }else
{ // echo "Invalid file";  }
header("Location: albumpic.php?album=$a");?>