
<html>
<head>


<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- form input validation -->
<script src="js/form_input_validation.js"></script>
<link rel="icon" type="image/icon" href="../images/logo.png" /> 
<link rel="stylesheet" href="alertify/themes/alertify.core.css" />
<link rel="stylesheet" href="alertify/themes/alertify.default.css" id="toggleCSS" />
<link rel="stylesheet" href="css/simplePagination.css" />

<script src="js/jquery.simplePagination.js"></script>
<script src="alertify/lib/alertify.min.js"></script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</head>
<body>
<?php
$output='';
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="emergency_service_db"; 
$connect=mysqli_connect("$host", "$username", "$password","$db_name")or die("Can't Connect Database");

$sql="SELECT * FROM rab_info_report_table WHERE reporterMobileNo LIKE '%".$_POST["search"]."%' OR upazillaName LIKE '%".$_POST["search"]."%'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0)
{
	?>
<table class="table table-hover">
 <thead>
          
          <th style="text-align:center">Report Title</th>
          <th style="text-align:center">District</th>
          <th style="text-align:center">Reporter No.</th>
          <th  colspan="2" style="text-align:center">Action</th>
        </thead>
        <tbody>
<?php
	while($row = mysqli_fetch_array($result))
 	 			{
			?>
            <tr>
               
              <td style="text-align:center; padding-top: 45px"><?php echo $row[1] ?></td>
              <td style="text-align:center;  padding-top: 45px"><?php echo $row[3] ?></td>
              <td style="text-align:center;  padding-top: 45px"><?php echo $row[6] ?></td>   
              <td style="text-align:center;  padding-top: 45px">
                <?php if($row[12]==2) 
                 { 
                  echo "<a class='btn btn-primary'><i class='glyphicon glyphicon-ok'></i></a>";
                  
                 }
                 else 
                  {
                     echo "<a class='btn btn-primary' href='successAction.php?id=".$row[0]."'>Confirm</a>";
                  }
                  ?>

              <a data-toggle="modal" class="btn btn-primary" data-target="#noticeModel<?php echo $row['id']; ?>" style="cursor: pointer;"><span class="glyphicon glyphicon-zoom-in"></span></a>
             <?php
              echo "<a href='delete/delete_RAB_info.php?id=".$row[0]."' title='Delete' class='btn btn-danger confirm' role='button'> <i class='glyphicon glyphicon-trash'></i></a>";
              ?>
              </td>
            </tr>

          </tbody>
          
           <div class="modal fade" id="noticeModel<?php echo $row['id'];?>" role="dialog">
                  <div class="modal-dialog">            
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header sm-primary">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h2 style="text-align:center"><span style="font-size:23px" class="glyphicon glyphicon-th"></span>RAB Details Information</h2>                                   
                        </div>
                              <div class="modal-body messages">
                                 <?php
                                  $image='../report_insert/report_photo/'.$row[8];    
                                  ?>
								  <img class="img-responsive" alt="No Photo Attachment" style="width:100%; height:300px" src="<?php echo $image ?>">
                  <br>
                  <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">Report Title&nbsp;&nbsp;</span>
                  <input type="text" readonly class="form-control" id="inputGroupSuccess1" value="<?php echo $row[1] ?>" aria-describedby="inputGroupSuccess1Status">
                  </div>
                  <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">Divistion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" readonly class="form-control" value="<?php echo $row[2] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                  </div>
                  <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">District &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" readonly class="form-control" value="<?php echo $row[3] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                  </div>
                  <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">Upazilla &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" readonly class="form-control" value="<?php echo $row[4] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                  </div>
                  <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">Place &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" readonly class="form-control" value="<?php echo $row[5] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                  </div>
                   <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">Report Mob.</span>
                  <input type="text" readonly class="form-control" value="<?php echo $row[6] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                  </div>
                   <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">Description &nbsp;</span>
                  <textarea class="form-control" rows="4" cols="10" readonly><?php echo $row[7] ?></textarea>
                  </div>
                   <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">RAB Title &nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" readonly class="form-control" value="<?php echo $row[9] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                  </div>
                   <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">RAB Mob. &nbsp;&nbsp;&nbsp;</span>
                  <input type="text" readonly class="form-control" value="<?php echo $row[10] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                  </div>
                   <div class="form-group has-success has-feedback">
                  <div class="input-group">
                  <span class="input-group-addon">Submit Date</span>
                  <input type="text" readonly class="form-control" value="<?php echo $row[11] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                  </div>
 
</div>
                           
                          <div class="modal-footer">                      
                            <button type="button" class="btn btn-default" data-dismiss="modal">close</button> 
                          </div>
                        </div>
                
                  </div>
              </div> <!-- End of modal -->
          <?php
          }
	}
else
{
  echo 'Data Not Fount';
}



?>


</body>
</html>