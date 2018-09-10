<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Page</title>
    <link rel="icon" type="image/icon" href="../images/logo.png" /> 
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleLogin.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
<?php
session_start();
?>
	  <div id="login-page">
	  	<div class="container">
	  	      <form id="login" action="admin_login_action.php" method="POST" class="form-login">
		        <h2 class="form-login-heading">sign in now</h2>
                <div style="text-align:center;color:red"><h4><blink><?php
								if(isset($_SESSION['wrong']))
									{
									echo "Wrong Username or Password";
									unset($_SESSION['wrong']);	
									}
								?></blink></h4></div>
		        <div class="login-wrap">
		            <input type="text" title="Enter email or user name" class="form-control" placeholder="User ID" autofocus name="UserName" value="" required >
		            <br>
		            <input type="password" title="Enter password" class="form-control" placeholder="Password" name="Password" value="" required >
		            <label class="checkbox"> 
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#"> Forgot Password?</a>
		                </span>
		            </label><br>
		            <button class="btn btn-theme btn-block" type="submit">SIGN IN</button>
		            <hr class="">

		        </div>

		      </form>	  	
	  	
	  	</div>
	  </div>
  </body>
</html>