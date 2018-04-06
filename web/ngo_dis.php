<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");

mysql_select_db("bloodbank");
$a=$_REQUEST['Organisation_Name'];
$b=$_REQUEST['Owner_Name'];
$c=$_REQUEST['Description'];
$d=$_REQUEST['Email'];
$e=$_REQUEST['Address'];
$f=$_REQUEST['Location'];
$g=$_REQUEST['Phone'];
$h=$_REQUEST['Mobile'];
$i=$_REQUEST['Password'];
$img=$_FILES['img']['name'];

$path="path/".$img;
$row=$_FILES['img']['tmp_name'];
mysql_query("INSERT INTO `ngo`(`Organisation_Name`, `Owner_Name`, `Description`, `Email`, `Address`, `Location`, `Phone`, `Mobile`, `Password`, `img`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$img')");
move_uploaded_file($row,$path);

header("location:index.php?a=ngo");
?>
</body>
</html>