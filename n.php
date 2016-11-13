<?php
session_start();
$filename=$_FILES["file1"]["name"];$allowedExts = array("gif", "jpeg", "jpg", "png"); $extension = end(explode(".", $_FILES["file1"]["name"]));
if ((($_FILES["file1"]["type"] == "image/gif")|| ($_FILES["file1"]["type"] == "image/jpeg")|| ($_FILES["file1"]["type"] == "image/jpg")
|| ($_FILES["file1"]["type"] == "image/JPG")|| ($_FILES["file1"]["type"] == "image/pjpeg")|| ($_FILES["file1"]["type"] == "image/x-png")|| ($_FILES["file1"]["type"] == "image/png")))  {  if ($_FILES["file1"]["error"] > 0){echo "Return Code: " . $_FILES["file1"]["error"] . "<br>"; }else {//echo "Upload: " . $_FILES["file1"]["name"] . "<br>";//echo "Type: " . $_FILES["file1"]["type"] . "<br>";//echo "Size: " . ($_FILES["file1"]["size"] / 1024) . " kB<br>"; echo "Temp file: " . $_FILES["file1"]["tmp_name"] . "<br>";if (file_exists("upload/" . $_FILES["file1"]["name"])){//echo $_FILES["file1"]["name"] . " already exists. "
; }else {move_uploaded_file($_FILES["file1"]["tmp_name"], $_FILES["file1"]["name"]);//echo "Stored in: " . "upload/" . $_FILES["file1"]["name"]; 
}
$n=$_SESSION['name'];
//echo $n;
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query2="update users set profilepic='$filename' where username='$n'";
$result2=mysql_query($query2);
} }
header("Location: pro4.php");?>