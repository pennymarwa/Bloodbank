
<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REQUEST BLOOD</title>
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


<div class="container" style="background-image:url(image/triangle-geometric-background.png); height:auto; width:1000px;" >
 <div class="row">
 
 <?php
 if($_REQUEST['f']=="reqcity")
 include_once("reqcity.php");
 elseif($_REQUEST['f']=="bloodf")
include_once("reqgroup.php");
elseif($_REQUEST['f']=="bank_location")
include_once("city_dis.php");
 else
 {
 ?>  

	<div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">

<h1 style="color:#C00;"><u>DONORS</u></h1>
<div class="row">
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
<div class="row">
<div class="col-lg-3 col-md-4 col-sm-3 col-xs-4">
<span><b style="font-size:20px; color:#333;">Location:</b></span></div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">  
 <form method="post" action="<?php echo "index.php?a=request&f=reqcity"; ?>" name="form" onsubmit="return valid();">  
 <div class="input-group">
<input type="text"  name="Location" id="txtPlaces" placeholder="Enter a location" class="form-control" required="required" /><br />
  
<?php
$str=mysql_query("select * from donar1");
while($row=mysql_fetch_array($str))
{
echo"<option value='$row[Location]'>$row[Location]</option>";
}
?>
<span class="input-group-addon">
       <button type="submit" class="glyphicon glyphicon-search close"></button></span>
       </div></form>
       </div>
    </div></div>
    
     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">   
<div class="row">
    <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
   <b style="font-size:20px; color:#333;"> B_Group:</b>
    </div>
    <div class="col-xs-8 col-md-8 col-sm-8 col-lg-8">
     <form method="post" action="<?php echo "index.php?a=request&f=bloodf"; ?>">
    <div class="input-group">
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
    
    <span class="input-group-addon">
       <button type="submit" class="glyphicon glyphicon-search close"></button></span>
       </div></form>
       </div>
    </div></div></div><br><br>
    
     <?php
							if($_REQUEST['c']=="select_B_Group")
							include_once("dis_request.php");
							elseif($_REQUEST['c']=="filter_B_Group")
							include_once("reqcity.php");
							
							//elseif($_REQUEST['c']=="filter2_B_Group")
							//include_once("reqstate.php");
							
							else
					
							{
							?>
    
    
    
    
    
    
    
     <table class="table table-responsive table-striped" align="center">
    <tr style="font-size:20px">
    <td>Blood Group</td>
    <td>Name</td>
     <td>Contact</td>
    </tr>
     <?php
	$str=mysql_query("select * from donar1");
	while($row=mysql_fetch_array($str))
	{
		echo "
		<tr>
		<td><a href='index.php?a=request&c=select_B_Group&b=$row[id]'><b style='font-size:18px'>$row[B_Group]</b></a></td>
		<td style='font-size:16px'>$row[Name]</td>
		<td style='font-size:16px'>$row[Contact]</td>
		</tr>
		";
	}
	
	?>
    </table>
    <?php
	}
	?>
    </div>

    <div class="col-xs-5 col-md-5 col-sm-5 col-lg-5">
  <h1 style="color:#C00;"><u>BLOOD BANKS</u></h1>

    <div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<span><b style="font-size:20px; color:#333;">Location:</b></span></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  
<form method="post"  name="form"action="<?php echo "index.php?a=request&f=bank_location"; ?>">  
 <div class="input-group">
 
<input type="text"  name="Location" id="txtPlacess" placeholder="Enter a location" class="form-control" required="required" /><br />
  
<?php
$str=mysql_query("select * from banks");
while($row=mysql_fetch_array($str))
{
echo"<option value='$row[Location]'>$row[Location]</option>";
}
?>

<span class="input-group-addon">
       <button type="submit" class="glyphicon glyphicon-search close"></button></span>
       </div></form>
       <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('txtPlacess'));
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

       </div>
    </div><br><br>


     <?php
							if($_REQUEST['c']=="select_bank")
							include_once("dis_bank.php");
							elseif($_REQUEST['c']=="filter_bank")
							include_once("city_dis.php");
							elseif($_REQUEST['c']=="filter1_bank")
							include_once("state_dis.php");
							elseif($_REQUEST['c']=="filter2_bank")
							include_once("pin_dis.php");
							else
					
							{
							?>
    <table class="table table-responsive table-striped" align="center">
    <tr style="font-size:20px">
    <td>Bank Name</td>
    <td>Phone</td>
    </tr>
    <?php
	$str=mysql_query("select * from banks");
	while($row=mysql_fetch_array($str))
	{
		echo "
		<tr>
		<td><a href='index.php?a=request&c=select_bank&b=$row[id]'><b style='font-size:18px'>$row[Bank_Name]</b></a></td>
		<td style='font-size:16px'>$row[Phone]</td>
		</tr>
		";
	}
	
	?>
    </table>
    <?php
    }
	?>
     
    
    </div>
    <?php
 }
	?>
</div></div>
   
    
    
    
    
  <!--<div class="row">
    <div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">
    B_Group:
    </div>
    <div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
     <form method="post" action="<?php echo "index.php?a=request&c=filter1_B_Group"; ?>">
    <div class="input-group">
       

     <select name="abc" class="form-control">
    <?php
$str=mysql_query("select * from donar1");
while($row=mysql_fetch_array($str))
{
echo"<option value='$row[B_Group]'>$row[B_Group]</option>";
}
?>
 
    </select>
    <span class="input-group-addon">
       <button type="submit" class="glyphicon glyphicon-search close"></button></span>
       </div></form>
       </div>
    </div><br><br>
    <div class="row">
    <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
    City:
    </div>
    <div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
    <form method="post" action="<?php echo "index.php?a=request&c=filter_B_Group"; ?>">
    <div class="input-group">
    <select name="abc" class="form-control">
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
    <span class="input-group-addon">
    <a href="">
       <button type="submit" class="glyphicon glyphicon-search close"></button>
      </a>
      </span>
       
       </div>
       </form>
    </div>
    </div><br />
    
    
<br />
<div class="row">
    <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
    State:
    </div>
    <div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
    <form method="post" action="<?php echo "index.php?a=request&c=filter2_B_Group"; ?>">
    <div class="input-group">
    <select name="abc" class="form-control">
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
    <span class="input-group-addon">
    <a href="">
       <button type="submit" class="glyphicon glyphicon-search close"></button>
      </a>
      </span>
       
       </div>
       </form>
    </div>-->  
       
    
   
   
    

   
    
    
</body>
</html>