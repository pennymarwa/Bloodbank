<?php
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin index</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="../css/index.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
#d1 li a
{    
	 color:#FFF;
	 font-size:20px;
}

#d2 li a
{
	color:#999;
}
#ol li a:hover
{
	background: #cf0000;
	color: #fff;
}
</style>
</head>

<body>

<div class="nav navbar-default" style="background-color:#12247A; padding-top:30px; padding-bottom:30px;">
<div class="navbar-header">
<h2 style="color:#FFF;">Welcome ADMIN</h2>
</div>
<ol class="nav navbar-nav pull-right navbar-btn" id="d1">
<li><a href="admin_index.php"><b>HOME</b></a></li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>EVENTS</b></a>
<ul class=" dropdown-menu" style="background-color:#12247A;" id="d2">
<li><a href="<?php echo "admin_index.php?a=events"; ?>"><b>INSERT</b></a></li>
<li><a href="<?php echo "admin_index.php?a=events_dis"; ?>"><b>DISPLAY</b></a></li>
</ul>
</li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>BANKS</b></a>
<ul class=" dropdown-menu" style="background-color:#12247A;" id="d2">
<li><a href="<?php echo "admin_index.php?a=banks"; ?>"><b>INSERT</b></a></li>
<li><a href="<?php echo "admin_index.php?a=bank_dis"; ?>"><b>DISPLAY</b></a></li>
</ul>
</li>

<li><a href="<?php echo "admin_index.php?a=user"; ?>"><b>MEMBERS</b></a></li>
<li><a href="<?php echo "admin_index.php?a=ngo"; ?>"><b>NGO</b></a></li>

<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>NEWS's</b></a>
<ul class=" dropdown-menu" style="background-color:#12247A;" id="d2">
<li><a href="<?php echo "admin_index.php?a=new"; ?>"><b>INSERT</b></a></li>
<li><a href="<?php echo "admin_index.php?a=new_dis"; ?>"><b>DISPLAY</b></a></li>
</ul>
</li>

<li><a href="<?php echo "admin_index.php?a=donar"; ?>"><b>DONAR REGISTRATION</b></a></li>

<li><a href="logout.php"><b>LOGOUT</b></a></li></ol></div>
<div class="container">
<div class="row">
<?php
if($_REQUEST['a']=="events")
include_once("events.php");
else if($_REQUEST['a']=="events_dis")
include_once("display.php");
else if($_REQUEST['a']=="banks")
include_once("banks.php");
else if($_REQUEST['a']=="bank_dis")
include_once("bank_display.php");
else if($_REQUEST['a']=="user")
include_once("register_display.php");
else if($_REQUEST['a']=="donar")
include_once("Donar_dis.php");
else if($_REQUEST['a']=="ngo")
include_once("ngo_display.php");
else if($_REQUEST['a']=="new")
include_once("news.php");
else if($_REQUEST['a']=="new_dis")
include_once("new_display.php");


else
{
	echo "<h1 style='color:#12247A;'><center> <big><b><i>WELCOME TO ADMIN PANEL</i></b></big></center></h1>";
	
	
	
	
	include_once("admin_slider.php");
}
?>

</div>
</div>
</body>
</html>
