<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>events form</title>
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
<h3  style="color:#C00;"><u>BLOOD CAMPS</u></h3>
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">     
<form method="post" action="event1.php" name="form" onsubmit="return vaid();" enctype="multipart/form-data">


<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="color:#C00;">Event Name</b></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">     
<input type="text" name=" Event_Name" class="form-control"required="required" placeholder="Enter Event name" /><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="color:#C00;">Name of Organisation</b></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">     
<input type="text" name="Organisation_name" class="form-control"required="required" placeholder="Enter Organisation Name" /><br /></div></div>

<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="color:#C00;">Venue</b></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<input type="text" name="Venue" class="form-control" required="required" placeholder="Enter Venue" /><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="color:#C00;">Time</b> </div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<input type="time" name="Time"  class="form-control" required="required" placeholder="Enter Time" /><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="color:#C00; ">Date</b> </div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">     
<input type="date" name="Date" class="form-control" required="required" placeholder="Enter Date" /><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="color:#C00;">Description</b></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">     
<input type="text" name="Description" class="form-control" required="required" /><br />
</div></div>




<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="color:#C00;">Image</b></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">    
<input type="file" name="img" /></div></div><br />
<input type="submit"  class="btn btn-primary center-block" name="Submit" /> 
</form>
</div>


</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
 <script type="text/javascript">
 

function valid()
{
	if(!document.form.Event_Name.value.match(/^[A-Za-z]+$/))

	{
		alert("please enter Event Name");
		document.form.Event_Name.focus();
		return false;
	}
if(!document.form.Organisation_Name.value.match(/^[A-Za-z]+$/))

	{
		alert("please enter Organisation Name");
		document.form.Organisation_Name.focus();
		return false;

	}
	  alert("Events have been successfully entered");
  }
  </script>
  </div>
  
</body>
</html>