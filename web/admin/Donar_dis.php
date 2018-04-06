<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donar Registration Display</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="../css/index.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>



</head>

<body>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h1 style="color:#33C;"><center>DISPLAY DONAR REGISTRATION</center></h1></div></div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<table class="table table-bordered table-responsive" align="center">
<tr>
<th>Name</th>
<th>Gender</th>
<th>Contact</th>
<th>Email</th>
<th>Address</th>
<th>Location</th>
<th>Age</th>
<th>Weight</th>
<th>Donate</th>
<th>B_Group</th>
<th>Any Issue</th>
<th>Thalassemia</th>
<th>Types</th>

</tr>
<?php
mysql_connect("localhost","root","");
mysql_query("create database bloodbank");
mysql_select_db("bloodbank");


$str = mysql_query("select *from donar1");
while($row=mysql_fetch_array($str))
{
	
	echo "<td>$row[Name]</td>";
	echo "<td>$row[Gender]</td>";
	echo "<td>$row[Contact]</td>";
	echo "<td>$row[Email]</td>";
	echo "<td>$row[Address]</td>";
	echo "<td>$row[Location]</td>";
    echo "<td>$row[Age]</td>";
    echo "<td>$row[Weight]</td>";
	echo "<td>$row[Donate]</td>";
    echo "<td>$row[B_Group]</td>";
    echo "<td>$row[Any_problem]</td>";
    echo "<td>$row[Thalassemia]</td>";
    echo "<td>$row[Types]</td>
	</tr>";
	
}


?>
</table>
</div></div></div></div>
</body>



</body>
</html>