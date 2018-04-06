<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display event</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="css/index.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$b=$_REQUEST['b'];
$str=mysql_query("select * from events where id=$b ");
$row=mysql_fetch_array($str);
?>
<div class="container">
<div class="row">
<div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
<h3>
<?php
echo"<center><b style='font-size:30px; color:#C00;'>$row[Event_Name]</b></center>";
?>
</h3>

<ol class="list-group">
<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<b style="font-size:22px;">Event Name</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Event_Name]";
?>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row">
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<b  style="font-size:22px;">Name of Organisation</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Organisation_name]";
?>
</div>
</div>
</li>


<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<b  style="font-size:22px;">Venue</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Venue]";

?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-6  col-sm-6 col-lg-6 col-md-6">
<b  style="font-size:22px;">Time</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Time]";

?>
</div>
</div>
</li>

<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<b  style="font-size:22px;">Date</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Date]";
?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<b  style="font-size:22px;">Description</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Description]";
?>
</div>
</div>
</li>
</ol></div>
<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4">
<br /><br /><br /><br />
<ol class="list-group">
<li class="list-group-item">
<div class="row">
<div class="col-xs-3 col-sm-3 col-lg-3 col-md-3">
<?php
$path="admin/path/".$row['img'];
echo "<img src='$path' width='330px' height='250px'>";
?>
</div>
</div>
</li>

</ol>
</div>
</div>
</div>
</body>
</html>