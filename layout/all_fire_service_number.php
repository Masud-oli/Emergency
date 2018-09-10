<title><?php if(isset($_SESSION['bn'])){echo $viewFireServiceNumberTitle2;}else{echo $viewFireServiceNumberTitle;}?></title>
<?php
if (isset($_SESSION['sucess'])) {?>
<script>

		alertify.success("<span class='glyphicon glyphicon-ok'></span> Congratulations, Your report have been accepted.");

</script>
<?php
unset($_SESSION['sucess']);
}


if (isset($_SESSION['fail'])) {?>
<script>
	
		alertify.error("<span class='glyphicon glyphicon-remove'></span> Fail to insert.");
</script>
<?php
unset($_SESSION['fail']);
}
if (isset($_SESSION['unkown'])) {?>
<script>
	
		alertify.error("<span class='glyphicon glyphicon-remove'></span>Unkonw problem occurs.");
</script>
<?php
unset($_SESSION['unkown']);
}
if (isset($_SESSION['exist'])) {?>
<script>
	
		alertify.error("<span class='glyphicon glyphicon-remove'></span>Your selected photo already exist. If you want upload please rename the photo");
</script>
<?php
unset($_SESSION['exist']);
}
?>

<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","layout/get_fire_service_info.php?q="+str,true);
xmlhttp.send();
}
</script> 

<br />

<div class="container">
       
        <div class="col-md-4 left-part">
		<div class="panel panel-info">
      				<div class="panel-heading" style="text-align:center;"><h3 style="font-size:23px"><?php if(isset($_SESSION['bn'])){echo $fireServiceNumbertitle2;}else{echo $fireServiceNumbertitle;}?></h3></div>
      				<div class="panel-body">
                    <form id="form3" name="f" method="post" action="report_insert/insert_rab_info_reporter.php" onSubmit="return validateForm_rab();"  enctype="multipart/form-data">
                    	
                      <legend><?php if(isset($_SESSION['bn'])){echo $selectDivisionName2;}else{echo $selectDivisionName;}?><span style="color:red">*</span></legend>
                            <div class="form-group">
                                <select class="form-control" id="divisionName" name="divisionName" onchange="callCourses3()">
                                <option value="" selected hidden><?php if(isset($_SESSION['bn'])){echo $selectDivision2;}else{echo $selectDivision;}?></option>
                               	<?php
										include('db_con.php');
						
										$resource=mysql_query("SELECT *FROM fire_service_info_table GROUP BY divisionName");
						
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
                                  </div><legend><?php if(isset($_SESSION['bn'])){echo $selectDistrictName2;}else{echo $selectDistrictName;}?><span style="color:red">*</span></legend>        
                                 <div class="form-group">
                                 <select class="form-control" name="districtName" id="districtName"  onchange="showUser(this.value)">
								 <option class="form-control" value="select" selected hidden><?php if(isset($_SESSION['bn'])){echo $selectDistrict2;}else{echo $selectDistrict;}?></option>						
								</select>
                                </div>
                             
                             
                      </form> 
                   
                    </div>
    			</div>
                

            </div>
            
           <div class="col-md-2 left-part">
        &nbsp;
        </div>
        
        
        <div class="col-md-4 left-part">
        
        </div>
        <div class="col-md-8 left-part">
                        <?php echo"<div id='txtHint'><b><font face='verdana' size='2px' color='navy'>"?><?php if(isset($_SESSION['bn'])){echo $listFireService2;}else{echo $listFireService;}?> <?php echo "</font></b></div>";?>
        </div>
        <div class="col-md-4 left-part">
        
        </div>
		</div>