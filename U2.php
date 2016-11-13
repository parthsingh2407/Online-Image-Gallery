<?php
echo "<form action='u3.php' method='get/post' name='fem'>";
echo "Name<input type='text' name='n1' value='' size='20'/>";
echo "<br>";
echo "Password<input type='password' name='p1' value='' size='20'/>";
echo "<br>"; 
echo "Gender<input type='radio' name='m' value='male'>Male</input>";
echo "<input type='radio' name='m' value='female'>Female</input>";
echo "<br>";
echo "D.O.B<select name='Year'>";
for($i=1992;$i<=2013;$i++)
{
	echo "<option>".$i."</option>";
}
echo "</select>";
echo "<select name='Month'>";
for($j=1;$j<=12;$j++)
{
	echo "<option>".$j."</option>";
}
echo "</select>";
echo "<select name='Date'>";
for($i=1;$i<=31;$i++)
{
	echo "<option>".$i."</option>";
}
echo "</select>";
echo "<br>";
echo "Course<select name='course'>";
$p[0]='b.tech';
$p[1]='b.com';
$p[2]='b.ba';
$p[3]='m.ba';
$p[4]='intermediate';
$p[5]='m.tech';
for($i=0;$i<6;$i++)
{
	echo "<option>".$p[$i]."</option>";
}
echo "</select>";
echo "<input type='submit' name='b1' value='submit'/>";
echo "<input type='reset' name='b1' value='cancel'/>";
?>