<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ngo</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />

<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/jquery-1.11.0.js"></script>
<script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>

<script src="../bootstrap/js/bootstrap.min.js"></script>


</head>

<bod>
<div class="row" style="background-image:url(image/triangle-geometric-background.png); height:auto; width:1100px;" >
<h3 style="color:#FFF; background:#000; padding-bottom:30px; padding-top:30px;"><u><center><b><marquee direction="right">NON-GOVERNMENTAL ORGANISATION(NGO)</marquee></b></center></u></h3><br />
<div class="col-lg-3 col-sm-3 col-md-3 col-xs-3"><br />
<ol class="nav nav-stacked">
<li style="font-size:19px;"><a href="<?php echo "index.php?a=ngo&f=ngodes";  ?>">HOME</a></li><br />

<li style="font-size:19px;"><a href="<?php echo "index.php?a=ngo&f=ngodes&n=ngoevent";  ?>">ADD EVENTS</a></li><br />
<li style="font-size:19px;"><a href="<?php echo "index.php?a=ngo&f=ngodes&ngo_page.php&n=ngodis";  ?>">DISPLAY EVENTS</a></li><br />
<li style="font-size:19px;"><a href="<?php echo "index.php?a=ngo&f=ngodes&n=ngoacnt";  ?>">DISPLAY ACCOUNTS</a></li><br />
<li style="font-size:19px;"><a href="<?php echo"logout_n.php"?>">LOGOUT</a></li>
</ol></div>
<div class="col-lg-9 col-sm-9 col-md-9 col-xs-9" >

<?php
if($_REQUEST['n']=="ngoevent")
include_once("ngo_event.php");
elseif($_REQUEST['n']=="ngodis")
include_once("ngo_disevent.php");
elseif($_REQUEST['n']=="ngoacnt")
include_once("dis_account.php");
else
{
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
?>
<div  style="background-color:#0D5CAC; width:50%; border-radius:40%; padding:2% 2% 2% 2%; color:#FFF;">
<h1><center>WELCOME</center></h1>
<p><center><?php echo $_SESSION['org'];  ?></center></p>
</div>

<?php
}
?>
</div></div>
</body>
</html>