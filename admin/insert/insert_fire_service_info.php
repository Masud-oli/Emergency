<?php
session_start();
if(isset($_SESSION['admin_active']))
{
	
}else
{
	header("location:index.php");
}
$conct=mysqli_connect("localhost","root","","emergency_service_db");
if (mysqli_connect_errno())
	{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

$sql="INSERT INTO fire_service_info_table(divisionName,districtName,upazillaName,fire_station_title,mobileNo)
			VALUES('$_POST[divisionName]','$_POST[districtName]','$_POST[upazillaName]','$_POST[fire_station_title]','$_POST[mobileNo]')";

if (mysqli_query($conct,$sql))
    {
		$_SESSION['m'] = "Successfully Inserted" ;
     	header("location:../action_index.php?action=add_fire_service_info");
	}
else{
	$_SESSION['n'] = "fail Inserted" ;
	header("location:../action_index.php?action=add_fire_service_info");
	
	}
mysqli_close($conct);
?>