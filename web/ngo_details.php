<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container" style="background-image:url(image/hd%20image/images%20(3).jpg); background-repeat:no-repeat; background-size:100%;">
<?php 
if($_REQUEST['f']=="ngoform")
include_once("ngo_form.php");
elseif($_REQUEST['f']=="ngodes")
include_once("ngo_page.php");
elseif($_REQUEST['f']=="ngo_dis")
include_once("dis_ngo.php");
else
{							
?>
<div class="row">
  <?php
					if(!$_SESSION['idd'])
					{
                    ?>
                    <button type="button" class="btn btn-danger col-sm-offset-9" data-toggle="modal" data-target="#myModal">Login as NGO</button>
                    <?php
					}
					else
					{
					?>
                    <a href="<?php echo "index.php?a=ngo&f=ngodes"; ?>"><button type="button" class="btn btn-danger col-sm-offset-9">Home Page</button></a>
                    <?php	
					}
					?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><b style="color:#C00;"><center>NGO SIGN IN</center></b></h3>
        </div>
        <div class="modal-body">
          <p>
        <form  method="post" action="session1.php">
        <div class="row">
         <div class="col-xs-3 col-lg-3 col-md-3 col-sm-3" >
        <h4 style="color:#003; font-size:16px;"><b>USERNAME</b></h4></div>
        <div class="col-xs-7 col-lg-7 col-md-7 col-sm-7">
        <input type="text" name="username" class="form-control" required placeholder="Enter Your Name"/>
        </div></div>
        <br />
        <div class="row">
         <div class="col-xs-3 col-lgs-3 col-md-3 col-sm-3" >
        <h4 style="color:#003; font-size:16px; "><b>PASSWORD</b></h4></div>
        <div class="col-xs-7 col-lg-7 col-md-7 col-sm-7">
        <input type="password" name="password" class="form-control"required="required" placeholder="Enter Password" />
        </div></div>
        </p>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Sign in" class=" btn btn-primary" style="background-color:#000; font-size:20px;"   />
        
        <a href="<?php echo "index.php?a=ngo&f=ngoform";  ?>">
        <b style="color:#F00; font-size:18px" >Create An Account</b></a></div>
        </div>
         </form>
      </div>
      
    </div>
  </div>
  <br />
  <div class="row">
  <div class="col-xs-11 col-md-11 col-lg-11 col-sm-11"  style="background-color:#333;">
  <marquee> <h1 style="color:#FFF; ">NON-GOVERNMENTAL ORGANIZATION</h1></marquee>
</div>
  </div>
  <br />
  <div class="row">
  <div class="col-xs-10 col-md-10 col-lg-10 col-sm-10"  style="margin-left:4%; ">
   
<?php
include_once("slidernewone.php");
?>
</div></div>

<?php
}
?>

</div>
</body>
</html>