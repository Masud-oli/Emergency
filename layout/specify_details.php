<title><?php if(isset($_SESSION['bn'])){echo $homeTitle2;}else{echo $homeTitle;}?></title>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=195634037509673";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="features">
		<div class="container">
			<div class="col-md-3">
				<h3 class="title" style="font-size:26px"><?php if(isset($_SESSION['bn'])){echo $aboutRAB2;}else{echo $aboutRAB;}?></h3>
				<p><?php if(isset($_SESSION['bn'])){echo $aboutRabDescription2;}else{echo $aboutRabDescription;}?></p>
			</div>
            <div class="col-md-3">
				<h3 class="title" style="font-size:26px"><?php if(isset($_SESSION['bn'])){echo $aboutPolice2;}else{echo $aboutPolice;}?></h3>
				<p><?php if(isset($_SESSION['bn'])){echo $aboutPoliceDescription2;}else{echo $aboutPoliceDescription;}?></p>			
			</div> 
            <div class="col-md-3 feature-grids">
				<h3 class="title" style="font-size:26px"><?php if(isset($_SESSION['bn'])){echo $aboutFireService2;}else{echo $aboutFireService;}?></h3>
				<p><?php if(isset($_SESSION['bn'])){echo $aboutFireServiceDescription2;}else{echo $aboutFireServiceDescription;}?></p>	
			</div>
            <div class="col-md-3 feature-grids">
				<h3 class="title" style="font-size:26px"><?php if(isset($_SESSION['bn'])){echo $aboutHospital2;}else{echo $aboutHospital;}?></h3>
				<p><div class="fb-page" data-href="https://web.facebook.com/emergencyService247/" data-tabs="timeline" data-width="250" data-height="325" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div></p>
				
			</div>
		</div>
	</div>