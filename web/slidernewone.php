<?php
error_reporting(0);
session_start();
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Boot-Slider Example</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="newone/css/boot_slider.css" />
	<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="newone/js/boot_slider.js"></script>
</head>
<body>
	<div class="container">
		<div class="row" id="boot_slider">
			<div class="col-xs-10 col-lg-10" id="slider_full">
				<div class="slider_nav col-xs-12 col-lg-12">
					<p id="slider_next"><i class="fa-arrow-circle-right fa"></i></p>
					<p id="slider_prev"><i class="fa-arrow-circle-left fa"></i></p>
				</div>

				<div class="col-xs-12 col-lg-12" id="slider_full_items">
                 <?php
								
							 $str1=mysql_query("select * from ngo");
	                        while($row=mysql_fetch_array($str1))
							{
								$path="path/".$row['img'];
								?>
					<div class="col-xs-12 col-lg-12 slider_full_item">
						<div class="img_large" style="background-image:url(image/23.jpg);">
                        <div class="row">
                        <div class="col-lg-3 col-lg-offset-1" style="top:100px;">
                        <?php echo "<img src='$path' width='200px' height='200px' class='img-circle'>";  ?>
                        </div>
                        <div class="col-lg-7" style="top:100px;font-family:Georgia, 'Times New Roman', Times, serif; font-size:30px; color:#900;">
                        <h2 class="text-uppercase"><?php echo "$row[Organisation_Name]"; ?></h2>
                        <h4><?php echo "$row[Owner_Name]"; ?></h4>
                        <h4><?php echo "$row[Email]"; ?></h4>
                        <h4><?php echo "$row[Mobile]"; ?></h4>
                        <h4><?php echo "$row[Location]"; ?></h4>

                       
                        </div>
                        </div>
                        
							<!--<p class="text-center">
								<span><?php echo "$row[Organisation_Name]"; ?></span>
								<span class="slider_full_desc"><?php echo "$row[Description]"; ?></span>
							</p>-->
						</div>
					</div>
                    <?php
							}
					?>
					
					
					
					
				</div>
				<div class="col-xs-12 col-lg-12" id="slider_loading"></div>
			</div>

			

		</div>
	</div>
</body>
</html>