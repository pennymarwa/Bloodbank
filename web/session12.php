
<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
session_start();
$us=$_REQUEST['username'];
$pwd=$_REQUEST['password'];
$row=mysql_fetch_array(mysql_query("select * from register where Email='$us' and Password='$pwd'"));
if($us==$row['Email'] && $pwd==$row['Password'])
{
	$_SESSION['id']=$us;
	$_SESSION['login']=$row['id'];
	header("location:index.php");
}
else
header("location:index.php?a=login&b=wrong values");
?>
