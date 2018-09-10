<?php
if(isset($_SESSION['admin_active']))
{
  
}else
{
  header("location:index.php");
}

include('db_con.php'); 
$limit = 10;  
$sql = "SELECT COUNT(id) FROM hospital_info_table";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0];  
$temp=$total_records; 
$total_pages = ceil($total_records / $limit);  
 
if (isset($_GET["hospital_info_page"]))
{
  $cPage=$_GET["hospital_info_page"];
   $one=10*$cPage-9;
    $two=$one+9;
   if($total_records<$two)
   {
      $two=$total_records;
      
   }
}else
{
  $cPage=1;
  $one=1;
  $two=10;
}
?>



  <div class="container">
  <div class="row">
    <div class="col-md-8">
<?php
if (isset($_GET["hospital_info_page"])) { $page  = $_GET["hospital_info_page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM  hospital_info_table ORDER BY divisionName DESC LIMIT $start_from, $limit";  

$data1=mysql_query($sql) or die(mysql_error());
	$info=mysql_fetch_array($data1);
	$n=mysql_num_rows($data1);
if($n)
{
  $pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='action_index.php?hospital_info_page=".$i."'>".$i."</a></li>";  
};  
  echo $pagLink . "</ul></nav>"; 


?></div>
 <div class="col-md-3">
 
 
 </div>
 <div class="col-md-1">
    
 </div>
  </div>
</div>

  <div style="float:right">Page No-<?php echo $cPage; ?>, showing <?php echo $one; ?> to <?php if($temp<=10){ echo $temp;} else { echo $two;} ?> entries(Total-<?php echo $total_records; ?>)</div>
  <div id="result">
  <table class="table table-hover">

  <?php
$result = mysql_query($sql);
	?>
        <thead>
          
          <th style="text-align:center">Seril No</th>
          <th style="text-align:center">Division Name</th>
           <th style="text-align:center">District Name</th>
            <th style="text-align:center">UpaZilla Name</th>
             <th style="text-align:center">Hospital Title</th>
              <th style="text-align:center">Mobile No</th>
          <th style="text-align:center">Action</th>
        </thead>
        <tbody>
        <?php
			$i=$one;
			while($row = mysql_fetch_array($result))
 	 			{
		 ?>
            <tr>
               <td style="text-align:center; padding-top: 45px"><?php echo $i ?></td>
              <td style="text-align:center; padding-top: 45px"><?php echo $row[1] ?></td>
               <td style="text-align:center; padding-top: 45px"><?php echo $row[2] ?></td>
                <td style="text-align:center; padding-top: 45px"><?php echo $row[3] ?></td>
                 <td style="text-align:center; padding-top: 45px"><?php echo $row[4] ?></td>
                  <td style="text-align:center; padding-top: 45px"><?php echo $row[5] ?></td>
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
                              <a href="delete/delete_hospital_info2.php?id=<?php echo $row[0]?>"><button class="alertify-button alertify-button-ok" id="alertify-ok">OK</button></a></nav>
   
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
		hrefTextPrefix : 'action_index.php?hospital_info_page='
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
                        url:"search_rab_info.php",
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
