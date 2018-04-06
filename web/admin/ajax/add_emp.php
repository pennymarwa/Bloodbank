
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax_emp.js"></script>
<div class="container">
<form class="form-horizontal" method="post" action="insert_emp.php">

       
<div class="row">
<div class="col-lg-offset-1 col-lg-3 text-right"> 
<b>number1</b>
</div>
<div class="col-lg-5">
<input type="number" name="no1" onblur="select_patient(this.value)">
<br />
</div>
</div>

<div class="row">
<div class="col-lg-offset-1 col-lg-3 text-right"> 
<b>number2</b>
</div>
<div class="col-lg-5">
<input type="number" name="no2" onblur="select_patient(this.value)">
<br />
</div>
</div>


<div id="table">

</div>






<div class="row">
<input type="submit" value="REGISTER" class="btn btn-lg" />
</div>
</form>
</div>

