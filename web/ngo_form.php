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
 <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
    </style>
</head>

<body>
 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                //alert(mesg);
            });
        });
    </script>
<div class="container" style="background-image:url(image/triangle-geometric-background.png); height:auto; width:1000px;">
<h3 style="color:#C00;"><b><u><center>NGO FORM</center></u></b></h3>
<br /><br />
<form method="post" action="ngo_dis.php" name="form" onsubmit="return valid();" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Name of Organisation</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="text" name="Organisation_Name" class="form-control" required="required"/><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Owner of Organisation</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="text" name="Owner_Name" class="form-control" required="required"/><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Description</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="text" name="Description" class="form-control" required="required"/><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Email</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="email" name="Email"  class="form-control"  required="required" /><br /><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Address</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<textarea rows="3" cols="40" name="Address" class="form-control" required="required"></textarea><br /><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<span><b style="font-size:20px; color:#333;">Location:</b></span></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="text"  name="Location" id="txtPlaces" placeholder="Enter a location" class="form-control" required="required" /></div></div><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Phone No</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<input type="number" name="Phone"  class="form-control" required="required"  /><br /><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Mobile No</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<input type="number" name="Mobile"  class="form-control" required="required"  /><br /><br /></div></div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><br />
<b style="font-size:20px;">Password</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  
 <input type="password" name="Password" class="form-control" required="required" /></div></div>
<br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b style="font-size:20px;">Logo</b></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">    
<input type="file" name="img" /></div></div>

<strong>
<input type="submit" name="SUBMIT" class="btn btn-danger center-block" value="SUBMIT" />
</strong>
</form>
</div>
<script type="text/javascript">
 
function valid()
{
	if(document.form.Name.value=="")
	{
		alert("please enter name");
		document.form.Name.focus();
		return false;
	}
	if(!document.form.Organisation_Name.value.match(/^[A-Za-z]+$/))

	{
		alert("please enter valid Organisation Name");
		document.form.Organisation_Name.focus();
		return false;
	}
if(!document.form.Owner_Name.value.match(/^[A-Za-z]+$/))

	{
		alert("please enter valid Owner Name");
		document.form.Owner_Name.focus();
		return false;
	}

	if(!document.form.Phone.value.match(/^[0-9]+$/))
	{
		alert("please enter Phone No");
		document.form.Phone.focus();
		return false;
		
	}
		if(!document.form.Mobile.value.match(/^[0-9]+$/))
	{
		alert("please enter Mobile No");
		document.form.Mobile.focus();
		return false;
		
	}
	if(document.form.Email.value=="")
	{
		alert("please enter valid email");
		document.form.Email.focus();
		return false;
	}
	if(document.form.Address.value=="")
	{
		alert("please enter valid address");
		document.form.Address.focus();
		return false;
	}
	
	
 
	  alert("Your values have been successfully entered");
  }
  </script>
</body>
</html>
