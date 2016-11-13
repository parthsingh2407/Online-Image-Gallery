<?php
//session_start();
echo "<form action='edit.php' method='post' name='fff' >";
$k=$_COOKIE['u1'];
$l=$_COOKIE['p1'];
$l1=MD5($l);
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$info=$_REQUEST['comments'];
if($info!='')
{
$query1="update student2 set personinfo='$info' where name='$k' && password='$l1'";
$result1=mysql_query($query1);
$_REQUEST['comments']=='';
}
$query3='select * from student2';
$result3=mysql_query($query3);
while($row=mysql_fetch_array($result3))
{
if($row['name']==$k && $row['password']==$l1)
{
$c=$row['course'];
$d=$row['date'];
$g=$row['gender'];
$pi=$row['personinfo'];
}
}
echo "<b>"."Name:"."</b>";
echo $k;
echo "<br>";
echo "<b>"."Password:"."</b>";
echo $l;
echo "<br>";
echo "<b>"."Course:"."</b>";
echo $c;
echo "<br>";
echo "<b>"."Date:"."</b>";
echo $d;
echo "<br>";
echo "<b>"."Gender:"."</b>";
echo $g;
echo "<br>";
if($pi!='')
{
	echo "<b>";
	echo "Personal Information:";
	echo "</b>";
	echo $pi;		
        echo "<br>";
}
echo "<b>";
echo "Do you want to edit Personal Information";
echo "</b>";
echo "<input type='submit' name='Edit' value='Edit'/>";	
echo "<br>";

echo "DO YOU WANT TO LOGOUT?";
echo "<a href='logout.php'>LOGOUT</a>";
?>