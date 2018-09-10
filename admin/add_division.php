
<?php
if (isset($_SESSION['m'])) {?>
<script>

		alertify.success("<span class='glyphicon glyphicon-ok'></span> Information successfully insert.");

</script>
<?php
unset($_SESSION['m']);
}
?>

<?php
if (isset($_SESSION['n'])) {?>
<script>
	
		alertify.success("<span class='glyphicon glyphicon-remove'></span> Information successfully insert.");
</script>
<?php
unset($_SESSION['n']);
}
?>

<div class="col_1">
		    <div class="col-md-4 span_7">	
		      
		    </div>
		    
			<div class="col-md-4 stats-info">
              <br>
               <div class="panel panel-info">
      				<div class="panel-heading" style="text-align:center">Division Add Form</div>
      				<div class="panel-body">
                    <form id="form3" name="myForm" method="post" action="insert/insert_division.php" onSubmit="return validateForm_division();"  enctype="multipart/form-data">
    					<legend>Division Name<span style="color:red">*</span></legend>                            
                             <div class="form-group">
                                <input type="text" class="form-control" autofocus name="divisionName" />
                              </div>
                                  <button type="submit" class="btn btn-primary pull-right btn-sm">Submit</button>
                      </form>
                    
                    
                    </div>
    			</div>
            </div>
            
             <div class="col-md-4 span_7">	
		      
		    </div>
            <div class="clearfix"> </div>
	