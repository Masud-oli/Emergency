
<?php
$output='';
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="emergency_service_db"; 
$connect=mysqli_connect("$host", "$username", "$password","$db_name")or die("Can't Connect Database");

$sql="SELECT * FROM division WHERE  divisionName LIKE '%".$_POST["search"]."%'";
$result=mysqli_query($connect,$sql);
$n=mysqli_num_rows($result);
if($n)
{
  


?>

  <table class="table table-hover">
         <thead>
          
          <th style="text-align:center">Seril No</th>
         <th style="text-align:center">Division Name</th>
          <th style="text-align:center">Action</th>
        </thead>
        <tbody>
        <?php
			$i=1;
			while($row = mysqli_fetch_array($result))
 	 			{
		 ?>
            <tr>
               <td style="text-align:center; padding-top: 45px"><?php echo $i ?></td>
              <td style="text-align:center; padding-top: 45px"><?php echo $row[1] ?></td>
              <td style="text-align:center;  padding-top: 45px">
               <?php
			   	$i++;
			   ?>
              
               <a title="Delete" data-toggle="modal" class="primary" data-target="#noticeModel3<?php echo $row['id']; ?>" style="cursor: pointer;"><i class='glyphicon glyphicon-trash'></i></a>
            
              </td>
            </tr>

          </tbody>
           
              
                <div class="modal fade" id="noticeModel3<?php echo $row['id'];?>" role="dialog">
                  <div class="alertify">            
                      <!-- Modal content-->
                          
                      <div class="modal-content">
                        <div class="modal-body messages">
                  
                              <p style="text-align:center; color:black" class="alertify-message">Are you sure want to delete?</p>
                              <nav class="alertify-buttons" style="text-align:center">
                              <button class="alertify-button alertify-button-cancel" data-dismiss="modal">Cancel</button>
                              <a href="delete/deleteDivision.php?id=<?php echo $row[0]?>"><button class="alertify-button alertify-button-ok" id="alertify-ok">OK</button></a></nav>
   
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
    
