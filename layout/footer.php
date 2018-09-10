
	<!--//footer-->
	<!--copy-right-->
	<div class="copy-right">
		<div class="container">
			
	
			<p>&copy; 2017 All rights reserved | Design by Zakir, Kader, Khairul, Repon</a></p>	
		</div>
	</div>
	<!--//copy-right-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
        
<script>

    $(".confirm").on( 'click', function () 
	{
		if (confirm("Are you sure you want to sent information?") == false ) {
			alertify.error("You've clicked Cancel");
      		return false ;
   		}
		else
		{
      		return true ;
   		}
		        
    });
</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
<?php ob_end_flush();
?>
</body>
</html>