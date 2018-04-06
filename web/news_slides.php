<!doctype html>
<html lang="en-US">
<head>
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="horizontal/css/styles.css">
  <script type="text/javascript" src="horizontal/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="horizontal/js/responsiveCarousel.min.js"></script>


</head>

<body>
  <div id="w">
    <h1>Horizontal Posts Slider with jQuery</h1>
    
    <nav class="slidernav">
      <div id="navbtns" class="clearfix">
        <a href="#" class="previous">prev</a>
        <a href="#" class="next">next</a>
      </div>
    </nav>
    
    <div class="crsl-items" data-navigation="navbtns">
   
      <div class="crsl-wrap">
       <?php
	   mysql_connect("localhost","root","");
	   mysql_select_db("bloodbank");
								
							 $str1=mysql_query("select * from news");
	                        while($row=mysql_fetch_array($str1))
							{
								$path="admin/path/".$row['img'];
								?>
        <div class="crsl-item">
         
          <div class="thumbnail">
          
            <?php 
			echo "<img src='$path' width='300' height='300' />"; 
			?>
            <!--<img src="horizontal/img/thumb01.jpg" alt="nyc subway">-->
            <span class="postdate">Feb 16, 2014</span>
          </div>
          
          <h3><a href="#"><?php  echo "$row[News]"; ?></a></h3>
          
          <p><?php  echo "$row[Description]"; ?></p>
          
          <p class="readmore"><a href="<?php echo "index.php?a=newsdis&nz=$row[id]"; ?>">Read More &raquo;</a></p>
        </div>
        <?php
							}
							?>
        
        
      </div><!-- @end .crsl-wrap -->
    </div><!-- @end .crsl-items -->
    
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('.crsl-items').carousel({
    visible: 3,
    itemMinWidth: 180,
    itemEqualHeight: 370,
    itemMargin: 9,
  });
  
  $("a[href=#]").on('click', function(e) {
    e.preventDefault();
  });
});
</script>
</body>
</html>