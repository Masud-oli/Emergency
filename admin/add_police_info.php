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
	
		alertify.error("<span class='glyphicon glyphicon-remove'></span> Fail to insert.");
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
      				<div class="panel-heading" style="text-align:center">Police Information Add Form</div>
      				<div class="panel-body">
                    <form id="form3" name="myForm" method="post" action="insert/insert_police_info.php" onSubmit="return validateForm_police();"  enctype="multipart/form-data">
                    <legend>Select Division Name<span style="color:red">*</span></legend>                            
                            <div class="form-group">
                                <select class="form-control" autofocus=""  id="divisionName" name="divisionName" onchange="callCourses()">
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
                                  <legend>Select District Name<span style="color:red">*</span></legend>        
                                 <div class="form-group">
                                 <select class="form-control" name="districtName" id="districtName" onChange="callUpazilla()">
								 <option class="form-control" selected hidden>Select district</option>						
								</select>
                                </div>
                               <legend>Select Upazilla Name<span style="color:red">*</span></legend>        
                                 <div class="form-group">
                                 <select class="form-control"  name="upazillaName" id="upazillaName">
								 <option class="form-control" value="select" selected hidden>Select upazilla</option>						
								</select>
                                </div>
                                
    					<legend>Police Title Name<span style="color:red">*</span></legend>                            
                             <div class="form-group">
                                <input type="text" class="form-control" placeholder="example- Rangpur Kotuyali Thana..." name="police_title" />
                              </div>
                          <legend>Mobile No.<span style="color:red">*</span></legend>                            
                             <div class="form-group">
                                <input type="text" class="form-control" onkeyup="validateInput_mobileNo();" value="+8801" maxlength="14" placeholder="Mobile input here..." name="mobileNo" />
                              </div>
                                  <button type="submit" class="btn btn-primary pull-right btn-sm">Submit</button>
                      </form>
                    
                    
                    </div>
    			</div>
            </div>
            
             <div class="col-md-4 span_7">	
		      
		    </div>
            <div class="clearfix"> </div>
	