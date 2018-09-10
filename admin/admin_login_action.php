<?php
session_start();
include('db_con.php');
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$UserName = stripslashes($UserName);
$Password = stripslashes($Password);
$UserName = mysql_real_escape_string($UserName);
$Password = mysql_real_escape_string($Password);
$sql="SELECT * FROM admin_emergency_service WHERE UserName='$UserName' AND Password='$Password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


if($count==1){
$data=mysql_fetch_array($result);
$_SESSION['admin_active']=$data['UserName'];
//echo($_SESSION['user']);
header("location:action_index.php");
}
else{
	$_SESSION['wrong']="wrong";
	header("location:index.php");
	}
?>
