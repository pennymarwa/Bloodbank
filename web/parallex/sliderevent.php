<?php
error_reporting(0);
session_start();

mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="stylesheet" type="text/css" href="parallex/css/style2.css" />
		<script type="text/javascript" src="parallex/js/modernizr.custom.28468.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<noscript>
			<link rel="stylesheet" type="text/css" href="parallex/css/nojs.css" />
		</noscript>
    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <!--/ Codrops top bar -->
			
			<div id="da-slider" class="da-slider">
            <?php
								
							 $str1=mysql_query("select * from ngo");
	                        while($row=mysql_fetch_array($str1))
							{
								$path="path/".$row['img'];
								?>
				<div class="da-slide">
					<h2><?php echo "$row[Organisation_Name]"; ?></h2>
					<p><?php echo "$row[Description]"; ?></p>
					<?php echo"<a href='index.php?a=ngo&f=ngo_dis&b=$row[id]' class='da-link'>"; ?>Read more</a>
					<div class="da-img"><?php echo "<img src='$path' width='250' height='200' />"; ?></div>
				</div>
				<?php
							}
							?>
				
				
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="parallex/js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
		</script>	
    </body>
</html>