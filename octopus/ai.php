<!doctype html>
<?Php include("fauth.php"); ?>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard-Farmer</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
    <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
    $fullname = stripslashes($_REQUEST['fullname']);
	$fullname = mysqli_real_escape_string($con,$fullname);
	$station = stripslashes($_REQUEST['station']);
	$station = mysqli_real_escape_string($con,$station);
	$phone = stripslashes($_REQUEST['phone']);
	$phone = mysqli_real_escape_string($con,$phone);
	$area = stripslashes($_REQUEST['area']);
	$area = mysqli_real_escape_string($con,$area);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$asignal = stripslashes($_REQUEST['asignal']);
	$asignal = mysqli_real_escape_string($con,$asignal);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `iusers` (username,fullname,station,phone,area, password, asignal, trn_date)
VALUES ('$username','$fullname','$station','$phone', '$area','".md5($password)."', '$asignal', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
           echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("successfully Registred");
            window.location="ai.php";
            </script>
			<?php 
        }
    }else{
?>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="#" class="logo">
						<img src="assets/images/logo.png"  height="46" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						
					</form>
			
					
			
					
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo $_SESSION['username']?></span>
								<span class="role">FARMER</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="fprofile.php"><i class="fa fa-user"></i> My Profile</a>
								</li>
                                <li>
									<a role="menuitem" tabindex="-1" href="flogout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<!-- <div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div> -->
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="fdashboard.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="aci.php">
											<!-- <span class="pull-right label label-primary">182</span> -->
											<i class="fa fa-tree" aria-hidden="true"></i>
											<span>Add Crop INFO</span>
										</a>
									</li>
									<li >
										<a href="mc.php">
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Manage Crop INFO</span>
										</a>
										
									</li>
									<li>
										<a href="vp.php">
											<i class="fa fa-money" aria-hidden="true"></i>
											<span>View Price</span>
										</a>
										
									</li>
                                    <li>
										<a href="ss.php">
											<i class="fa  fa-search" aria-hidden="true"></i>
											<span>Search Service</span>
										</a>
										
									</li>
									<li >
										<a href="vr.php">
											<i class="fa fa-bell-o" aria-hidden="true"></i>
											<span>View Response</span>
										</a>
										
									</li>
									<li >
										<a href="sf.php">
											<i class="fa fa-send" aria-hidden="true"></i>
											<span>Send Feedback</span>
										</a>
										
									</li>
									
									
									
										
                                   
								</ul>
							</nav>
				
							
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>ADD INSPECTOR</h2>
					
						<div class="right-wrapper pull-right">
							
					
							
						</div>
					</header>

					<!-- start: page -->
						
									
									
										<form class="form-horizontal form-bordered" action="" method="post">
											
						
											
						
											
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded">Inspector Name</label>
												<div class="col-md-6">
													<input type="text"  name= "username" class="form-control input-rounded" id="inputRounded"  required>
												</div>
											</div>
						
											
						
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded">Full Name</label>
												<div class="col-md-6">
													<input   name= "fullname" type="text" class="form-control input-rounded" id="inputRounded" required>
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Station</label>
												<div class="col-md-6">
													
													<select class="form-control input-sm mb-md" name= "station" required>
														<option>Select Station</option>
														<option>station-1</option>
														<option>Station-2 </option>
														<option>Station-3 </option>
													</select>
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded"> Phone Number</label>
												<div class="col-md-6">
													<input   name= "phone" type="tel" class="form-control input-rounded" id="inputRounded" required>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputPassword">Password</label>
												<div class="col-md-6">
													<input type="password" name="password" class="form-control"  id="inputPassword" required>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputPassword">Area</label>
												<div class="col-md-6">
													<input type="text" name="area" class="form-control"  id="inputPassword" required>
												</div>
											</div>
						
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Signal Allocation</label>
												<div class="col-md-6">
													
													<select class="form-control input-sm mb-md" name= "asignal" required>
														<option>Select Signal</option>
														<option>signal-1</option>
														<option>signal-2</option>
														<option>signal-3</option>
													</select>
												</div>
											</div>
                                            <div class="row">
											<div class="col-sm-9 col-sm-offset-5">
												<button class="btn btn-primary">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
						
											
						
										
						
						
											
						
											</div>
						
										
										</form>
									</div>
								</section>
						
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		<script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
    <?php } ?>  
</html>