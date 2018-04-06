<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$a=$_REQUEST['Name'];
$b=$_REQUEST['Gender'];
$c=$_REQUEST['Contact'];
$d=$_REQUEST['Email'];
$e=$_REQUEST['Address'];
$f=$_REQUEST['Location'];
$g=$_REQUEST['Age'];
$h=$_REQUEST['Weight'];
$i=$_REQUEST['Donate'];
$j=$_REQUEST['B_Group'];
$k=$_REQUEST['Any_problem'];
$l=$_REQUEST['Thalassemia'];
$m=$_REQUEST['Types'];

echo "INSERT INTO `donar1`(`Name`, `Gender`, `Contact`, `Email`, `Address`,`Location`, `Age`, `Weight`, `Donate`, `B_Group`, `Any_problem`,`Thalassemia`,`Types`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";

echo $a;

mysql_query("INSERT INTO `donar1`(`Name`, `Gender`, `Contact`, `Email`, `Address`,`Location`, `Age`, `Weight`, `Donate`, `B_Group`, `Any_problem`,`Thalassemia`,`Types`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')");
header("location:index.php?a=request&b=values inserted");

?>
