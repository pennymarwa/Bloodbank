
<head>
<script type="text/javascript" src="ajax_emp1.js"></script>
</head>
<?php
$y=$_REQUEST['y'];
?>
<div class="row"> 
<?php
if($y=="yes")
{
?>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<h5><b>Blood Group</b></h5></div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">  
  
<select name="B_Group" class="form-control">
<option value="A+">A+</option>
<option value="A1+">A1+</option>
<option value="A2+">A2+</option>
<option value="B+">B+</option>
<option value="A1B+">A1B+</option>
<option value="A2B+">A2B+</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="A-">A-</option>
<option value="A1-">A1-</option>
<option value="B-">B-</option>
<option value="A1B-">A1B-</option>
<option value="A2B-">A2B-</option>
<option value="AB-">AB-</option>
<option value="O-">O-</option>
</select>

<br /></div></div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<h5><b>Any Issue</b></h5></div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
<input type="text" name="Any_problem"  class="form-control"required="required" /><br /><br /></div></div>
  <?php
}
else
{
}
?>
</div>