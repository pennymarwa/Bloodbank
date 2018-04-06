<head>
<script type="text/javascript" src="ajax_emp.js"></script>
</head>
<?php
$x=$_REQUEST['x'];
?>



<div class="row">
<div class="col-lg-3"> 

<?php
if(isset($_REQUEST['no1']) && isset($_REQUEST['no2']))
{
	echo $_REQUEST['no1']+$_REQUEST['no2'];
}
?>

<br />
</div>
</div>

