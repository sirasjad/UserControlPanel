<?php isLoggedin(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>UCP - <?php echo $name; ?></title>
	
	<!-- CORE CSS -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
	<!-- PLUGINS -->
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet">

	<!-- THEME CSS -->
	<link href="assets/css/theme.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
</head>

<body class="fixed-header">
	<header>
		<div class="container">
			<span class="bar hide"></span>
			<a href="/?page=login" class="logo"><img src="assets/img/logo.png" height="40" width="40"></a>
			
			<nav>
				<div class="nav-control">
					<ul>
						<li><a href="https://forum.pr-rp.com/showthread.php?t=6" target="_blank">Server IP</a></li>
						<li><a href="https://forum.pr-rp.com/showthread.php?t=7473" target="_blank">Staff Team</a></li>
						<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=91" target="_blank">Server Rules</a></li>
						<li><a href="https://forum.pr-rp.com/showthread.php?t=7" target="_blank">Subscriptions</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	
	<div id="wrapper">
		<section class="hero hero-panel" style="background-image: url(assets/img/cover/cover-login.png);">
			<div class="container relative">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
						<div class="panel panel-default panel-login">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-user"></i>Account Login</h3>
							</div>
							
							<div class="animated fadeIn">
								<div class="panel-body">							
									<form name="login">
										<div id="ajax"></div>
											<div class='form-group input-icon-left'>
												<i class='fa fa-user'></i>
												<input type='email' class='form-control' name='email' id='email' placeholder='Email address' autofocus>
											</div>
											
											<div class='form-group input-icon-left'>
												<i class='fa fa-lock'></i> 
												<input type='password' class='form-control' name='password' id='password' placeholder='Password'>
											</div>
											
											<div class='form-group input-icon-left'>
												<i class='fa fa-expeditedssl'></i>
												<input type='text' class='form-control' name='auth' id='auth' placeholder='2FA code' data-toggle='tooltip' data-placement='right' title='Enter your two-factor authentication code. Ignore this field if you have it disabled.'>
											</div>
											
											<button type='submit' class='btn btn-primary btn-block' onclick='return loginUser()'>Sign In</button>
											
											<div class='form-actions'>
												<div class='checkbox checkbox-primary'>
													<input type='checkbox' id='checkbox'> 
													<label for='checkbox'>Remember me</label>
												</div>
											</div>
									</form>
								</div>
								
								<div class="panel-footer">
									Forgot your password? <a href="#">Click here!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	<footer>
		<div class="container">
			<div class="widget row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<h4 class="title">Information</h4>
					<p>
						This is an user control panel for the players of <?php echo $name; ?>. This control panel is mainly for account management and administrative tasks. You need to register an account in-game before you can login to the user control panel. All logins or login attempts are being monitored.
						<br><br>Please contact the <?php echo $name; ?> management team through the forums if there are any questions about this user control panel.
					</p>
				</div>
					
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h4 class="title">Quick links</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
							<ul class="nav">
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=4" target="_blank">Announcements</a></li>
								<li><a href="https://forum.pr-rp.com/showthread.php?t=7521" target="_blank">Changelog</a></li>
								<li><a href="https://forum.pr-rp.com/showthread.php?t=6" target="_blank">Server IP</a></li>
								<li><a href="https://forum.pr-rp.com/showthread.php?t=7473" target="_blank">Staff Team</a></li>
								
							</ul>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="nav">
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=91" target="_blank">Server Rules</a></li>
								<li><a href="https://forum.pr-rp.com/showthread.php?t=7" target="_blank">Subscriptions</a></li>
								<li><a href="https://lspd.pr-rp.com" target="_blank">LSPD Forums</a></li>
								<li><a href="https://lsfd.pr-rp.com" target="_blank">LSFD Forums</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<br><br>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
							<ul class="nav">
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=6" target="_blank">Help Desk</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=186" target="_blank">Server Guides</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=77" target="_blank">Modifications</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=60" target="_blank">Faction Forums</a></li>
							</ul>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="nav">
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=42" target="_blank">Ban Appeals</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=29" target="_blank">Player Complaints</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=52" target="_blank">Suggestions</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=56" target="_blank">Bug Reports</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				&copy; 2017 <?php echo $name; ?>. All rights reserved.<br>
				<i>Design and coding by <?php echo $developer; ?>.</i>
			</div>
		</div>
	</footer>
	
	<!-- JAVASCRIPT -->
	<script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function()
	{
		setInterval(function(){
			$("#message").slideUp("slow");
		}, 6000);
	});
	</script>
	
	<!-- AJAX -->
	<script src="assets/ajax/login.js" type="text/javascript"></script>
	
</body>
</html>