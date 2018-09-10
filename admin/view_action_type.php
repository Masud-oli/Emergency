<?php
if(isset($_SESSION['admin_active']))
{
  
}else
{
  header("location:index.php");
}

include('db_con.php'); 

?>



  <div class="container">
  <div class="row">
    <div class="col-md-8">
<?php


$sql = "SELECT * FROM crime_type ORDER BY action_title asc";  

$data1=mysql_query($sql) or die(mysql_error());
	$info=mysql_fetch_array($data1);
	$n=mysql_num_rows($data1);
if($n)
{
?>
</div>
 <div class="col-md-3">
  <input type="text" id="search_text" class="form-control" name="search_text" placeholder="Search"> 
 
 </div>
 <div class="col-md-1">
    
 </div>
  </div>
</div>

  <div id="result">
  <table class="table table-hover">

  <?php
$result = mysql_query($sql);
	?>
        <thead>
          
          <th style="text-align:center">Seril No</th>
          <th style="text-align:center">Action Type</th>
          <th style="text-align:center">Action</th>
        </thead>
        <tbody>
        <?php
			$i=1;
			while($row = mysql_fetch_array($result))
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
                              <a href="delete/delete_action_type.php?id=<?php echo $row[0]?>"><button class="alertify-button alertify-button-ok" id="alertify-ok">OK</button></a></nav>
   
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
                        url:"search_action_type.php",
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
