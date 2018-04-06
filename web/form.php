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

<h3 style="color:#C00;"><b><u>NEW MEMBER REGISTRATION FORM</u></b></h3>
<br /><br />
<form method="post" action="register.php" name="form" onsubmit="return valid();">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">Name</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="text" name="Name" class="form-control" required="required"/><br /></div></div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">Gender</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<input type="radio" name="Gender" value="Male" />Male
<input type="radio" name="Gender" value="Female"/>Female<br /><br /></div></div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">Contact No</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<input type="number" name="Contact"  class="form-control" required="required" maxlength="10" /><br /><br /></div></div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">Email</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="email" name="Email"  class="form-control"  required="required" /><br /><br /></div></div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">Address</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<textarea rows="1" cols="40" name="Address" class="form-control" required="required"></textarea><br /><br /></div></div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<span><b style="font-size:20px; color:#333;">Location:</b></span></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="text"  name="Location" id="txtPlaces" placeholder="Enter a location" class="form-control" required="required" /></div></div><br />
<!--<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">State</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<select name="State"  class="form-control" required="required" />
<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$str=mysql_query("select * from states where countryID='IND'");
while($row=mysql_fetch_array($str))
{
	echo "<option value='$row[stateName]'>$row[stateName]</option>";
}


?>
</select>
<br /><br /></div></div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">City</b> </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<select name="City"  class="form-control"  required="required" />
<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$str1=mysql_query("select * from cities where countryID='IND'");
while($row=mysql_fetch_array($str1))
{
	echo "<option value='$row[cityName]'>$row[cityName]</option>";
}


?>
</select>

<br /><br /></div></div>-->
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">B-group</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
<select name="B_group" class="form-control">
<option value="A+">A+</option>
<option value="A1+">A1+</option>
<option value="A2+">A2+</option>
<option value="B+">B+</option>
<option value="A1B+">A1B+</option>
<option value="A2B+">A2B+</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="A-">A-</option>
<option value="A1-">A1-</option>
<option value="B-">B-</option>
<option value="A1B-">A1B-</option>
<option value="A2B-">A2B-</option>
<option value="AB-">AB-</option>
<option value="O-">O-</option>
</select>
<br /><br /></div></div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">Age</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="number" name="Age" class="form-control" required="required" min="18" max="60" /></div></div><br /><br />
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b style="font-size:20px;">Weight</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">     
<input type="text" name="Weight" class="form-control"  required="required"/></div></div><br /><br />
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><br />
<b style="font-size:20px;">Password</b></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  
 <input type="password" name="Password" class="form-control" required="required" /></div></div>
<br />
<strong>
<input type="submit" name="SUBMIT" class="btn btn-danger center-block" value="SUBMIT" />
</strong>
</form>
 <script type="text/javascript">
 

function valid()
{
	if(document.form.Name.value=="")
	{
		alert("please enter name");
		document.form.Name.focus();
		return false;
	}
	if(!document.form.Name.value.match(/^[A-Za-z]+$/))

	{
		alert("please enter valid Name");
		document.form.Name.focus();
		return false;
	}

if(document.form.Gender.value=="")
	{
		alert("please enter Gender");
		document.form.Gender.focus();
		return false;
	}
	if(!document.form.Contact.value.match(/^[0-9]+$/))
	{
		alert("please enter Contact No");
		document.form.Contact.focus();
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
	
	
	if(document.form.Age.value==""&&!document.form.Age.value.match(/^[0-9]+$/))
	{
		alert("please enter Age");
		document.form.Age.focus();
		return false;
		
	}
	if(document.form.Weight.value==""&&!document.form.Weight.value.match(/^[0-9]+$/))
	{
		alert("please enter Weight");
		document.form.Weight.focus();
		return false;
		
	}


	  alert("Your message is accepted and we will contact you within 24 hours");
  }
  </script>
</body>
</html>
