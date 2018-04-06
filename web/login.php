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
<form method="post" action="Admin.php" onsubmit="abc();"><br />
<br />
<div class="row">
 <div class="col-xs-1 col-lg-1 col-md-1 col-sm-1" >
Username</div>
<div class="col-xs-11 col-lg-11 col-md-11 col-sm-11"><input type="text" name="username" class="form-control"/></div></div>
<br />
<div class="row">
 <div class="col-xs-1 col-lg-1 col-md-1 col-sm-1" >
Password</div>
<div class="col-xs-11 col-lg-11 col-md-11 col-sm-11"><input type="password" name="password" class="form-control" /></div></div>
<input type="submit" />
<form action="admin_index.php">
</form>
 <script type="text/javascript">
  function abc()
  {
	  alert("Your message is accepted and we will contact you within 24 hours");
  }
  </script>    
</body>
</html>