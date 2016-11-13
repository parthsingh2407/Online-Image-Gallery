<?php
$pass1=$_REQUEST['x1'];
$pass2=$_REQUEST['x2'];
if($pass1==$pass2)
{
	echo "<form action='u7.php' method='get' name='fem2'>";
	
}
else if($pass1!=$pass2)
{
	echo "<form action='u5.php' method='get' name='fem2'>";
	echo "Enter the correct password";
}
$name=$_REQUEST['n1'];
echo "<br>";
$course=$_REQUEST['course'];
if(isSet($_REQUEST['m1'])=='male'||isSet($_REQUEST['m1'])=='female')
{	$gender=$_REQUEST['m1'];	}
$date=$_REQUEST['Date'];
$month=$_REQUEST['Month'];
$year=$_REQUEST['Year'];
echo "Name<input type='text' name='n2' value='$name' size='20'/>";
echo "<br>";
echo "Password<input type='text' name='p2' value='$pass2' size='20'/>";
echo "<br>";
echo "course<input type='text' name='c' value='$course' size='20'/>";
echo "<br>"; 
echo "Gender<input type='text' name='g' value='$gender' size='20'/>";
echo "<br>";
echo "date<input type='text' name='d' value='$date' size='20'/>";
echo "month<input type='text' name='m' value='$month' size='20'/>";
echo "year<input type='text' name='y' value='$year' size='20'/>";
echo "<br>"; 
echo "Confirm Details<input type='submit' name='c1' value='submit'/>";
?>