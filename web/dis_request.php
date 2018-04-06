<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$b=$_REQUEST['b'];
$str=mysql_query("select * from donar1 where id=$b ");
$row=mysql_fetch_array($str);
?>
<div class="container">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<h3>
<?php
echo"<center><b style='font-size:30px; color:#C00;'>$row[B_Group]</b></center>"
?>
</h3>
<ol class="list-group">
<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:22px;">Name</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Name]";
?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:22px;">Gender</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Gender]";

?>
</div>
</div>
</li>

<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:22px;">Contact</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Contact]";

?>
</div>
</div>
</li>

<li class="list-group-item">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:22px;">Email</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Email]";
?>
</div>
</div>
</li>

<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5>
<b style="font-size:22px;">Address</b>
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
<b style="font-size:22px;">Location</b>
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
<b style="font-size:22px;">Age</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Age]";
?>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:22px;">Weight</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Weight]";
?>
</div>
</div>
</li>
<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:22px;">Donate</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Donate]";
?>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:22px;">Blood group</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[B_Group]";
?>
</div>
</div>
</li>
<li class="list-group-item" style="background-color:#CCC;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
<b style="font-size:22px;">Any Issue</b>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
<?php
echo"$row[Any_problem]";
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