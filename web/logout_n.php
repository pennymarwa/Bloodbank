<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="admin/css/index.css" />
<script src="admin/bootstrap/js/bootstrap.js"></script>
<script src="admin/bootstrap/js/jquery-1.11.0.js"></script>
<script src="admin/js/jquery.min.js"></script>
<script type="text/javascript" src="admin/js/jquery.leanModal.min.js"></script>

<script src="admin/bootstrap/js/bootstrap.min.js"></script>

</head>


<body>
<?php
session_start();
session_destroy();
header("location:index.php?a=ngo&b=thank you for login");
?>

</body>
</html>