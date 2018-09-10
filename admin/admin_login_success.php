<?php
session_start();

include('db_con.php');
//echo($_SESSION['user']);
$sql="SELECT * FROM admin_emergency_service WHERE UserName='".$_SESSION['admin_active']."'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
$data=mysql_fetch_array($result);
{
header("location:admin_home_page.php");


}

?>