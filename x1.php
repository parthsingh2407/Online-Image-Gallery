<?
$name=$_REQUEST['n'];
setcookie('u1',$name);
echo $_COOKIE['u1'];
echo "<br>";
echo "<a href='x2.php'>click</a>";
?>