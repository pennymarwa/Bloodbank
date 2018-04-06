<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$id=$_REQUEST['nz'];
$rows=mysql_fetch_array(mysql_query("select * from news where id='$id'"));
$path="admin/path/".$rows['img'];
?>
<!DOCTYPE html>
<html>
<head>
<title>latest news</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The News Reporter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

</head>
<body>
	<!-- header-section-starts -->
	<!--<div class="container">	-->
		<div class="news-paper">
			
			
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="blog-main-content">		
				<div class="col-md-9 col-lg-9 total-news">
					
	<div class="grids">
		<div class="grid box">
			<div class="grid-header">
				<a class="gotosingle" href="#"><?php echo $rows['News']; ?> </a>
				<ul>
				<li><span>Post by Admin</a> <?php echo $rows['Date']; ?> </span></li>
				
				</ul>
			</div>
			<div class="singlepage">
							<a href="#"><?php echo "<img src='$path' />"; ?></a>
							<p><?php echo $rows['Description']; ?></p>
							<div class="clearfix"> </div>
						</div>
			<div class="comments">
			<ul>
				<li><a href="#"><img src="images/views.png" title="view" /></a></li>
				<li><a href="#"><img src="images/likes.png" title="likes" /></a></li>
				<li><a href="#"><img src="images/link.png" title="link" /></a></li>
			</ul>
			</div>
		</div>
	
			<div class="clearfix"> </div>
	</div>
	
	<ul class="comment-list">
		  		   <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
		  		   <li><img src="images/avatar.png" class="img-responsive" alt="">
		  		   <div class="desc">
		  		   <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
		  		   </div>
		  		   <div class="clearfix"></div>
		  		   </li>
		  	  </ul>
				 <div class="content-form">
					 <h3>Leave a comment</h3>
					<form method="post" action="new_insert.php" onSubmit="abc();">
						<input type="text"  name="Name" placeholder="Name" required/>
						<input type="text"  name="Email" placeholder="Email" required/>
						<input type="text" name="Phone" placeholder="Phone" required/>
						<textarea name="Message" placeholder="Message"></textarea>
						<input type="submit" value="SEND"/>
				   </form>
						 </div>
			</div>	
				
				
				<div class="clearfix"></div>
			</div>
			
		</div>
	</div>
    <script type="text/javascript">
 
function abc()
    {
	

	  alert("Your comments has been recorded");
  }
  </script>
</body>
</html>