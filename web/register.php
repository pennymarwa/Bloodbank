
<?php
mysql_connect("localhost","root","");

mysql_select_db("bloodbank");
$a=$_REQUEST['Name'];
$b=$_REQUEST['Gender'];
$c=$_REQUEST['Contact'];
$d=$_REQUEST['Email'];
$e=$_REQUEST['Address'];
$f=$_REQUEST['Location'];
$g=$_REQUEST['B_group'];
$h=$_REQUEST['Disease'];
$i=$_REQUEST['Age'];
$j=$_REQUEST['Weight'];
$k=$_REQUEST['Password'];
mysql_query("INSERT INTO `register`(`Name`, `Gender`, `Contact`, `Email`, `Address`,`Location`, `B_group`, `Disease`, `Age`, `Weight`, `Password`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')");
echo "INSERT INTO `register`(`Name`, `Gender`, `Contact`, `Email`, `Address`,`Location`, `B_group`, `Disease`, `Age`, `Weight`, `Password`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
echo  "$f";
header("location:index.php?a=login");
?>

</body>
</html> 