<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BANK DETAILS</title>
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
<div class="container">
<h1 style="color:#C00;"><u><center>BANKS</center></u></h1>
<div class="container">
<div class="row">
	<div class="col-xs-8 col-md-8 col-sm-8 col-lg-8">
    
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
    <tr>
    <td>Bank Name</td>
    <td>Phone</td>
    </tr>
    <?php
	$str=mysql_query("select * from banks");
	while($row=mysql_fetch_array($str))
	{
		echo "
		<tr>
		<td><a href='index.php?a=bank&c=select_bank&b=$row[id]'>$row[Bank_Name]</a></td>
		<td>$row[Phone]</td>
		</tr>
		";
	}
	
	?>
    </table>
    <?php
    }
	?>
     
    
    </div>
	<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
    <div class="row">
    <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
    City:
    </div>
    <div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
    <form method="post" action="<?php echo "index.php?a=bank&c=filter_bank"; ?>" onsubmit="abc();">
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
    
    <div class="row">
    <div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">
    State:
    </div>
    <div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
     <form method="post" action="<?php echo "index.php?a=bank&c=filter1_bank"; ?>">
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
       <button type="submit" class="glyphicon glyphicon-search close"></button></span>
       </div></form>
       </div>
    </div>

    <br />
    <div class="row">
    <div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">
    Pin Code:
    </div>
    <div class="col-xs-7 col-md-7 col-sm-7 col-lg-7 ">
     <form method="post" action="<?php echo "index.php?a=bank&c=filter2_bank"; ?>">

    <div class="input-group">
       
     <input type="number" name="abc" class="form-control">
 
    <span class="input-group-addon">
       <button type="submit" class="glyphicon glyphicon-search close"></button></span>
       </div></form>
       </div>
       <script type="text/javascript">
  function abc()
  {
	  alert("Your message is accepted and we will contact you within 24 hours");
  }
  </script> 
    
    </div>
   
    

    </div>
   
    </div>
   
</div>
</div>



</body>
</html>