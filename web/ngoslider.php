<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Slideshow with jmpress.js</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slideshow with jmpress.js" />
        <meta name="keywords" content="jmpress, slideshow, container, plugin, jquery, css3" />
        <meta name="author" content="for Codrops" />
        <link rel="shortcut icon" href="../../favicon.ico"> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../../slideshow/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../../slideshow/css/style.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
		<![endif]-->
		<!-- jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<!-- jmpress plugin -->
		<script type="text/javascript" src="../../slideshow/js/jmpress.min.js"></script>
		<!-- jmslideshow plugin : extends the jmpress plugin -->
		<script type="text/javascript" src="../../slideshow/js/jquery.jmslideshow.js"></script>
		<script type="text/javascript" src="../../slideshow/js/modernizr.custom.48780.js"></script>
		<noscript>
			<style>
			.step {
				width: 100%;
				position: relative;
			}
			.step:not(.active) {
				opacity: 1;
				filter: alpha(opacity=99);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
			}
			.step:not(.active) a.jms-link{
				opacity: 1;
				margin-top: 40px;
			}
			</style>
		</noscript>
    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/ResponsiveHorizontalLayout/">
                    <strong>&laquo; Previous Demo: </strong>Responsive Horizontal Layout
                </a>
                <span class="right">
					<a href="http://blog.artcore-illustrations.de/aicons/">Artcore Icons by Artcore Illustration</a>
                    <a href="http://tympanus.net/codrops/2012/04/05/slideshow-with-jmpress-js/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			<header>
				<h1>Slideshow <span>with jmpress.js</span></h1>
				<h2>Adding some 3D to your slideshow</h2>
				<nav class="codrops-demos">
					<a class="current-demo" href="../../slideshow/index.html">Default</a>
					<a href="../../slideshow/index2.html">Autoplay</a>
					<a href="../../slideshow/index3.html">Different Layout</a>
				</nav>
			</header>
			<section id="jms-slideshow" class="jms-slideshow">
				<div class="step" data-color="color-1">
					<div class="jms-content">
						<h3>Just when I thought...</h3>
						<p>From fairest creatures we desire increase, that thereby beauty's rose might never die</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="../../slideshow/images/1.png" />
				</div>
				<div class="step" data-color="color-2" data-y="500" data-scale="0.4" data-rotate-x="30">
					<div class="jms-content">
						<h3>Holy cannoli!</h3>
						<p>But as the riper should by time decease, his tender heir might bear his memory</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="../../slideshow/images/2.png" />
				</div>
				<div class="step" data-color="color-3" data-x="2000" data-z="3000" data-rotate="170">
					<div class="jms-content">
						<h3>No time to waste</h3>
						<p>Within thine own bud buriest thy content and, tender churl, makest waste in niggarding</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="../../slideshow/images/3.png" />
				</div>
				<div class="step" data-color="color-4" data-x="3000">
					<div class="jms-content">
						<h3>Supercool!</h3>
						<p>Making a famine where abundance lies, thyself thy foe, to thy sweet self too cruel</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="../../slideshow/images/4.png" />
				</div>
				<div class="step" data-color="color-5" data-x="4500" data-z="1000" data-rotate-y="45">
					<div class="jms-content">
						<h3>Did you know that...</h3>
						<p>Thou that art now the world's fresh ornament and only herald to the gaudy spring</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="../../slideshow/images/5.png" />
				</div>
			</section>
        </div>
		<script type="text/javascript">
			$(function() {
			
				$( '#jms-slideshow' ).jmslideshow();
				
			});
		</script>
    </body>
</html>