<!doctype html>
<?Php include("sauth.php"); ?>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard-Service</title>
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
								<span class="role">SERVICE PROVIDER</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="Sprofile.php"><i class="fa fa-user"></i> My Profile</a>
								</li>
                                <li>
									<a role="menuitem" tabindex="-1" href="Slogout.php"><i class="fa fa-power-off"></i> Logout</a>
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
										<a href="sdashboard.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
                                  
									<li>
										<a href="asi.php">
											<!-- <span class="pull-right label label-primary">182</span> -->
											<i class="fa fa-tree" aria-hidden="true"></i>
											<span>Add Service INFO</span>
										</a>
									</li>
                                    <li class="nav-active">
										<a href="msi.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Manage Service INFO</span>
										</a>
									</li>
									<li >
										<a href="vsr.php">
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>View Request </span>
										</a>
										
									</li>
									<li>
										<a href="vf.php">
											<i class="fa fa-money" aria-hidden="true"></i>
											<span>View Feedback</span>
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
						<h2>USER PROFILE</h2>
					
						
					</header>

					<!-- start: page -->

					
						<div class="col-md-12 col-lg-12">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">
										
                                    <?php
	 error_reporting(0);
	 $a=$_SESSION['username'];
	 $query= "SELECT * FROM susers WHERE username='$a'" ;
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "krushi";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()


	

?>
									
									<div id="edit" class="tab-pane">

										<form class="form-horizontal" action="" method="post">
											
                                            <?php while($data = mysqli_fetch_array($result))

      { ?>
                                               <div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">FID </label>
													<div class="col-md-8">
														<input type="text" class="form-control" readonly value="<?php echo $data['sid'] ;?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">User Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" readonly value="<?php echo $data['username'] ;?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Full Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" readonly value="<?php echo $data['fullname'] ;?>" >
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Phone NO</label>
													<div class="col-md-8">
														<input type="text" class="form-control" readonly value="<?php echo $data['phone'] ;?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Email</label>
													<div class="col-md-8">
														<input type="text" class="form-control" readonly value="<?php echo $data['email'] ;?>" >
													</div>
												</div>
                                                <div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" readonly value="<?php echo $data['address'] ;?>" >
													</div>
												</div>
                                                <div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
													<center>	<button type="button" class="btn btn-primary">  <a href="esprofile.php?id=<?php echo $data['sid'];?>"  onclick="return confirm('Are You Sure')">EDIT</button></center>
														
													</div>
												</div>
											</div>
											
											
                                            <?php } ?>

									</div>
								</div>
							</div>
						</div>
						
					<!-- end: page -->
				</section>
			</div>

			
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
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>