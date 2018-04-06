<?php

mysql_connect("localhost","root","");

mysql_select_db("bloodbank");
$a=$_REQUEST['Name'];
$b=$_REQUEST['Email'];
$c=$_REQUEST['Phone'];
$d=$_REQUEST['Message'];

mysql_query("INSERT INTO `new_comment`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$a','$b','$c','$d')");

header("location:index.php");





?>