<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/boot_slider.css" />
	<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/boot_slider.js"></script>
</head>
<body>
	<div class="container">
		<div class="row" id="boot_slider">
			<div class="col-xs-12 col-lg-12" id="slider_full">
           
				<div class="slider_nav col-xs-12 col-lg-12">
					<p id="slider_next"><i class="fa-arrow-circle-right fa"></i></p>
					<p id="slider_prev"><i class="fa-arrow-circle-left fa"></i></p>
				</div>

				<div class="col-xs-12 col-lg-12" id="slider_full_items">
                 <?php
			mysql_connect("localhost","root","");
			mysql_select_db("gsauto");
			$str=mysql_query("select * from product_master");
			while($row=mysql_fetch_array($str))
			{
			?>
					<div class="col-xs-12 col-lg-12 slider_full_item">
						<div class="opacity"></div>
						<div class="img_large">
							<h3 class="text-center"><?php echo "$row[p_name]";   ?></h3>
                            <p class="text-center">
								<?php echo "$row[p_name]";   ?>
							</p>
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