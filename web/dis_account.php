<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$row=mysql_fetch_array(mysql_query("select * from ngo where Email='$_SESSION[idd]'"));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="css/index.css" />

<script src="ajax_emp.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<center><h3 style="color:#C00;"><b><u>ACCOUNT DETAIL</u></b></h3></center><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Name of Organisation</b> </div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">  
 <?php
   echo $row['Organisation_Name'];
   ?>   
     
<br /></div></div><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Owner of Organisation</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
 <?php
   echo $row['Owner_Name'];
   ?> 
    
<br /></div></div><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Description</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
 <?php
   echo $row['Description'];
   ?>     
     
</div></div><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Email</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> 
 <?php
   echo $row['Email'];
   ?>    
     
</div></div><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Address</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> 
 <?php
   echo $row['Address'];
   ?>    
     
</div></div><br />

<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Location</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">     
 <?php
   echo $row['Location'];
   ?>
     
</div></div><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Phone No</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> 
 <?php
   echo $row['Phone'];
   ?>    
     
</div></div><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Mobile No</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> 
 <?php
   echo $row['Mobile'];
   ?>    
     
</div></div><br />
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Password</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> 
 <?php
   echo $row['Password'];
   ?>    
     
</div></div><br />
<br />




</div>




</div>

</body>
</html>