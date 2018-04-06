<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Events</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
<div class="clearfix"></div>
                            <center><u><h3 style="color:#C00;"><b>BLOOD CAMPS</b></h3></u></center><br />


<div class="container">
                            <div class="row" style="background-image:url(image/triangle-geometric-background.png); height:auto; width:96%;"> 
                            <br /><br />
                            <?php
							if($_REQUEST['c']=="select_event")
							include_once("dis_event.php");
							else
							{
							?>
                      
                            <?php
                            $str=mysql_query("select * from events");
	                        while($row=mysql_fetch_array($str))
	                        {
							?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <?php
		                    echo "
								<i>$row[Date] </i>
								<p><b>$row[Event_Name]
								 <a href='index.php?a=Event&c=select_event&b=$row[id]'><font color='#CC0000'>Read More</font></a></p></b>
								 <br>
								 </div>
								 ";
								 
							}
						
							?>
                     
                            </div>
                            <?php
							}
							?>
                     </div> 
                     </div>      
    
</body>
</html>