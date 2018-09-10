<?php
session_start();
include('../db_con.php');
if(isset($_SESSION['admin_active']))
{
	
}else
{
	header("location:index.php");
}
  
	$id=$_GET["id"];

	 $selectPhoto=mysql_query("SELECT image FROM fire_service_info_report_table WHERE id='".$id."'");
	 $row=mysql_fetch_array($selectPhoto);

	 @unlink("../../report_insert/report_photo/".$row['image']);
	$query="DELETE FROM fire_service_info_report_table WHERE id='".$id."'";
 
 	$re=mysql_query($query);

				if($re)
					{
						$_SESSION['m'] = "Successfully Inserted" ;
						$goback=$_SERVER['HTTP_REFERER'];
						header("location:$goback");
					}
					else
					{
						$_SESSION['n'] = "fail Inserted" ;
						$goback=$_SERVER['HTTP_REFERER'];
						header("location:$goback");

					}
	 ?>
 