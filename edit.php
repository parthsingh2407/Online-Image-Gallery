<?php
echo "<form action='info.php' method='post' name='fff' >";
$k=$_COOKIE['u1'];
$l=$_COOKIE['p1'];
$l1=MD5($l);
$connection=mysql_connect("localhost","root","");
//echo "connection established"."<br>";
$db=mysql_select_db("db");
//echo "database selected"."<br>";
$query3='select * from student2';
$result3=mysql_query($query3);
while($row=mysql_fetch_array($result3))
{
if($row['name']==$k && $row['password']==$l1)
{
$pi=$row['personinfo'];
}
}
echo "DO YOU WANT TO ADD ANYTHING TO YOUR PERSONAL INFORMATION?";
echo "<br>";
echo "<textarea id='comments' name='comments' type='text' rows='5' column='800'>";
ECHO $pi;
echo "</textarea>";
echo "<br>";
echo "<input type='submit' name='Edit' value='Save text'/>";	
echo "<br>";
?>