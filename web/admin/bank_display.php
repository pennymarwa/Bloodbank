<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Banks</title>
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

<h1 style="color:#00C;"><center>Display Banks</center></h1></div></div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<table class="table table-bordered table-responsive">
<tr>
<th>Bank Name</th>
<th>Contact Person</th>
<th>Address</th>
<th>Location</th>
<th>Pin Code</th>
<th>Phone No</th>
<th>Mobile</th>
<th>E_Mail</th>


</tr>
<?php
mysql_connect("localhost","root","");
mysql_query("create database bloodbank");
mysql_select_db("bloodbank");


$str = mysql_query("select *from Banks");
while($row=mysql_fetch_array($str))
{
	
	echo "<td>$row[Bank_Name]</td>";
	echo "<td>$row[Contact_Person]</td>";
	echo "<td>$row[Address]</td>";
	echo "<td>$row[Location]</td>";
	echo "<td>$row[Pin_Code]</td>";
	echo "<td>$row[Phone]</td>";
	echo "<td>$row[Mobile]</td>";
	echo "<td>$row[E_Mail]</td>
	</tr>";
	
}





?>
</table>
</div></div></div>






</body>
</html>