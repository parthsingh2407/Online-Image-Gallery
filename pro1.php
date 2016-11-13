



<?php
echo "<html>\n"; 
echo "<head>\n"; 
echo "	<title> Picasa </title>\n"; 
echo "	<link rel=\"stylesheet\" type=\"text/css\" href=\"lite.css\">\n"; 
echo "</head>\n"; 
echo "<body>\n"; 
echo "<div id=\"site_main\">\n"; 
echo "	<div id=\"site_content\">\n"; 
echo "		<div id=\"header_div\">\n"; 
echo "			<img src=\”jwl_corner.png\" width=\"90px\" height=\"90px\" style=\"vertical-align:bottom;\">&nbsp &nbsp Picasa\n"; 
echo "		</div>\n"; 
echo "</div>\n"; 
echo "<div id=\"site_content1\">\n"; 
echo "<table>\n"; 
echo "		<tr> <td> <div id=\"side_menu\">\n"; 
echo "			<table id=\"smenu\" cellspacing=\"5px\" cellpadding=\"7px\">\n"; 
echo "			<tr> <td class=\"m_top\"> <a href=\"about_city.html\"> About Me</a> </td> </tr>\n"; 
echo "			<tr> <td class=\"m_top\"> <a href=\"culture.html\"> Photos</a> </td> </tr>\n"; 
echo "			<tr> <td class=\"m_top\"> <a href=\"locmap.html\"> Locate Friends </a> </td> </tr>\n"; 
echo "			<tr> <td class=\"m_top\"> <a href=\"howto.html\"> Search</a> </td> </tr>\n"; 
echo "			</table>\n"; 
echo "		</div> </td>\n"; 
echo "		<td>\n"; 
echo "		<div id=\"home_main\">\n"; 
echo "\n";
echo "<form action='u6.php' method='get' name='fem1'>";
echo "Name<input type='text' name='n1' value='' size='20'/>";
echo "<br>";
echo "Password<input type='password' name='x1' value='' size='20'/>";
echo "<br>"; 
echo "Confirm Password<input type='password' name='x2' value='' size='20'/>";
echo "<br>"; 
echo "Gender<input type='radio' name='m1' value='male'>Male</input>";
echo "<input type='radio' name='m1' value='female'>Female</input>";
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
echo "</div>\n"; 
echo "		</td></tr> </table>\n"; 
echo "\n"; 
echo "</div>\n"; 
echo "	\n"; 
echo "</div>\n"; 
echo "</body>\n"; 
echo "</html>\n";
?>