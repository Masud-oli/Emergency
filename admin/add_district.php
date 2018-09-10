
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
	
		alertify.success("<span class='glyphicon glyphicon-remove'></span> Fail to insert.");
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
      				<div class="panel-heading" style="text-align:center">District Add Form</div>
      				<div class="panel-body">
                    <form id="form3" name="myForm" method="post" action="insert/insert_district.php" onSubmit="return validateForm_district();"  enctype="multipart/form-data">
                    <legend>Division Name<span style="color:red">*</span></legend>                            
                            <div class="form-group">
                                <select class="form-control" autofocus=""  id="divisionName" name="divisionName">
                                <option value="" selected hidden>Select division</option>
                               	<?php
										include('db_con.php');
						
										$resource=mysql_query("SELECT *FROM division GROUP BY divisionName");
						
										if(mysql_num_rows($resource)>0)
										{
											while($result=mysql_fetch_row($resource))
											{   
												?>
												<option class="form-control" value="<?php echo $result[1] ?>"><?php echo $result[1] ?></option>
												<?php
											}   
										   
										}
										?>

                                </select>
                              </div>
                              
    					<legend>District Name<span style="color:red">*</span></legend>                            
                             <div class="form-group">
                                <input type="text" class="form-control" placeholder="district name input here..." name="districtName" />
                              </div>
                                  <button type="submit" class="btn btn-primary pull-right btn-sm">Submit</button>
                      </form>
                    
                    
                    </div>
    			</div>
            </div>
            
             <div class="col-md-4 span_7">	
		      
		    </div>
            <div class="clearfix"> </div>
	