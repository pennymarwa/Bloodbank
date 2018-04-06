<?php
error_reporting(0);
session_start();

mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->

<!--<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-1.11.0.js"></script>-->
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
	<div class="container">	
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="index.php">
							<h6>the</h6>
							<h1>Blood<span>Bank</span></h1>
						</a>
					</div>
				</div>
					<div class="social-icons">
						<li><a href="http://facebook.com"><i class="facebook"></i></a></li>
						<li><a href="http://twitter.com"><i class="twitter"></i></a></li>
						<!--<li><a href="#"><i class="rss"></i></a></li>-->
						
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
	   						
	   						
							

					</div>
					<div class="clearfix"></div>
				<div class="header-right">
					<div class="top-menu">
						

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script></li>    
							
					</div>
					<!---pop-up-box---->  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					<div id="small-dialog1" class="mfp-hide">
						<div class="signup">
							<h3>Subscribe</h3>
							<h4>Enter Your Valid E-mail</h4>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
							<div class="clearfix"></div>
							<input type="submit"  value="Subscribe Now"/>
						</div>
					</div>	

                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
					
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
			<span class="menu"></span>      
			<div class="menu-strip" style="padding-bottom:25px; padding-top:25px;">
				<ul>           
					<li style="font-size:14px;"><a href="index.php"><b>Home</b></a></li>
					<li style="font-size:14px;">
					<?php
					if(!$_SESSION['id'])
					{
                    ?>
                    <a href="<?php echo "index.php?a=login&b=please login first";?>"><b>Donor&nbsp;Registration</b></a>
                    <?php
					}
					else
					{
					?>
                    <a href="<?php echo "index.php?a=donar";  ?>"><b>Donor&nbsp;Registrations</b></a>
                    <?php	
					}
					?>
                    </li>
					<li style="font-size:14px;"><a href="<?php echo "index.php?a=Event";  ?>"><b>Blood&nbsp;Camps</a></li>
				                    
                    <li style="font-size:14px;"><?php
					if(!$_SESSION['id'])
					{
                    ?>
                    <a href="<?php echo "index.php?a=login&b=please login first";?>"><b>Request&nbsp;Blood</b></a>
                    <?php
					}
					else
					{
					?>
                    <a href="<?php echo "index.php?a=request";  ?>"><b>Request&nbsp;Blood</b></a>
                    <?php	
					}
					?>
                    </li>
                    <li style="font-size:14px;"><a href="<?php echo "index.php?a=ngo";  ?>"><b>Ngo</b></a></li>

                    <li style="font-size:14px;"><a href="<?php echo "index.php?a=tips";  ?>"><b>Health&nbsp;Tips</b></a></li>

					<li style="font-size:14px;"><a href="<?php echo "index.php?a=contact";  ?>"><b>Contact&nbsp;Us</b></a></li>
					<li style="font-size:14px;">
                    <?php
					if(!$_SESSION['id'])
					{
                    ?>
                    <a href="<?php echo "index.php?a=login";  ?>"><b>Login</b></a>
                    <?php
					}
					else
					{
					?>
                    <a href="logout_u.php"><b>Logout</b></a>
                    <?php	
					}
					?>
                    </li> 
				</ul>
                <div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form>
					<label>Email / Username</label>
					<input type="text" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form>
					<label>Full Name</label>
					<input type="text" />
					<br />

					<label>Email Address</label>
					<input type="email" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="send_updates" type="checkbox" />
						<label for="send_updates">Send me occasional email updates</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>
			</div>
            <div class="row">
            <div class="col-xs-offset-4">
            <div id="d1" class="modal">
            <div class="modal-content"   style="background-image:url(image/bg%20images/images%20(3).jpg);">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1 style="background-color:#FF3;"><center>LOGIN</center></h1>
            </div>
            <div class="modal-body">
            
            <form method="post" action="Admin.php"><br />
<br />
<div class="row">
 <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b>Username</b></div>
<div class="col-xs-5 col-lg-5 col-md-5 col-sm-5"><input type="text" name="username" class="form-control"/></div></div>
<br />
<div class="row">
 <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b>Password</b></div>
<div class="col-xs-5 col-lg-5 col-md-5 col-sm-5"><input type="password" name="password" class="form-control" /></div></div>

            
            </div>
            <div class="modal-footer">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <button type="button" class="btn btn-block " style="color:#900;" data-dismiss="modal">Sign In</button></div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <button type="button" class="btn btn-block"><a href="<?php echo "index.php?a=register"; ?>">Sign Up</a></button></div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <button type="button" class="btn btn-block" data-dismiss="modal">close</button></div></div></div>
           </form>
            </div>
            </div></div>
            </div>
           

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
            
            
<?php
if($_REQUEST['a']=="register")
include_once("form.php");
elseif($_REQUEST['a']=="contact")
include_once("contact.php");
elseif($_REQUEST['a']=="bank")
include_once("bank_details.php");
elseif($_REQUEST['a']=="request")
include_once("request.php");
elseif($_REQUEST['a']=="Event")
include_once("event_details.php");
elseif($_REQUEST['a']=="login")
include_once("sign in.php");
elseif($_REQUEST['a']=="donar")
include_once("donar registration.php");
elseif($_REQUEST['a']=="tips")
include_once("blood tips.php");
elseif($_REQUEST['a']=="ngo")
include_once("ngo_details.php");
elseif($_REQUEST['a']=="newsdis")
include_once("newpage.php");



else
{

?>

           
            
			<div class="main-content">		
				<div class="col-md-12 total-news">
					<div class="slider">
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  $("#conference-slider").responsiveSlides({
								auto: true,
								manualControls: '#slider3-pager',
							  });
							});
						</script>
						 <div class="conference-slider">
							<!-- Slideshow 3 -->
							<ul class="conference-rslide" id="conference-slider">
							  <li><img src="image/bg images/bloodbank.jpg" height="331" width="636" alt=""></li>
							  <li><img src="image/bg images/download.png" height="331" width="636" alt=""></li>
							  <li><img src="image/bg images/images (18).jpg"height="331" width="636" alt=""></li>
							  <li><img src="image/bg images/blood-donate-centers.jpg"height="331" width="636" alt=""></li>
							</ul>
							<!-- Slideshow 3 Pager -->
							<ul id="slider3-pager">
							  <li><a href="#"><img src="image/bg images/bloodbank.jpg"  width="100" height="70" alt=""></a></li>
                              <li><a href="#"><img src="image/bg images/download.png" width="100" height="70"alt=""></a></li>
							  <li><a href="#"><img src="image/bg images/images (18).jpg" width="100" height="70" alt=""></a></li>
							  <li><a href="#"><img src="image/bg images/blood-donate-centers.jpg"   width="100" height="70" alt=""></a></li>
							</ul>
							<div class="breaking-news-title">
								<p>Blood donation is a voluntary procedure. You agree to have blood drawn so that it can be given to someone who needs a blood transfusion. </p>
							</div>
						</div> 
					</div>	
				<div class="posts">
                
					<!--<div class="left-posts">-->
						
                        
						<div class="latest-articles">
							<div class="main-title-head">
								<h2 style="color:#000; font-size:24px;"><b><u>LATEST NEWs</u></b></h2>
								<div class="clearfix"></div>
							</div>
                            <marquee scrolldelay="20" scrollamount="20" onmouseover="this.stop();" onmouseout="this.start();">
							<div class="world-news-grids">
								<?php
						
								$sstt=mysql_query("select * from news");
								while($rrww=mysql_fetch_array($sstt))
								{
									$pathh="admin/path/".$rrww['img'];
								?>

								<div class="world-news-grid" style="margin:5px 10px 5px 10px; padding:10px 10px 10px 10px; border:thick groove #900;">
                                <?php
									echo "<img src='$pathh' width='200px' height='200px' />";
								?>
									<a href="#" class="title text-center"><?php  echo "$rrww[News]"; ?></a>
									
									<button type="button" class="btn btn-sm center-block"><a href="<?php echo "index.php?a=newsdis&nz=$rrww[id]"; ?>">Read More</a> </button>
                                    <br>
								</div>
                                <?php
								}
								?>

                            <div class="clearfix"></div>
						</div>
                        </marquee>
                        
                        
						<div class="gallery">
							<div class="main-title-head">
								<h2 style="color:#000; font-size:24px;"><b><u>EVENTs</u></b></h2>
								<!--<a href="#">More  +</a>-->
								<div class="clearfix"></div>
							</div>
							<div class="gallery-images">
								<div class="course_demo1">
								  <ul id="flexiselDemo1">	
                                    <?php
							if($_REQUEST['c']=="select_event")
							include_once("dis_event.php");
							else
							{
							?>	
                                  <?php
								
								  $str1=mysql_query("select * from events");
	                        while($row=mysql_fetch_array($str1))
							{
								?>
                           <li> <?php
						    
						
              				$path="admin/path/".$row['img'];
echo "<a href='index.php?a=Event&c=select_event&b=$row[id]'>
<figure>
<img src='$path' width='250px' height='250px'>
<figcaption><b>$row[Event_Name]</b></figcaption>
</figure>
</a>";

								}
								  ?></li>
                                   <?php
							}
							?>
									<!-- <li>
										<a href="#"><img src="image/images (5).jpg" alt="" /></a>						
									 </li>
									 <li>
									   <a href="#"><img src="image/bg images/images (22).jpg" alt="" /></a>
									  </li>	
									 <li>
										<a href="single.html"><img src="image/images (6).jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="#"><img src="image/bg images/images (14).jpg" alt="" /></a>
									 </li>-->	
								 </ul>
							 </div>
							 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							 
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>
						 </div>
                         <br>
                         <div class="main-title-head">
								<h2 style="color:#000; font-size:24px;"><b><u>NGOs</u></b></h2>
								<!--<a href="#">More  +</a>-->
								<div class="clearfix"></div>
							</div>
						 <div class="course_demo1">
								  <ul id="flexiselDemo">
                                   <?php
							if($_REQUEST['c']=="ngo_dis")
							include_once("dis_ngo.php");
							else
							{
							?>	
                                  <?php
								
								  $str1=mysql_query("select * from ngo");
	                        while($row=mysql_fetch_array($str1))
							{
								?>
                           <li> <?php
						    
						
              				$path="path/".$row['img'];
echo "<a href='index.php?a=ngo&f=ngo_dis&b=$row[id]'>
<figure>
<img src='$path' width='250px' height='250px'></a>
<figcaption><b>$row[Organisation_Name]</b></figcaption>
</figure>";

								}
								  ?></li>
                                   <?php
							}
							?>
                                  
                                  	
									<!-- <li>
										<a href="#"><img src="image/bg images/images (14).jpg" alt="" /></a>							
									 </li>
									 <li>
										<a href="#"><img src="image/images (6).jpg" alt="" /></a>
									  </li>	
									 <li>
										<a href="#"><img src="image/images (5).jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="#"><img src="image/bg images/images (22).jpg" alt="" /></a>
									 </li>	-->
								 </ul>
							 </div>
							 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>

							</div>
                            
                            
                            
                            
                            
                            
                            
						<!--<div class="tech-news" style="width:100%;">
							<div class="main-title-head">
								<h3>Events</h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>	
							<div class="tech-news-grids" style="width:100%;">
								<div class="left-tech-news" style="width:100%;">
                                     <div class="row">
                         <?php
							if($_REQUEST['c']=="select_event")
							include_once("dis_event.php");
							else
							{
														
							$str=mysql_query("select * from events");
	                        while($row=mysql_fetch_array($str))
	                        {
							?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <?php
		                    echo "
								<i>$row[Date] </i>
								<b><p>$row[Event_Name]<span style='background-color:red;'><a href='index.php?a=Event&c=select_event&b=$row[id]'><font color='#FFF'>Read More</font></a></span></p></b>
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
                           <!--		<div class="tech-news-grid span_66">

										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								<div class="right-tech-news">
									<div class="tech-news-grid span_66">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								
							</div>
						</div>--><div class="clearfix"></div>
					</div>
                    
                    
                    
                    
					<div class="clearfix"></div>	
				</div>
				</div>>
				
                </div>
				
					
						
					</div>
					       </div>     
					<!--<div class="clearfix"></div>
				</div>	-->
				
             <?php
							}
				?>
<!--<div class="clearfix"></div>-->
			</div>
			<div class="footer text-center" style="background-color:#FFF; width:99%;">
				<div class="bottom-menu">
					<ul>                 
						<li><a href="index.php">Home</a></li> |
						<li><?php
					if(!$_SESSION['id'])
					{
                    ?>
                    <a href="<?php echo "index.php?a=login";?>">Donor&nbsp;Registration</a>
                    <?php
					}
					else
					{
					?>
                    <a href="<?php echo "index.php?a=donar";  ?>">Donor&nbsp;Registrations</a>
                    <?php	
					}
					?></li> |
						<li><a href="<?php echo "index.php?a=Event"; ?>">Blood Camps</a></li> |
						<li><a href="<?php echo "index.php?a=request"; ?>">Request&nbsp;Blood</a></li> |
                        <li><a href="<?php echo "index.php?a=ngo"; ?>">NGO</a></li> |

						<li><a href="<?php echo "index.php?a=tips"; ?>">Health Tips</a></li> |
						<li><a href="<?php echo "index.php?a=contact"; ?>">Contact&nbsp;Us</a></li> |
										</ul>
				
				<div class="copyright text-center">
					<p>NavAshu</p>
				</div></div></div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>