<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact</title>
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
<h1 style="color:#C00;"><big><center><u><b>CONTACT US</b></u></center></big></h1>
<br />
<br />
<br />

<div class="container"  style="background-image:url(image/triangle-geometric-background.png); height:auto; width:auto;">
<div class="row">
<div class="col-xs-4 col-lg-4 col-md-4 col-sm-4">
                     
                     <h2>Address:</h2><address>
                     <p>ANSH INFOTECH</p>
                     <p>SCO 12A</p>
                     <p class="bottom">2nd floor, Wisdom Tower</p>
                     <p>model Town Ext. Ludhiana</p></address>
                                          <h2>Phone:</h2>
                     <address>
                     <p>84278-94175,94175-69963</p></address>                      </div>
                     <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
                     <br />
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.0281613981356!2d75.82952361367701!3d30.88587318528983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a825313ade647%3A0x8221aeeb0002f9ba!2sANSH+InfoTech!5e0!3m2!1sen!2sin!4v1458982080426" width="50%" height="30%" frameborder="0" style="border:0" allowfullscreen></iframe>
                     
</div></div>
 <form method="post" action="contact1.php" name="form" onsubmit="return valid();">
 
<br /><br />
 <div class="row">
 <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b> Name:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
 <input type="text" name="Name" size="115" class="form-control"required="required" /><br />
 </div>
 </div>
 
 <div  class="row">
 <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
<b> Email:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
 <input type="email" name="Email" size="115" class="form-control" required="required" /><br />
 </div>
 </div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
 <b>Phone:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
 <input type="number" name="Phone" size="115" class="form-control" required="required" /><br />
 <br />
 </div></div>
 <div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<b> Enter Text:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
 <textarea name="text" class="form-control" required="required"></textarea><br />
 <br />
 </div></div>
 <input type="submit" name="SUBMIT" value="SUBMIT" class=" btn btn-primary center-block" style="background-color:#000; font-size:20px;"/>
<br />
 <br />
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
	if(!document.form.Name.value.match(/^[A-Za-z]+$/))

	{
		alert("please enter valid Name");
		document.form.Name.focus();
		return false;
	}

	if(!document.form.Phone.value.match(/^[0-9]+$/))
	{
		alert("please enter Phone No");
		document.form.Phone.focus();
		return false;
		
	}
	if(document.form.Email.value=="")
	{
		alert("please enter valid email");
		document.form.Email.focus();
		return false;
	}
	

	  alert("Your message is accepted and we will contact you within 24 hours");
  }
  </script>                                   
</body>
</html>