<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>banks</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_query("create database bloodbank");
mysql_select_db("bloodbank");
$a=$_REQUEST['Bank_Name'];
$b=$_REQUEST['Contact_Person'];
$c=$_REQUEST['Address'];
$d=$_REQUEST['Location'];
$e=$_REQUEST['Pin_Code'];
$f=$_REQUEST['Phone'];
$g=$_REQUEST['Mobile'];
$h=$_REQUEST['E_Mail'];
mysql_query("INSERT INTO `Banks`(`Bank_Name`,`Contact_Person`, `Address`, `Location`,`Pin_Code`, `Phone`,`Mobile`, `E_Mail`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')");
header("location:admin_index.php?a=bank_dis");
?>
</body>
</html>