<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container" style="background-image:url(image/triangle-geometric-background.png); height:auto; width:1000px;">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<h3  style="color:#C00;"><u> NEW USER</u></h3><br />
<p style="font-size:14px; alignment-adjust:central; color:#333;">
By Creating an account here, you will be able<br />to have a discution with us  and know about us <br /> more&nbsp;clearly.&nbsp;you&nbsp; are&nbsp; requested to&nbsp;</h4> fill the <br />feed back from  and let us know your reviews.
</p><br /><br />
<a href="<?php echo "index.php?a=register";  ?>">
<button type="button" class=" btn btn-primary" style="background-color:#000; font-size:20px;">Create My Account</button> </a>

</form>

</div>





<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
<center><h3 style="color:#C00;"><u>SIGN IN</u></h3></center><br />
<form  method="post" action="session12.php">
<div class="row">
 <div class="col-xs-4 col-lg-4 col-md-4 col-sm-4" >
<h4 style="color:#003; font-size:16px;"><b>USERNAME</b></h4></div>
<div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
<input type="text" name="username" class="form-control"required="required" placeholder="Enter Your Email" /></div></div>
<br /><br /><br />
<div class="row">
 <div class="col-xs-4 col-lgs-4 col-md-4 col-sm-4" >
<h4 style="color:#003; font-size:16px; "><b>PASSWORD</b></h4></div>
<div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
<input type="password" name="password" class="form-control"required="required" placeholder="Enter Password" /></div></div>
<br /><br />
<input type="submit" name="submit" value="Sign in" class=" btn btn-primary center-block" style="background-color:#000; font-size:20px;"  />
</form>

</div>
 
</div>
</div>
</body>
</html>