
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$us=$_REQUEST['username'];
$pwd=$_REQUEST['password'];
$row=mysql_fetch_array(mysql_query("select * from ngo where Email='$us' and Password='$pwd'"));
if($us==$row['Email'] && $pwd==$row['Password'])
{
	$_SESSION['idd']=$us;
	$_SESSION['loginn']=$row['id'];
	$_SESSION['org']=$row['Organisation_Name'];
	echo $_SESSION['org'];
	header("location:index.php?a=ngo&f=ngodes");
}
else
header("location:index.php?a=ngo&b=wrong values");
?>
