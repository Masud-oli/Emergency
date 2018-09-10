<?php
session_start();
if(isset($_SESSION['admin_active']))
{
	
}else
{
	header("location:index.php");
}

$conn=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");

if($conn)
{
	mysql_select_db("emergency_service_db",$conn) or die("Cannot Connect to the database!");
}
	
	if(isset($_POST['save']))
		{
				if(($_FILES['file']['type'] == 'image/gif') || ($_FILES['file']['type']=='image/jpeg') ||($_FILES['file']['type']=='image/png') ||($_FILES['file']['type']=='image/pjpeg') && ($_FILES['file']['size']<200000))
				{
					if($_FILES['file']['error']>0)
					{
						$_SESSION['unkown'] = "fail Inserted" ;
						header("location:../index.php?action=report_to_fire_service");
					}
					else if(file_exists('report_photo/'.$_FILES['file']['name']))
					{
						$_SESSION['exist'] = "fail Inserted" ;
						header("location:../index.php?action=report_to_fire_service");
													
					}
					else if(move_uploaded_file($_FILES['file']['tmp_name'],'report_photo/'.$_FILES['file']['name']))
					{
						    $_SESSION['upazillaName']=$_POST['upazillaName'];
							$sql2="SELECT * FROM fire_service_info_table WHERE upazillaName='".$_SESSION['upazillaName']."'";
							$result=mysql_query($sql2);
							$data=mysql_fetch_array($result);
							$mobileno = $data['mobileNo'];
							$fire_station_title = $data['fire_station_title'];
					
							date_default_timezone_set('Asia/Dhaka');
							$dates=date('d/m/Y (h:i:s a)', time());
						    $part=$_FILES['file']['name'];
							$reportDescription=$_POST['reportDescription'];
							$upazillaName=$_POST['upazillaName'];
							$placeName=$_POST['placeName'];
							$action_title=$_POST['action_title'];
							$mobileNo=$_POST['mobileNo'];
							$message="Action type:".$action_title.",Upazilla:".$upazillaName.",Place:".$placeName.",Reporter Num.:".$mobileNo.",Description: ".$reportDescription;
							$sender = 'Emr.Service';
								function sentOneNumber($sender,$to,$message)
									{
										define('SMS_USER', '@');
										define('SMS_PASS', ''); 
										
										$to=$to;
										$sender=urlencode("$sender");
										$reportDescription=urlencode("$message");
										$sms_user=SMS_USER;
										$sms_user=urlencode("$sms_user");
										$sms_pass=SMS_PASS;
										$sms_pass=urlencode("$sms_pass");
										$sendsms = "http://api.bulksms.icombd.com/api/sendsms/plain?"
										. "user=$sms_user"
										. "&password=$sms_pass"
										. "&sender=$sender"
										. "&SMSText=$reportDescription"
										. "&GSM=$to";
										
										$getsmsstatus=file_get_contents($sendsms);
										return $getsmsstatus;
									}
								
								
						    $sql="INSERT INTO fire_service_info_report_table(action_title,divisionName,districtName,upazillaName,placeName,reporterMobileNo,reportDescription,image,fire_service_info_title,fire_service_mobileNo,date_time,UserInfo)
			VALUES('$_POST[action_title]','$_POST[divisionName]','$_POST[districtName]','$_POST[upazillaName]','$_POST[placeName]','$_POST[mobileNo]','$_POST[reportDescription]','{$part}','$fire_station_title','$mobileno','$dates','$_POST[UserInfo]')";

						if (mysql_query($sql))
							{
								sentOneNumber($sender,$mobileno,$message);
								$_SESSION['sucess'] = "Successfully Inserted" ;
								header("location:../index.php?action=report_to_fire_service");
							}
						else{
							$_SESSION['fail'] = "fail Inserted" ;
							header("location:../index.php?action=report_to_fire_service");
							
							}
					}
										
					
				}
				else
					{
						    $_SESSION['upazillaName']=$_POST['upazillaName'];
							$sql2="SELECT * FROM fire_service_info_table WHERE upazillaName='".$_SESSION['upazillaName']."'";
							$result=mysql_query($sql2);
							$data=mysql_fetch_array($result);
							$mobileno = $data['mobileNo'];
							$fire_station_title = $data['fire_station_title'];

							date_default_timezone_set('Asia/Dhaka');
							$dates=date('d/m/Y (h:i:s a)', time());
							$reportDescription=$_POST['reportDescription'];
							$upazillaName=$_POST['upazillaName'];
							$placeName=$_POST['placeName'];
							$action_title=$_POST['action_title'];
							$mobileNo=$_POST['mobileNo'];
							$message="Action type:".$action_title.",Upazilla:".$upazillaName.",Place:".$placeName.",Reporter Num.:".$mobileNo.",Description: ".$reportDescription;
								$sender = 'Emr.Service';
								function sentOneNumber($sender,$to,$message)
									{
										define('SMS_USER', '@');
										define('SMS_PASS', ''); 
										
										$to=$to;
										$sender=urlencode("$sender");
										$reportDescription=urlencode("$message");
										$sms_user=SMS_USER;
										$sms_user=urlencode("$sms_user");
										$sms_pass=SMS_PASS;
										$sms_pass=urlencode("$sms_pass");
										$sendsms = "http://api.bulksms.icombd.com/api/sendsms/plain?"
										. "user=$sms_user"
										. "&password=$sms_pass"
										. "&sender=$sender"
										. "&SMSText=$reportDescription"
										. "&GSM=$to";
										
										$getsmsstatus=file_get_contents($sendsms);
										return $getsmsstatus;
									}
								
							
							$no_photo="NoPhoto";
					   		$sqls="INSERT INTO fire_service_info_report_table(action_title,divisionName,districtName,upazillaName,placeName,reporterMobileNo,reportDescription,image,fire_service_info_title,fire_service_mobileNo,date_time,UserInfo)
			VALUES('$_POST[action_title]','$_POST[divisionName]','$_POST[districtName]','$_POST[upazillaName]','$_POST[placeName]','$_POST[mobileNo]','$_POST[reportDescription]','{$no_photo}','$fire_station_title','$mobileno','$dates','$_POST[UserInfo]')";
					
					if (mysql_query($sqls))
						{
							sentOneNumber($sender,$mobileno,$message);
							$_SESSION['sucess'] = "Successfully Inserted" ;
							header("location:../index.php?action=report_to_fire_service");
						}
					else{
						$_SESSION['fail'] = "fail Inserted" ;
						header("location:../index.php?action=report_to_fire_service");
						
						}
						
					}
		}
				
	
mysql_close($conn);
?>
