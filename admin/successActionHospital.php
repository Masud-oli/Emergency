<?php
	include('db_con.php');
	session_start();
	if(isset($_SESSION['admin_active']))
	{
	
	}
	else
	{
	header("location:index.php");
	}
		if (isset($_GET["id"]))
		{
			$ids=$_GET["id"];
		}

		$sql = mysql_query("SELECT * FROM hospital_info_report_table WHERE id='".$ids."'");
		$row=mysql_fetch_object($sql);
		$id=$row->id;
		$action_title=$row->action_title;
		$divisionName=$row->divisionName;
		$districtName=$row->districtName;
		$upazillaName=$row->upazillaName;
		$hospitalName=$row->hospitalName;
		$placeName=$row->placeName;
		$reporterMobileNo=$row->reporterMobileNo;
		$reportDescription=$row->reportDescription;
		$image=$row->image;
		$hospital_info_title=$row->hospital_info_title;
		$hospital_mobileN=$row->hospital_mobileN;
		$date_time=$row->date_time;
		$UserInfo=$row->UserInfo;
		$status=2;

		 $sqledit="UPDATE hospital_info_report_table SET id='$id',action_title='$action_title',divisionName='$divisionName',districtName='$districtName',upazillaName='$upazillaName',hospitalName='$hospitalName',placeName='$placeName',reporterMobileNo='$reporterMobileNo',reportDescription='$reportDescription',image='$image',hospital_info_title='$hospital_info_title',hospital_mobileNo='$hospital_mobileNo',date_time='$date_time',status='$status',UserInfo='$UserInfo' WHERE id='".$ids."'";
						  
		 $re=mysql_query($sqledit);

				if($re)
					{	
						$_SESSION['confirm'] = "Successfully Inserted" ;
						$goback=$_SERVER['HTTP_REFERER'];
						header("location:$goback");
					}
					else
					{
						$_SESSION['confirmFail'] = "fail Inserted" ;
						$goback=$_SERVER['HTTP_REFERER'];
						header("location:$goback");

					}
			
?>
