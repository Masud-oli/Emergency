<?php
session_start();
if(isset($_SESSION['admin_active']))
{
    
}else
{
    header("location:index.php");
}?>
<!DOCTYPE HTML>
<html>
<head>
<title>Police Action Print Copy</title>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="icon" type="image/icon" href="../images/logo.png" /> 
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</head>
<body>
<?php
include('db_con.php'); 
$sql="SELECT * FROM police_info_report_table WHERE id='".$_GET['id']."'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
 <div id="printableArea">
<div class="container">
  <div class="panel-group">
   
    <div class="panel panel-success">
      <div class="panel-heading"><h2 style="text-align:center"><span style="font-size:23px" class="glyphicon glyphicon-th"></span> Action Details</h2>                                   

      </div>
      <div class="panel-body">
      
          <div class="row">
    <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <?php
        $image='../report_insert/report_photo/'.$data['image'];    
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
                                        <span class="input-group-addon">Report Title:&nbsp;&nbsp;</span>
                                        <input type="text" readonly class="form-control" id="inputGroupSuccess1" value="<?php echo $data['action_title'] ?>" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                                   </div>
                                </div>

                                  <div class="col-sm-4">
                                    <br>
                                    <div class="form-group has-success has-feedback">
                                  <div class="input-group">
                                  <span class="input-group-addon">Divistion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                  <input type="text" readonly class="form-control" value="<?php echo $data['divisionName'] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                  </div>
                                  </div>
                                  </div>
                                     <div class="col-sm-4"><br>
                                        <div class="form-group has-success has-feedback">
                                      <div class="input-group">
                                      <span class="input-group-addon">District: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                      <input type="text" readonly class="form-control" value="<?php echo $data['districtName'] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                      </div>
                                     </div>
                                   </div>
                                    <div class="col-sm-4"><br>
                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Upazilla: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" readonly class="form-control" value="<?php echo $data['upazillaName'] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                                    </div>
                                  </div>
                                    <div class="col-sm-4"><br>
                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Place: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" readonly class="form-control" value="<?php echo $data['placeName'] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                                    </div>
                                  </div>
                                    <div class="col-sm-4"><br>
                                       <div class="form-group has-success has-feedback">
                                              <div class="input-group">
                                              <span class="input-group-addon">Report Mob.:</span>
                                              <input type="text" readonly class="form-control" value="<?php echo $data['reporterMobileNo'] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                              </div>
                                      </div>
                                    </div>
                                     <div class="col-sm-6"><br>

                                       <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Reporter <br><br>Description: &nbsp;</span>
                                        <textarea class="form-control" rows="4" cols="10" readonly><?php echo $data['reportDescription'] ?></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6"><br>

                                       <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Reporter <br><br>System <br><br> Information: &nbsp;</span>
                                        <textarea class="form-control" rows="4" cols="10" readonly><?php echo $data['UserInfo'] ?></textarea>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-sm-4"><br>

                                       <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Police Title: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" readonly class="form-control" value="<?php echo $data['police_info_title'] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-4"><br>

                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Police Mob.: &nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" readonly class="form-control" value="<?php echo $data['police_mobileNo'] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4"><br>

                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">Submit Date:</span>
                                        <input type="text" readonly class="form-control" value="<?php echo $data['date_time'] ?>" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                        </div>
                 
                                      </div>
                                    </div>
                                </div>

      </div>
                     
  </div>
</div><button type="button" onclick="printDiv('printableArea')" class="btn btn-info pull-right">Print</button>  
    </div>


    
  </div>
</div>



</body>
</html>