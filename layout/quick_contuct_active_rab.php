 <div class="services">
		<div class="container">
			<h3 class="title" style="color:#A81212"><?php if(isset($_SESSION['bn'])){echo $quick_contact_title2;}else{echo $quick_contact_title;}?></h3>
            <div class="services-info">
				<div class="servc-icon">
					<a href="index.php?action=report_to_rab" title="RAB Contact Form" class="diamond2"><i class="glyphicon glyphicon-" aria-hidden="true"><img class="img2" src="images/rab.png" /></i><br />
					<p class="servc-text2"><br /> &nbsp;&nbsp;<?php if(isset($_SESSION['bn'])){echo $rab2;}else{echo $rab;}?> </p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="index.php?action=report_to_police" title="Police Contact Form" class="diamond"><span class="glyphicon glyphicon-" aria-hidden="true"><img class="img1" src="images/police.png" /></span>
					
					</a>
				</div>
				<div class="servc-icon">
					<a href="index.php?action=report_to_fire_service" title="Fire Service Contact Form" class="diamond"><span class="glyphicon glyphicon-" aria-hidden="true"><img class="img1" src="images/fireService.png" /></span>
					
					</a>
				</div>
				<div class="servc-icon">
					<a href="index.php?action=report_to_hospital" title="Hospital Contact Form" class="diamond"><span class="glyphicon glyphicon-" aria-hidden="true"><img class="img1" src="images/hospital.png" /></span>
					
					</a>
				</div>
		
			</div>
		</div>

	</div>
    
     
