
<!DOCTYPE HTML>
<html>
<head>
<title>Admin || panel</title>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- form input validation -->
<script src="js/form_input_validation.js"></script>
<link rel="icon" type="image/icon" href="../images/logo.png" /> 
<link rel="stylesheet" href="alertify/themes/alertify.core.css" />
<link rel="stylesheet" href="alertify/themes/alertify.default.css" id="toggleCSS" />
<link rel="stylesheet" href="css/simplePagination.css" />

<script src="js/jquery.simplePagination.js"></script>
<script src="alertify/lib/alertify.min.js"></script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="action_index.php">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><span style="color:white" class="glyphicon glyphicon-log-out"></span></a>
	        		<ul class="dropdown-menu">
						
						<li class="m_2"><a href="admin_logout.php"><i class="fa fa-lock"></i>Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="action_index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><span class=" glyphicon glyphicon-plus"></span></i> Add Information<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="action_index.php?action=add_report_type">Report Type</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=add_division">Division</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=add_district">District</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=add_upazilla">Upazilla</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=add_rab_info">RAB Info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=add_police_info">Police Info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=add_fire_service_info">Fire-Service Info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=add_hospital_info">Hospital Info</a>
                                </li>
                            </ul>
                           
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-zoom-in"></span></i> Display Information<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="action_index.php?action=view_action_type">Report Type info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=view_division">Division info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=view_district">District info</a>
                                </li>
                                  <li>
                                    <a href="action_index.php?action=view_upazilla">UpaZilla info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=view_rab_info">RAB Info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=view_police_info">Police Info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=view_fire_service_info">Fire-Service Info</a>
                                </li>
                                <li>
                                    <a href="action_index.php?action=view_hospital_info">Hospital Info</a>
                                </li>
                            </ul>
                           
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	
      