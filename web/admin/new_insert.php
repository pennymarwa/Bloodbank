<?php

mysql_connect("localhost","root","");

mysql_select_db("bloodbank");
$a=$_REQUEST['News'];
$b=$_REQUEST['Date'];
$c=$_REQUEST['Description'];
$img=$_FILES['img']['name'];

$path="path/".$img;
$row=$_FILES['img']['tmp_name'];
mysql_query("INSERT INTO `news`(`News`,`Date`,`Description`,`img`) VALUES ('$a','$b','$c','$img')");
move_uploaded_file($row,$path);

header("location:admin_index.php?a=new_dis");





?>