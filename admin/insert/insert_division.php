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

$sql="INSERT INTO division(divisionName)
			VALUES('$_POST[divisionName]')";

if (mysqli_query($conct,$sql))
    {
		$_SESSION['m'] = "Successfully Inserted" ;
     	header("location:../action_index.php?action=add_division");
	}
else{
	$_SESSION['n'] = "fail Inserted" ;
	header("location:../action_index.php?action=add_division");
	
	}
mysqli_close($conct);
?>