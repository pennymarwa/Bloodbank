<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
$str=mysql_query("select * from banks where id=$b ");
$row=mysql_fetch_array($str);
?>
<div class="container">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
<h3>
<?php
echo"<b style='font-size:30px; color:#C00;'>$row[Bank_Name]"." Details</b>";
?>
</h3>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<ol class="list-group" >
<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">

<b style="font-size:18px;">Bank Name</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Bank_Name]";
?>
</div>
</div>
</li>
<li class="list-group-item" >
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:18px;">Contact Person</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Contact_Person]";
?>
</div>
</div>
</li>

<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:18px;">Address</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Address]";

?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:18px;">Location</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Location]";

?>
</div>
</div>
</li>



<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:18px;">Pin Code</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Pin_Code]";
?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:18px;">Phone No</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Phone]";
?>
</div>
</div>
</li>
<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:18px;">Mobile No</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Mobile]";
?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:18px;">Email</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[E_Mail]";
?>
</div>
</div>
</li>

</ol>
</div>
</div>
</div>
</div>
</div>


</body>
</html>