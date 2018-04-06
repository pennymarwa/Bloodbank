<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />

<script src="../bootstrap/js/bootstrap.js"></script>
<shcript src="../bootstrap/js/jquery-1.11.0.js"></script>
<script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>

<script src="../bootstrap/js/bootstrap.min.js"></script>





</head>

<body>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


<h1 style="color:#00C;"><center><u>DISPLAY NEWS</u></center></h1></div></div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


<table class="table table-bordered table-responsive table-striped ">
<tr>
<th>Image</th>

<th>News</th>

<th>Date</th>


<th>Description</th>


</tr>
<?php
mysql_connect("localhost","root","");
mysql_query("create database bloodbank");
mysql_select_db("bloodbank");


$str = mysql_query("select *from news");
while($row=mysql_fetch_array($str))
{
	$path="path/".$row['img'];
	echo "<td><img src='$path' width='100px' height='100px'></td>";

	echo "<td>$row[News]</td>";
	echo "<td>$row[Date]</td>";
	
	
	echo "<td>$row[Description]</td>
	</tr>";
	
}





?>
</table>
</div></div></div>
</body>
</html>