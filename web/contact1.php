
<?php
mysql_connect("localhost","root" ,"");
mysql_select_db("bloodbank");
$a=$_REQUEST['Name'];
$b=$_REQUEST['Email'];
$c=$_REQUEST['Phone'];
mysql_query("INSERT INTO `contact`(`Name`, `Email`, `Phone`) VALUES ('$a','$b','$c')");
header("location:index.php?a=contact");
?>

