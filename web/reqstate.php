<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CITY</title>
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
<table class="table table-bordered table-responsive table-striped">
<tr>
<th>Name</th>
<th>Gender</th>
<th>Contact</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>B_Group</th>
<th>Any_problem</th>
</tr>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$abc=$_REQUEST['abc'];
$str=mysql_query("select * from donar1 where State='$abc'");
while($row=mysql_fetch_array($str))
{
	echo "<td>$row[Name]</td>";
	echo "<td>$row[Gender]</td>";
	echo "<td>$row[Contact]</td>";
	echo "<td>$row[Email]</td>";
	echo "<td>$row[Address]</td>";
	echo "<td>$row[City]</td>";
	echo "<td>$row[State]</td>";
	echo "<td>$row[B_Group]</td>";
	echo "<td>$row[Any_problem]</td>
	</tr>";
}
	?>
    </table>
</body>
</html>