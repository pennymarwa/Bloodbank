<head>
<script type="text/javascript" src="ajax_emp.js"></script>
</head>

<?php
$x=$_REQUEST['x'];
?>



<div class="row">
<?php
if($x=="yes")
{
	?>
    
    <div class="row">
<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
<b>Types of Thalassemia</b>
</div>
<div class="col-lg-5 col-sm-5 col-xs-5 col-md-5">
<select name="Types" class="form-control">
<option value="Minor">Minor</option>
<option value="Major">Major</option>

</select>
</div></div>
    <?php
}
else
{
}
?>
</div>

