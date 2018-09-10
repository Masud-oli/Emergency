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

	$query="DELETE FROM division WHERE id='".$id."'";
 
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
 