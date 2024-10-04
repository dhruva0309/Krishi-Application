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
if (isset($_REQUEST['dn'])){
        // removes backslashes
	$dn = stripslashes($_REQUEST['dn']);
        //escapes special characters in a string
	$dn = mysqli_real_escape_string($con,$dn); 
    $rid = stripslashes($_REQUEST['rid']);
	$rid = mysqli_real_escape_string($con,$rid);
	$iname = stripslashes($_REQUEST['iname']);
	$iname = mysqli_real_escape_string($con,$iname);
	$mess = stripslashes($_REQUEST['mess']);
	$mess = mysqli_real_escape_string($con,$mess);
	
        $query = "INSERT into `dm` (dn,rid,iname,mess)
VALUES ('$dn','$rid','$iname','$mess')";
        $result = mysqli_query($con,$query);
        if($result){
           echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("successfully Sent");
            window.location="ra.php";
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
						<h2>MESSAGE TO INSPECTOR</h2>
					
						<div class="right-wrapper pull-right">
							
					
						
						</div>
					</header>

					<!-- start: page -->
						
										<form action="" class="form-horizontal form-bordered" method="post">
											
						
											
										<div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded"><b>Driver Name</b></label>
												<div class="col-md-6">
													<input   name= "dn" type="text"  readonly value="<?php echo $_SESSION['username'];?>" class="form-control input-rounded" id="inputRounded" required>
												</div>
											</div>
											
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded"><b>RID</b></label>
												<div class="col-md-6">
													<input type="text"  name= "rid" class="form-control input-rounded" id="inputRounded" required>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded"><b>Inspector Name</b></label>
												<div class="col-md-6">
													<input type="text"  name= "iname" class="form-control input-rounded" id="inputRounded" required>
												</div>
											</div>
						
											
						
                                            
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded"><b>Message</b></label>
												<div class="col-md-6">
													<textarea   name= "mess" type="text"  class="form-control input-rounded" id="inputRounded" required>
                                                                                                                                       </textarea>
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