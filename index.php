<?php include "mysqlconnect.php"; ?>
<!DOCTYPE HTML>
<!--
	Minimaxing 3.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>YSA 11th Stake Service</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<?php include "nav.php"; ?>
					
					</div>
				</div>
			</div>
		</div>
		<div id="banner-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
					
						<div id="banner">
							<h2>Have I Done Any Good?</h2>
							<span>"Spiritual strength frequently comes through selfless service." -President Monson, April 2010</span>
						</div>
				
					</div>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="container">
				<div class="row main-row">
					<div class="4u">
						
						<section>
							<h2>Upcoming Service Opportunities:</h2>
							<p>The service comity of the YSA 11th Stake often plans many service projects throughout the year. These projects are great opportunities
								to help out in our community. Click the button below to view and signup for a service project.</p>
							<footer class="controls">
								<a href="projects.php" class="button">Service Projects</a>
							</footer>
						</section>
					
					</div>
					<div class="4u">
						
						<section>
							<h2>Have a service need?</h2>
							<p>If you have a service project please click the button below and fill out a service request form.
								The request will be forwarded to your wards service co-chair. They will be in contact with you soon to plan out your service project.</p>
							<footer class="controls">
								<a href="requests.php" class="button">Service Requests</a>
							</footer>
						</section>
					
					</div>
					<div class="4u">
					
						<section>
							<h2>Service News:</h2>
							<div id="news">
								<?php
								$results = mysqli_query($con, "call sp_getEvents();");
								while ($row = mysqli_fetch_array($results)){
									echo "<input id='eventID' type='hidden' value='",$row['EventID'],"'/>";
									echo "<p><strong>Upcoming Event: </strong>" . $row['Event_Name']."</p>";
									echo "<p><strong>Event Date: </strong>" . $row['date']."</p>";
									if ($row['time'] != "00:00"){
										echo "<p><strong>Start Time: </strong>". $row['time']."</p>";
									}
									echo "<p><strong>Ward: </strong>". $row['Ward_Name']."</p>";
								}
								?>
							</div>
						</section>

					</div>
				</div>
				<div class="row main-row">
					<div class="6u">
					
						<section>
							<h2>Bulletin Preview</h2>
							<p>Some of the highlightes of our recent service activities: </p>
							<div ng-app="YSA11Service">
								<div ng-controller="homePageCtrl">
									<div ng-repeat="picture in clipBoard">
										Ward: {{picture.WardID}} <br />
										{{picture.Clipboard_Description}} <br />
										<image src="{{picture.Clipboard_PictureURL}}"/>								
									</div>
								</div>
							</div>

					</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
	<!-- ********************************************************* -->
	</body>
</html>
<?php mysqli_close($con); ?>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/scripts.js"></script>