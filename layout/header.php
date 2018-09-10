<?php ob_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- for upload image -->
<link href="css/styles.css" rel="stylesheet" type="text/css"> 
<link href="css/components.min.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/fileinput.min.js"></script>
 <script type="text/javascript" src="js/uploader_bootstrap.js"></script>  
<link rel="icon" type="image/icon" href="images/logo.png" /> 
<link rel="stylesheet" href="admin/alertify/themes/alertify.core.css" />
<link rel="stylesheet" href="admin/alertify/themes/alertify.default.css" id="toggleCSS" />
<script src="admin/alertify/lib/alertify.min.js"></script>
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script src="./js/form_input_validation.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->	
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=195634037509673";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php session_start(); 
include('layout/banglaEnglish.php');
?>
	<div class="header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header navbar-left">
					<h1><a href="index.php"><img style="width:50px" src="images/logo.png" alt=""><?php if(isset($_SESSION['bn'])){echo $em2;}else{echo $em;}?><strong>&nbsp;<b style="font-size:50px; color:#A81212"><?php if(isset($_SESSION['bn'])){echo $ser2;}else{echo $ser;}?></b></strong></a></h1>
				</div>
				<!--navigation-->
	
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="header-right">
                
						<h1 style="color:#FFF">Emergency Service</h1>			
								
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
						<ul class="nav navbar-nav navbar-left">
                        
							<li class="link link--yaku"><a href="index.php"><span><span style="color:#F00" aria-hidden="true"></span><?php if(isset($_SESSION['bn'])){echo $home2;}else{echo $home;}?> <span class="glyphicon glyphicon-home"></span></span></a></li>
                            <li class="link link--yaku"><a href="index.php?action=all_rab_number"><span><span style="color:#F00" aria-hidden="true"></span><?php if(isset($_SESSION['bn'])){echo $rab2;}else{echo $rab;}?> <img style="width:15px;" src="images/rab.png" /></span></a></li>
                 
							<li><a href="index.php?action=all_police_number" class="link link--yaku"><span><span style="color:#F00" aria-hidden="true"></span><?php if(isset($_SESSION['bn'])){echo $police2;}else{echo $police;}?>  <img style="width:15px;" src="images/police.png" /></a></li>
							
							<li><a href="index.php?action=all_fire_service_number" class="link link--yaku"><span><span style="color:#F00" aria-hidden="true"></span><?php if(isset($_SESSION['bn'])){echo $fire_service2;}else{echo $fire_service;}?> <img style="width:15px;" src="images/fireService.png" /></a></li>
                            
							<li><a href="index.php?action=all_hospital_number" class="link link--yaku"><span><span style="color:#F00" aria-hidden="true"></span><?php if(isset($_SESSION['bn'])){echo $hospital2;}else{echo $hospital;}?> <img style="width:15px;" src="images/hospital.png" /></a></li>
                           
                            <li><ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
                	<a href="#" class="link link--yaku" data-toggle="dropdown"><span style="color:#F00" aria-hidden="true"></span><?php if(isset($_SESSION['bn'])){echo $language2;}else{echo $language;}?> <span class="glyphicon glyphicon-chevron-down"></span></a>
	        	<ul class="dropdown-menu">						
						<li class="m_2"><a href="index.php?action=en"><i class="fa fa-lock"></i><?php if(isset($_SESSION['bn'])){echo $English2;}else{echo $English;}?></a></li>
                        <li class="m_2"><a href="index.php?action=bn"><i class="fa fa-lock"></i><?php if(isset($_SESSION['bn'])){echo $Bangla2;}else{echo $Bangla;}?></a></li>		
	        		</ul>
	      		</li>
			</ul></li> <li>
                            <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
                            </li>
						</ul>		
						<div class="clearfix"> </div>
					</div><!--//navigation-->
				</div>
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	