<?php
if(isset($_SESSION['admin_active']))
{
  
}else
{
  header("location:index.php");
}

include('db_con.php'); 
$limit = 6;  
$sql = "SELECT COUNT(id) FROM rab_info_report_table";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0];  
$temp=$total_records; 
$total_pages = ceil($total_records / $limit);  
 
if (isset($_GET["rab_page"]))
{
  $cPage=$_GET["rab_page"];
   $one=6*$cPage-5;
    $two=$one+5;
   if($total_records<$two)
   {
      $two=$total_records;
      
   }
}else
{
  $cPage=1;
  $one=1;
  $two=6;
}
?>



  <div class="container">
  <div class="row">
    <div class="col-md-8">
<?php
if (isset($_GET["rab_page"])) { $page  = $_GET["rab_page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM rab_info_report_table ORDER BY id DESC LIMIT $start_from, $limit";  

$data1=mysql_query($sql) or die(mysql_error());
	$info=mysql_fetch_array($data1);
	$n=mysql_num_rows($data1);
if($n)
{
  $pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='action_index.php?rab_page=".$i."'>".$i."</a></li>";  
};  
  echo $pagLink . "</ul></nav>"; 


?></div>
 <div class="col-md-3">
  <input type="text" id="search_text" class="form-control" name="search_text" placeholder="Search"> 
 
 </div>
 <div class="col-md-1">
    
 </div>
  </div>
</div>

  <div style="float:right">Page No-<?php echo $cPage; ?>, showing <?php echo $one; ?> to <?php if($temp<=6){ echo $temp;} else { echo $two;} ?> entries(Total-<?php echo $total_records; ?>)</div>
  <div id="result">
  <table class="table table-hover">

  <?php
$result = mysql_query($sql);
	?>
        <thead>
          
          <th style="text-align:center">Report Title</th>
          <th style="text-align:center">District</th>
          <th style="text-align:center">Reporter No.</th>
          <th  colspan="2" style="text-align:center">Action</th>
        </thead>
        <tbody>
        <?php
			while($row = mysql_fetch_array($result))
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
              echo "<a target='_blank'  href='print_action_rab.php?id=".$row[0]."' title='Print' role='button'> <i class='glyphicon glyphicon-print'></i></a>";
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
                      <div id="printArea">
                        <div class="modal-header sm-primary">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h2 style="text-align:center"><span style="font-size:23px" class="glyphicon glyphicon-th"></span> Action Details</h2>                                   
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
                                        <span class="input-group-addon">RAB Title &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <textarea class="form-control" rows="2" cols="6" ><?php echo $row[9] ?></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-4"><br>

                                        <div class="form-group has-success has-feedback">
                                        <div class="input-group">
                                        <span class="input-group-addon">RAB Mob. &nbsp;&nbsp;&nbsp;</span>
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
              </div>
              
              
                <div class="modal fade" id="noticeModel3<?php echo $row['id'];?>" role="dialog">
                  <div class="alertify">            
                      <!-- Modal content-->
                          
                      <div class="modal-content">
                        <div class="modal-body messages">
                  
                              <p style="text-align:center; color:black" class="alertify-message">Are you sure want to delete?</p>
                              <nav class="alertify-buttons" style="text-align:center">
                              <button class="alertify-button alertify-button-cancel" data-dismiss="modal">Cancel</button>
                              <a href="delete/delete_RAB_info.php?id=<?php echo $row[0]?>"><button class="alertify-button alertify-button-ok" id="alertify-ok">OK</button></a></nav>
   
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
                              <a href="successAction.php?id=<?php echo $row[0]?>"><button class="alertify-button alertify-button-ok" id="alertify-ok">OK</button></a></nav>
   
                           </div>
                              
              </div> <!-- End of modal -->
              </div>
              </div>
          <?php
          }
	}
	else
	{  ?>
    	<script>
			alertify.alert("<b><img src='images/warning.png' width='22' height='22'>There are no information in database.</b>");
		</script>
<?php		
	} ?>
      </table>

</div>

            <div class="clearfix"> </div>

<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'action_index.php?rab_page='
    });
	});
</script>	

<?php
if (isset($_SESSION['m'])) {?>
<script>

    alertify.success("<span class='glyphicon glyphicon-ok'></span> Information successfully delete.");

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

<?php
if (isset($_SESSION['confirm'])) {?>
<script>

    alertify.success("<span class='glyphicon glyphicon-ok'></span> You confirm this action.");

</script>
<?php
unset($_SESSION['confirm']);
}
?>

<?php
if (isset($_SESSION['confirmFail'])) {?>
<script>
  
    alertify.success("<span class='glyphicon glyphicon-remove'></span> Fail to confirm this action.");
</script>
<?php
unset($_SESSION['confirmFail']);
}
?>
<script>
    $(document).ready(function(){
        $('#search_text').keyup(function(){
                var txt=$(this).val();
                if(txt != '')
                {
                      $.ajax({
                        url:"fetch.php",
                        method:"post",
                        data:{search:txt},
                        dataType:"text",
                        success:function(data)
                        {
                            $('#result').html(data);
                        }
                    });

                }else
                {
                    $('#result').html('');
                   
                }
 
        });
    });

</script>
