<head>
<script type="text/javascript" src="ajax_ad.js"></script>
</head>
<?php
$x=$_REQUEST['x'];
?>



<div class="row">
<div class="col-xs-2 col-lg-2 col-md-2 col-sm-2" >
<b style="color:#C00;">City:</b></div>
 <div class="col-xs-8 col-lg-8 col-md-8 col-sm-8">
<select name="City" class="form-control" required="required"/>
<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$str1=mysql_query("select * from cities where countryID='IND'");
while($row=mysql_fetch_array($str1))
{
	echo "<option value='$row[cityName]'>$row[cityName]</option>";
}


?>
</select>
</div></div>
