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
$str=mysql_query("select * from ngo where id=$b ");
$row=mysql_fetch_array($str);
?>
<div class="container">
<div class="row">
<div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
<h3>
<?php
echo"$row[Organisation_Name]";
?>
</h3>

<ol class="list-group">
<li class="list-group-item">
<div class="row">
<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
Name of Organisation
</div>
<div class="col-xs-8 col-sm-8 col-lg-8 col-md-8">
<?php
echo"$row[Organisation_Name]";
?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
Owner of Organisation
</div>
<div class="col-xs-8 col-sm-8 col-lg-8 col-md-8">
<?php
echo"$row[Owner_Name]";

?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-4  col-sm-4 col-lg-4 col-md-4">
Description
</div>
<div class="col-xs-8 col-sm-8 col-lg-8 col-md-8">
<?php
echo"$row[Description]";

?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
Email
</div>
<div class="col-xs-8 col-sm-8 col-lg-8 col-md-8">
<?php
echo"$row[Email]";
?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
Address:
</div>
<div class="col-xs-8 col-sm-8 col-lg-8 col-md-8">
<?php
echo"$row[Address]";
?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
Location:
</div>
<div class="col-xs-8 col-sm-8 col-lg-8 col-md-8">
<?php
echo"$row[Location]";
?>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row">
<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
Phone No:
</div>
<div class="col-xs-8 col-sm-8 col-lg-8 col-md-8">
<?php
echo"$row[Phone]";
?>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row">
<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
Mobile No:
</div>
<div class="col-xs-8 col-sm-8 col-lg-8 col-md-8">
<?php
echo"$row[Mobile]";
?>
</div>
</div>
</li>

</ol></div><br /><br /><br />
<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4">
<ol class="list-group">
<li class="list-group-item">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">



<?php
$path="path/".$row['img'];
echo "<img src='$path' width='200px' height='300px'>";
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