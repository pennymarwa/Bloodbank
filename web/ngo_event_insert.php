
<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$a=$_REQUEST['Event_Name'];
$b=$_REQUEST['Organisation_name'];
$c=$_REQUEST['Venue'];
$d=$_REQUEST['Time'];
$e=$_REQUEST['Date'];
$f=$_REQUEST['Description'];
$img=$_FILES['img']['name'];

$path="admin/path/".$img;
$row=$_FILES['img']['tmp_name'];

mysql_query("INSERT INTO `events`(`Event_Name`,`Organisation_name`,`Venue`, `Time`, `Date`, `Description`,`img`) VALUES ('$a','$b','$c','$d','$e','$f','$img')");
echo "INSERT INTO `events`(`Event_Name`,`Organisation_name`,`Venue`, `Time`, `Date`, `Description`,`img`) VALUES ('$a','$b','$c','$d','$e','$f','$img')";
move_uploaded_file($row,$path);
header("location:index.php?a=ngo&f=ngodes&ngo_page.php&n=ngodis");
?>