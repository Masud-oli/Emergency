<?php
if (empty($_GET['action']))
{
   include('layout/header.php');
   include('layout/quick_contuct.php');
   include('layout/specify_details.php');
} 

if (!empty($_GET['action']))
{
    include('layout/header.php');
} 

if (!empty($_GET['action']))
	 {
		switch ($_GET['action']) {
		
           
		        case 'report_to_rab' :
				    include('layout/quick_contuct_active_rab.php');
					break;
				case 'report_to_police' :
				   include('layout/quick_contuct_active_police.php');
					break;
				case 'report_to_hospital' :
				   include('layout/quick_contuct_active_hospital.php');
					break;
				case 'report_to_fire_service' :
				   include('layout/quick_contuct_active_fire_service.php');
					break;
				

				
        }
	}
//GO TO Specific Page depends on URL
	if (!empty($_GET['action']))
	 {
		switch ($_GET['action']) {
		
           
		        case 'report_to_rab' :
				    include('layout/report_to_rab.php');
					break;
				case 'report_to_police' :
				    include('layout/report_to_police.php');
					break;
				case 'report_to_hospital' :
				    include('layout/report_to_hospital.php');
					break;
				case 'report_to_fire_service' :
				    include('layout/report_to_fire_service.php');
					break;
			    case 'all_rab_number' :
				   include('layout/all_rab_number.php');
					break;
				case 'all_police_number' :
				   include('layout/all_police_number.php');
					break;
			    case 'all_fire_service_number' :
				   include('layout/all_fire_service_number.php');
					break;
				case 'all_hospital_number' :
				   include('layout/all_hospital_number.php');
					break;
				case 'en' :
				   include('layout/en.php');
					break;
				case 'bn' :
				   include('layout/bn.php');
					break;
						
				default:
				include('layout/footer.php');
				break; 
        }
	}
	include('layout/footer.php');

    
?>