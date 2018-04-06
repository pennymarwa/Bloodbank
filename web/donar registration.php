
<?php
session_start();
if($_SESSION['id'])
{
	
}
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$row=mysql_fetch_array(mysql_query("select * from register where id='$_SESSION[login]'"));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DONAR REGISTRATION</title>
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
<div class="container" style="background-image:url(image/triangle-geometric-background.png); height:auto; width:1000px;">
<div class="row">
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
<form method="post" action="donar1.php" onsubmit="abc();" name="form">

<div class="row">
<center><h3 style="color:#C00;" s><b><u>BlOOD DONAR</u></b></h3></center><br />
<div class="col-lg-7 col-sm-7 col-xs-7 col-md-7">
<b style="color:#F00;">ARe YOu SUre YOu Can Donate ?</b>
</div>
<div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
<input type="radio" name="Donate" value="Yes" /><b>Yes</b>
<input type="radio" name="Donate" value="No"/><b>No</b><br /><br />

</div></div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<h5><b>Blood Group</b></h5></div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">  
  
<select name="B_Group" class="form-control">
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

<br /></div></div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<h5><b>Any Issue</b></h5></div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
<input type="text" name="Any_problem"  class="form-control"required="required" /><br /><br /></div></div>
<div class="row">
<div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
<b style="color:#F00; font-size:16px;">Are You Suffring From Thalassemia?</b>
</div>

<div class="col-lg-3 col-sm-3 col-xs3 col-md-3">
<!--<input type="radio" name="Donate" value="Yes" /><b>Yes</b>
<input type="radio" name="Donate" value="No"/><b>No</b><br /><br /><br />
-->
<select name="Thalassemia" class="form-control"  onblur="select_patient(this.value)">
<option value="yes">Yes</option>
<option value="no">No</option>
</select>
</div></div>
<br />
<div id="table">

<div class="row">
</div>
</div>
<br /><br />
<input type="hidden" name="Name" value="<?php echo $row['Name'];  ?>" />
<input type="hidden" name="Gender" value="<?php echo $row['Gender']; ?>"  />
<input type="hidden" name="Contact" value="<?php echo $row['Contact'];  ?>" />
<input type="hidden" name="Email" value="<?php echo $row['Email'];  ?>" />
<input type="hidden" name="Address" value="<?php echo $row['Address'];  ?>" />
<input type="hidden" name="Location" value="<?php echo $row['Location'];  ?>" />
<input type="hidden" name="Age" value="<?php echo $row['Age'];  ?>" />
<input type="hidden" name="Weight" value="<?php echo $row['Weight'];  ?>" />




<input type="submit" name="SUBMIT" value="SUBMIT" class=" btn btn-primary center-block" style="background-color:#000; font-size:20px;" onclick="abc1();"/>
</form></div>


 <script type="text/javascript">
  function abc()
  {
	  
	alert("Your values successfully entered");
	  
  }
  function abc1()
  {
	  if(document.form.Types.value=="Major")
	  {
	  alert("Sorry you can not allow to donate blood because of major Thalassemia");
	  document.form.Any_problem.focus();
	  return false;
	  }
  }
 
  </script>    
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >
<center><h3 style="color:#C00;"><b><u>REGISTRATION</u></b></h3></center><br />

<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<b style="font-size:20px;">Name </b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> 
    
   <?php
   echo $row['Name'];
   ?>
</div></div><br />
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<b  style="font-size:20px;">Gender</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">   
 <?php
   echo $row['Gender'];
   ?>  
</div></div><br />
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<b  style="font-size:20px;">Contact</b> </div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">     
 <?php
   echo $row['Contact'];
   ?>
   <br /></div></div><br />
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<b  style="font-size:20px;">Email</b> </div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> 
 <?php
   echo $row['Email'];
   ?>    
     
<br /></div></div><br />
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<b  style="font-size:20px;">Address</b> </div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">  
 <?php
   echo $row['Address'];
   ?>   
     
<br /></div></div><br />


<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<b  style="font-size:20px;">Location</b> </div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">  
 <?php
   echo $row['Location'];
   ?>   
     
<br /></div></div><br />
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<b  style="font-size:20px;">B-group</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
 <?php
   echo $row['B_group'];
   ?> 
    
<br /></div></div><br />
<!--<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<b>Disease</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
 <?php
   echo $row['Disease'];
   ?>     
     
</div></div><br /><br />-->
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<b  style="font-size:20px;">Age</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> 
 <?php
   echo $row['Age'];
   ?>    
     
</div></div><br />
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<b   style="font-size:20px;">Weight</b></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">     
 <?php
   echo $row['Weight'];
   ?>
     
</div></div><br />
<br />

</form>








</div>
</div>



</div>
</body>
</html>