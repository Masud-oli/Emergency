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

$sql="INSERT INTO crime_type(action_title)
			VALUES('$_POST[report_title]')";

if (mysqli_query($conct,$sql))
    {
		$_SESSION['m'] = "Successfully Inserted" ;
     	$goback=$_SERVER['HTTP_REFERER'];
		header("location:$goback");
	}
else{
	$_SESSION['n'] = "fail Inserted" ;
	$goback=$_SERVER['HTTP_REFERER'];
	header("location:$goback");
	
	}
mysqli_close($conct);
?>