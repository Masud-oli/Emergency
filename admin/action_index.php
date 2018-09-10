<?php
session_start();
if(isset($_SESSION['admin_active']))
{
	
}else
{
	header("location:index.php");
}

if (empty($_GET['action']) && empty($_GET['hospital_info_page']) && empty($_GET['rab_info_page']) && empty($_GET['fire_service_info_page2']) && empty($_GET['police_info_page']) && empty($_GET['upazilla_page']) && empty($_GET['distict_page']) && empty($_GET['rab_page']) && empty($_GET['police_page']) && empty($_GET['fire_service_page']) && empty($_GET['hospital_page']))
{
   include('admin_header.php');
   include('default_view_menu.php');
} 


if (!empty($_GET['rab_page']))
	 {      
         include('admin_header.php');
		 include('rab_view_menu.php');
	     include('view_rab_report_info.php');    
	 }

if (!empty($_GET['police_page']))
	 {      
         include('admin_header.php');
		 include('police_view_menu.php');
	     include('view_police_report_info.php');    
	 }
	 
if (!empty($_GET['fire_service_page']))
	 {      
         include('admin_header.php');
		 include('fire_service_view_menu.php');
	     include('view_fire_service_report_info.php');    
	 }
if (!empty($_GET['hospital_page']))
	 {      
         include('admin_header.php');
		 include('hospital_view_menu.php');
	     include('view_hospital_report_info.php');    
	 }
if (!empty($_GET['distict_page']))
	 {      
         include('admin_header.php');
		 include('default_view_menu.php');
	     include('view_district.php');    
	 }
if (!empty($_GET['upazilla_page']))
	 {      
         include('admin_header.php');
		 include('default_view_menu.php');
	     include('view_upazilla.php');    
	 }
	 
if (!empty($_GET['rab_info_page']))
	 {      
         include('admin_header.php');
		 include('default_view_menu.php');
	     include('view_rab_info.php');    
	 }
if (!empty($_GET['police_info_page']))
	 {      
         include('admin_header.php');
		 include('default_view_menu.php');
	     include('view_police_info.php');    
	 }
if (!empty($_GET['fire_service_info_page2']))
	 {      
         include('admin_header.php');
		 include('default_view_menu.php');
	     include('view_fire_service_info.php');    
	 }
if (!empty($_GET['hospital_info_page']))
	 {      
         include('admin_header.php');
		 include('default_view_menu.php');
	     include('view_hospital_info.php');    
	 }

//GO TO Specific Page depends on URL
	if (!empty($_GET['action']))
	 {
		switch ($_GET['action']) {
           
		        case 'view_rab_report_info' :
		            include('admin_header.php');
		        	include('rab_view_menu.php');
				    include('view_rab_report_info.php');
					break;
				 case 'view_fire_service_report_info' :
		            include('admin_header.php');
		        	include('fire_service_view_menu.php');
				    include('view_fire_service_report_info.php');
					break;
					
				case 'view_police_report_info' :
		            include('admin_header.php');
		        	include('police_view_menu.php');
				    include('view_police_report_info.php');
					break;
				case 'view_hospital_report_info' :
		            include('admin_header.php');
		        	include('hospital_view_menu.php');
				    include('view_hospital_report_info.php');
					break;
					
				case 'view_action_type' :
		            include('admin_header.php');
					include('default_view_menu.php');
		        	include('view_action_type.php');
					break;
					
				case 'view_division' :
		            include('admin_header.php');
					include('default_view_menu.php');
		        	include('view_division.php');
					break;
					
				case 'view_district' :
		            include('admin_header.php');
					include('default_view_menu.php');
		        	include('view_district.php');
					break;
				case 'view_upazilla' :
		            include('admin_header.php');
					include('default_view_menu.php');
		        	include('view_upazilla.php');
					break;
				case 'view_rab_info' :
		            include('admin_header.php');
					include('default_view_menu.php');
		        	include('view_rab_info.php');
					break;
				case 'view_police_info' :
		            include('admin_header.php');
					include('default_view_menu.php');
		        	include('view_police_info.php');
					break;
				case 'view_hospital_info' :
		            include('admin_header.php');
					include('default_view_menu.php');
		        	include('view_hospital_info.php');
					break;
				case 'view_fire_service_info' :
		            include('admin_header.php');
					include('default_view_menu.php');
		        	include('view_fire_service_info.php');
					break;

				case 'add_report_type' :
				    include('admin_header.php');
				    include('default_view_menu.php');
				    include('add_report_section.php');
					break;
				case 'add_division' :
				    include('admin_header.php');
				    include('default_view_menu.php');
				    include('add_division.php');
					break;
				case 'add_district' :
				    include('admin_header.php');
				    include('default_view_menu.php');
				    include('add_district.php');
					break;
				case 'add_upazilla' :
				    include('admin_header.php');
				    include('default_view_menu.php');
				    include('add_upazilla.php');
					break;
				case 'add_rab_info' :
				    include('admin_header.php');
				    include('default_view_menu.php');
				    include('add_rab_info.php');
					break;
				case 'add_fire_service_info' :
				    include('admin_header.php');
				    include('default_view_menu.php');
				    include('add_fire_service_info.php');
					break;
				case 'add_police_info' :
				    include('admin_header.php');
				    include('default_view_menu.php');
				    include('add_police_info.php');
					break;
				case 'add_hospital_info' :
				    include('admin_header.php');
				    include('default_view_menu.php');
				    include('add_hospital_info.php');
					break;
					       

				default:
				include('footer.php');
				break; 
        }
	}
	include('footer.php');

    
?>