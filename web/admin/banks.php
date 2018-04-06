<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Banks</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="css/index.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="ajax_ad.js"></script>
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

<h1 style="color:#33C;"><center> BLOOD BANKS</center></h1>
<form method="post" action="bank1.php" name="form" onsubmit="return valid();">
<div class="row">
<div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b style="color:#C00;">Bank_Name:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
<input type="text" name="Bank_Name" class="form-control" required="required" />
</div></div><br />
<div class="row">
<div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b style="color:#C00;">Contact Person:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
<input type="text" name="Contact_Person" class="form-control" required="required" />
</div></div><br />

<div class="row">
<div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b style="color:#C00;">Address:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
<textarea rows="5" cols="40" name="Address" class="form-control" required="required"></textarea>
</div></div><br />
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<span><b style=" color:#C00;">Location:</b></span></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">     
<input type="text"  name="Location" id="txtPlaces" placeholder="Enter a location" class="form-control" required="required" /></div></div><br />


<div class="row">
 <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b style="color:#C00;">Pin Code:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
<input  type="number" name="Pin_Code" class="form-control"required="required" />
</div></div><br />
<div class="row">
 <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b style="color:#C00;">Phone No</b></div>

 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">

<input type="number" name="Phone" class="form-control" required="required" />
</div></div><br />

<div class="row">
 <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b style="color:#C00;">Mobile No</b></div>

 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">

<input type="number" name="Mobile" class="form-control" required="required" />
</div></div><br />
<div class="row">
<div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b style="color:#C00;">E-Mail</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">

<input type="email" name="E_Mail" class="form-control"required="required" />
</div></div><br />

<input type="Submit" name="submit" class="btn-primary btn center-block" />
</form>
 <script type="text/javascript">
 

function valid()
{	

	
	
	if(!document.form.Phone.value.match(/^[0-9]+$/))
	{
		alert("please enter phone No");
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
	
	
	if(document.form.Pin_Code.value==""&&!document.form.Age.value.match(/^[0-9]+$/))
	{
		alert("please enter valid Pin Code");
		document.form.Pin_Code.focus();
		return false;
		
	}
	  alert("Your values have been successfully entered");
  }
  </script>
</body>
</html>