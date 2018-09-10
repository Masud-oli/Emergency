
<?php
$output='';
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="emergency_service_db"; 
$connect=mysqli_connect("$host", "$username", "$password","$db_name")or die("Can't Connect Database");

$sql="SELECT * FROM police_info_report_table WHERE reporterMobileNo LIKE '%".$_POST["search"]."%' OR upazillaName LIKE '%".$_POST["search"]."%' OR action_title LIKE '%".$_POST["search"]."%' OR districtName LIKE '%".$_POST["search"]."%' OR divisionName LIKE '%".$_POST["search"]."%' OR date_time LIKE '%".$_POST["search"]."%'";
$result=mysqli_query($connect,$sql);
$n=mysqli_num_rows($result);
if($n)
{
  


?>

  <table class="table table-hover">

  <?php

	?>
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
                 echo "<a title='Already confirm your action' class=''><i class='glyphicon glyphicon-ok'></i></a>";
                  
                 }
                 else 
                 {?>
                    <a title="Click here for confirm your action" data-toggle="modal" class="primary" data-target="#noticeModelConfirm<?php echo $row['id']; ?>" style="cursor: pointer; text-decoration:none">Confirm</a>
                    
                    <?php
                  }
                  ?>
              <?php
              echo "<a target='_blank'  href='print_action_police.php?id=".$row[0]."' title='Print' role='button'> <i class='glyphicon glyphicon-print'></i></a>";
              ?>
              <a title="View details information" data-toggle="modal" class="primary" data-target="#noticeModel<?php echo $row['id']; ?>" style="cursor: pointer;"><span class="glyphicon glyphicon-zoom-in"></span></a>
            <a title="Delete" data-toggle="modal" class="primary" data-target="#noticeModel3<?php echo $row['id']; ?>" style="cursor: pointer;"><i class='glyphicon glyphicon-trash'></i></a>
              
              </td>
            </tr>

          </tbody>
           <div class="modal fade" id="noticeModel<?php echo $row['id'];?>" role="dialog">
                  <div class="modal-dialog modal-lg">            
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header sm-primary">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h2 style="text-align:center"><span style="font-size:23px" class="glyphicon glyphicon-th"></span> Police Details Information</h2>                                   
                        </div>
                              <div class="modal-body messages">

                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                  <?php
                                  $image='../report_insert/report_photo/'.$row[8];    
                                  ?>
                                     <img class="img-responsive" alt="No Photo Attachment" style="width:100%; height:300px" src="<?php echo $image ?>">

                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                                
                                <div class="row">

                                   <div class="col-sm-4">
                                        <br>
                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Report Title&nbsp;&nbsp;</span>
                                        <input type="text" readonly class="form-control" id="inputGroupSuccess1" value="<?php echo $row[1] ?>" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                                   </div>
                                </div>

                                  <div class="col-sm-4">
                                    <br>
                                    <div class="form-group has-success has-feedback">
                                  <div class="input-group">
                                  <span class="input-group-addon">Divistion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                  <input type="text" readonly class="form-control" value="<?php echo $row[2] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                  </div>
                                  </div>
                                  </div>
                                     <div class="col-sm-4"><br>
                                        <div class="form-group has-success has-feedback">
                                      <div class="input-group">
                                      <span class="input-group-addon">District &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                      <input type="text" readonly class="form-control" value="<?php echo $row[3] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                      </div>
                                     </div>
                                   </div>
                                    <div class="col-sm-4"><br>
                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Upazilla &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" readonly class="form-control" value="<?php echo $row[4] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                                    </div>
                                  </div>
                                    <div class="col-sm-4"><br>
                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Place &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" readonly class="form-control" value="<?php echo $row[5] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                                    </div>
                                  </div>
                                    <div class="col-sm-4"><br>
                                       <div class="form-group has-success has-feedback">
                                              <div class="input-group">
                                              <span class="input-group-addon">Report Mob.</span>
                                              <input type="text" readonly class="form-control" value="<?php echo $row[6] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                              </div>
                                      </div>
                                    </div>
                                        <div class="col-sm-4"><br>

                                       <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Police Title &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                         <textarea class="form-control" rows="2" cols="6" ><?php echo $row[9] ?></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-4"><br>

                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Police Mob. &nbsp;&nbsp;&nbsp;</span>
                                        <textarea class="form-control" rows="2" cols="6" ><?php echo $row[10] ?></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4"><br>

                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Submit Date</span>
                                        <textarea class="form-control" rows="2" cols="6" ><?php echo $row[11] ?></textarea>
                                        </div>
                 
                                      </div>
                                    </div>
                                     <div class="col-sm-6"><br>

                                       <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Reporter <br><br>Description &nbsp;</span>
                                        <textarea class="form-control" rows="4" cols="10" readonly><?php echo $row[7] ?></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6"><br>

                                       <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Reporter <br><br>System <br><br> Information &nbsp;</span>
                                        <textarea class="form-control" rows="4" cols="10" readonly><?php echo $row[13] ?></textarea>
                                        </div>
                                      </div>
                                    </div>

                                
                                </div>
               
                
                  
                  
                  
                  
                  
                  
                           
                          <div class="modal-footer">                      
                            <button type="button" class="btn btn-default" data-dismiss="modal">close</button> 
                          </div>
                        </div>
                
                  </div>
              </div> <!-- End of modal -->
              </div>
              
              
                <div class="modal fade" id="noticeModel3<?php echo $row['id'];?>" role="dialog">
                  <div class="alertify">            
                      <!-- Modal content-->
                          
                      <div class="modal-content">
                        <div class="modal-body messages">
                  
                              <p style="text-align:center; color:black" class="alertify-message">Are you sure want to delete?</p>
                              <nav class="alertify-buttons" style="text-align:center">
                              <button class="alertify-button alertify-button-cancel" data-dismiss="modal">Cancel</button>
                              <a href="delete/delete_police_info.php?id=<?php echo $row[0]?>"><button class="alertify-button alertify-button-ok" id="alertify-ok">OK</button></a></nav>
   
                           </div>
                              
              </div> <!-- End of modal -->
              </div>
              </div>
              
                   <div class="modal fade" id="noticeModelConfirm<?php echo $row['id'];?>" role="dialog">
                  <div class="alertify">            
                      <!-- Modal content-->
                          
                      <div class="modal-content">
                        <div class="modal-body messages">
                  
                              <p style="text-align:center; color:black" class="alertify-message">Are you sure want to confirm this action?</p>
                              <nav class="alertify-buttons" style="text-align:center">
                              <button class="alertify-button alertify-button-cancel" data-dismiss="modal">Cancel</button>
                              <a href="successActionPolice.php?id=<?php echo $row[0]?>"><button class="alertify-button alertify-button-ok" id="alertify-ok">OK</button></a></nav>
   
                           </div>
                              
              </div> <!-- End of modal -->
              </div>
              </div>
          <?php
          }
	}
	else
	{  ?>
<br>
    	<div class="container">
  <div class="row">
  	 <div class="col-md-5">
   <div class="alert alert-warning alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>There are no search data</strong>
  </div>
  </div>
</div>
<?php		
	} ?>
      </table>

</div> </div>
    </div>
    
