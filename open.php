<?php
foreach(glob('*'.jpg)as $filename)
{
echo "<img src='$filename' style=width:100px;hieght:80px;>";
echo basename($filename)."\n";
echo "<br>";
}
?>
//echo "<a href='156.php'>"."<img src='$image' style=width:100px;hieght:80px;>"."</a>";
//$image1='157.jpg';
//echo "<a href='157.php'>"."<img src='$image1' style=width:100px;hieght:80px;>"."</a>";
//$image2='158.jpg';
//echo "<a href='158.php'>"."<img src='$image2' style=width:100px;hieght:80px;>"."</a>";
//echo "<br>";