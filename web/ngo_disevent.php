<?php
session_start();
?>
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
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">


<h1 style="color:#C00;" s><b><u><center>DISPLAY EVENTS</center></u></b></h1></div></div><BR />
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">


<table class="table table-bordered table-responsive table-striped">
<tr>
<th>Event Name</th>
<th>Name of Organisation</th>
<th>Venue</th>
<th>Time</th>
<th>Date</th>
<th>Description</th>
<th>Image</th>


</tr>
<?php
mysql_connect("localhost","root","");
mysql_query("create database bloodbank");
mysql_select_db("bloodbank");


$str = mysql_query("select * from events where Organisation_Name='$_SESSION[org]'");
while($row=mysql_fetch_array($str))
{
	$path="admin/path/".$row['img'];
	echo "<td>$row[Event_Name]</td>";
	echo "<td>$row[Organisation_name]</td>";
	echo "<td>$row[Venue]</td>";
	echo "<td>$row[Time]</td>";
	echo "<td>$row[Date]</td>";
	echo "<td>$row[Description]</td>";
	echo "<td><img src='$path' width='100px' height='100px'></td>
	</tr>";
	
}





?>
</table>
</div></div></div>
</body>
</html>