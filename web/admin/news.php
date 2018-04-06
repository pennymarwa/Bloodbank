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
<h3 style="color:#C00;"><b><u><marquee direction="right">latest News</marquee></u></b></h3>
<br /><br />
<form method="post" action="new_insert.php" onsubmit="abc();" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Image</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="file" name="img"  class="form-control" required="required"/><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">News Heading</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="text" name="News" class="form-control" required="required"/><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Date</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="date" name="Date" class="form-control" required="required"/><br /></div></div>


<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Description</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<textarea rows="20" cols="5" name="Description" class="form-control" required="required"/></textarea><br /></div></div>
<strong>
<input type="submit" name="SUBMIT" class="btn btn-danger center-block" value="SUBMIT" />
</strong>
</form>
</body>
</html>