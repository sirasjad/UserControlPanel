<?php checkLoggedIn(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Character - <?php echo $name; ?></title>
	
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
			<a href="/?page=dashboard" class="logo"><img src="assets/img/logo.png" height="40" width="40"></a>
			
			<nav>
				<div class="nav-control">
					<ul>
						<li><a href="/?page=dashboard">Dashboard</a></li>
						<li><a href="https://forum.pr-rp.com" target="_blank">Forums</a></li>
						<li><a href="/?page=online">Online players</a></li>
						<li><a href="/?page=wall-of-fame">Wall of Fame</a></li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">My characters</a>
							<ul class="dropdown-menu default">
								<li><a href="#"><i class="fa fa-user-circle"></i>Albert Gallo</a></li>
								<li><a href="#"><i class="fa fa-user-circle"></i>Jimmy Peizhi</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle">Log center</a>
							<ul class="dropdown-menu default">
								<li><a href="#"><i class="fa fa-book"></i>Account logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Command logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Payment logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Death logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Weapon logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Inventory logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Property logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Admin logs</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">Administration panel</a>
							<ul class="dropdown-menu default">
								<li><a href="#"><i class="fa fa-gavel"></i>Ban center</a></li>
								<li><a href="#"><i class="fa fa-address-card"></i>View account</a></li>
								<li><a href="#"><i class="fa fa-address-card-o"></i>Manage account</a></li>
								<li><a href="#"><i class="fa fa-pie-chart"></i>Faction management</a></li>
								<li><a href="#"><i class="fa fa-black-tie"></i>Staff management</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			
			<div class="nav-right">
				<div class="nav-profile dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span>Habibi</span></a>
					
					<ul class="dropdown-menu">
						<li><a href="/?page=settings"><i class="fa fa-gear"></i>Settings</a></li>
						<li><a href="/?page=logout"><i class="fa fa-power-off"></i>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	
	<div id="wrapper">	
		<section class="hero" style="background-image: url(assets/img/cover/cover-game.png);">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">Character profile</div>
				</div>
			</div>
		</section>
		
		<div id="wrapper">	
			<section class="elements">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bottom-sm-30">
							<h3>Jimmy Peizhi <i>(offline)</i></h3>
							
							<div class="tab-select">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tabs1" data-toggle="tab"><i class="fa fa-user"></i>General information</a></li>
									<li><a href="#tabs2" data-toggle="tab"><i class="fa fa-car"></i>Vehicles</a></li>
									<li><a href="#tabs3" data-toggle="tab"><i class="fa fa-suitcase"></i>Inventory</a></li>
									<li><a href="#tabs4" data-toggle="tab"><i class="fa fa-gavel"></i>Admin record</a></li>
									<li><a href="#tabs5" data-toggle="tab"><i class="fa fa-trophy"></i>Achievements</a></li>
								</ul>
								
								<div class="tab-content border-1 border-grey-300 padding-20">
									<div class="tab-pane fade in active" id="tabs1">
										<center><img src="assets/img/skins/122.png" height="70%" width="70%" draggable="false"></center>
										
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="container">
													<h4>General information</h4>
													<strong>Player ID:</strong> #831<br>
													<strong>Forum name:</strong> Habibi<br>
													<strong>Email:</strong> sirasjad@gmail.com<br>
													<strong>Last login:</strong> 01/04/2017
													<br><br>
													<strong>Hours played:</strong> 586<br>
													<strong>Phone number:</strong> 18271<br>
													<strong>Gender:</strong> Male<br>
													<strong>Age:</strong> 25 years<br>
												</div>
											</div>
														
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="container">
													<h4>Financial information</h4>
													<strong>Cash:</strong> $412<br>
													<strong>Bank:</strong> $1,124,612<br>
													<strong>Savings:</strong> N/A<br>
													<strong>Job:</strong> Mechanic
													<br><br>
													<strong>House:</strong> Yes (ID 412)<br>
													<strong>House value:</strong> $550,000<br>
													<strong>Business:</strong> Yes (ID 754)<br>
													<strong>Business value:</strong> $850,000<br>
												</div>
											</div>
											
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="container">
													<h4>Donator perks</h4>
													<strong>Package:</strong> Gold<br>
													<strong>Club membership:</strong> Yes (47 days left)<br>
													<strong>Namechange tickets:</strong> 3<br>
													<strong>Vehicle tickets:</strong> 1
													<br><br>
													<strong>Mask ID:</strong> 1997<br>
													<strong>Driver license:</strong> Yes<br>
													<strong>Weapon license:</strong> No<br>
													<strong>Medical license:</strong> No<br>
												</div>
											</div>
										</div>
									</div>
									
									<div class="tab-pane fade" id="tabs2">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="container">
													<img src="assets/img/vehicles/402.png" draggable="false"><br><br>
													<h4>Buffalo (ID 402)</h4>
													<strong>Value:</strong> Donated<br>
													<strong>Car plate:</strong> 91837<br>
													<strong>Health:</strong> 100%<br>
													<strong>Fuel:</strong> 85%<br><br><br>
												</div>
											</div>
														
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="container">
													<img src="assets/img/vehicles/482.png" draggable="false"><br><br>
													<h4>Burrito (ID 482)</h4>
													<strong>Value:</strong> $85,000<br>
													<strong>Car plate:</strong> 91817<br>
													<strong>Health:</strong> 100%<br>
													<strong>Fuel:</strong> 35%<br><br><br>
												</div>
											</div>
											
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="container">
													<img src="assets/img/vehicles/560.png" draggable="false"><br><br>
													<h4>Sultan (ID 560)</h4>
													<strong>Value:</strong> Donated<br>
													<strong>Car plate:</strong> 91837<br>
													<strong>Health:</strong> 100%<br>
													<strong>Fuel:</strong> 85%<br><br><br>
												</div>
											</div>
										</div>
									</div>	
									
									<div class="tab-pane fade" id="tabs3">
										This feature is still in development.
									</div>
									
									<div class="tab-pane fade" id="tabs4">
										<h3>Admin jails</h3><br>
										<div class="row">
											<div class="col-lg-12">
												<div class="panel panel-default">
													<div class="panel-body">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>Date</th>
																	<th>Character name</th>
																	<th>Reason</th>
																	<th>Length</th>
																	<th>Admin</th>
																</tr>
															</thead>
															
															<tbody>
																<tr>
																	<td>01/04/2017</td>
																	<td>Albert_Gallo</td>
																	<td>Testing</td>
																	<td>60 minutes</td>
																	<td>Tank</td>
																</tr>
																
																<tr>
																	<td>01/04/2017</td>
																	<td>Albert_Gallo</td>
																	<td>Testing</td>
																	<td>60 minutes</td>
																	<td>Tank</td>
																</tr>
																
																<tr>
																	<td>01/04/2017</td>
																	<td>Albert_Gallo</td>
																	<td>Testing</td>
																	<td>60 minutes</td>
																	<td>Tank</td>
																</tr>
																
																<tr>
																	<td>01/04/2017</td>
																	<td>Albert_Gallo</td>
																	<td>Testing</td>
																	<td>60 minutes</td>
																	<td>Tank</td>
																</tr>
															</tbody>
														</table>	
													</div>
												</div>
											</div>
										</div><br><br>
										
										<h3>Bans</h3><br>
										<div class="row">
											<div class="col-lg-12">
												<div class="panel panel-default">
													<div class="panel-body">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>Date</th>
																	<th>Character name</th>
																	<th>IP address</th>
																	<th>Reason</th>
																	<th>Admin</th>
																</tr>
															</thead>
															
															<tbody>
																<tr>
																	<td>01/04/2017</td>
																	<td>Albert_Gallo</td>
																	<td>127.0.0.1</td>
																	<td>Testing</td>
																	<td>Tank</td>
																</tr>
																
																<tr>
																	<td>01/04/2017</td>
																	<td>Albert_Gallo</td>
																	<td>127.0.0.1</td>
																	<td>Testing</td>
																	<td>Tank</td>
																</tr>
																
																<tr>
																	<td>01/04/2017</td>
																	<td>Albert_Gallo</td>
																	<td>127.0.0.1</td>
																	<td>Testing</td>
																	<td>Tank</td>
																</tr>
																
																<tr>
																	<td>01/04/2017</td>
																	<td>Albert_Gallo</td>
																	<td>127.0.0.1</td>
																	<td>Testing</td>
																	<td>Tank</td>
																</tr>
															</tbody>
														</table>	
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="tab-pane fade" id="tabs5">
										This feature is still in development.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
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