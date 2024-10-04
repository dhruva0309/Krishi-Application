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
						<h2>MANAGE CROP INFO</h2>	
						<?php include("translate.php"); ?>
					</header>
					
					<!-- start: page -->
                    <div class="row">
							<div class="col-md-12">
								<section class="panel">
                                <?php
	 error_reporting(0);
	 $a=$_SESSION['username'];
	 $query="SELECT * from cinfo" ;
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
									
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table mb-none">
												<thead>
													<tr>
														<th>CID</th>
														<th>Crop</th>
														<th>Region</th>
                                                        <th>Harvesting Month</th>
                                                        <th>Quantity</th>
                                                        
                                                        <th>Update</th>
                                                        <th>Delete</th>
													</tr>
												</thead>
                                                <?php while($data = mysqli_fetch_array($result))
      { ?>
												<tbody>
													<tr class="primary">
                                                    <td class=" "><?php echo $data['cid']; ?></td>
                                                    <td class=" "><?php echo $data['cat']; ?></td>
                                                    <td class=" "><?php echo $data['region']; ?></td>
                                                    <td class=" "><?php echo $data['hmonth']; ?></td>
                                                    <td class=" "><?php echo $data['quantity']; ?></td>
                                                   
                                                    <td class=" "><a href="cupdate.php?id=<?php echo $data['cid']; ?>" class="btn btn-sm btn-primary login-submit-cs" onclick="return confirm('Are You Sure')">UPDATE</td>
                                                    <td class=" "><a href="cdelete.php?id=<?php echo $data['cid']; ?>" class="btn btn-sm btn-primary login-submit-cs" onclick="return confirm('Are You Sure')">DELETE</td>
                                                   
													</tr>
													
												</tbody>
                                                <?php } ?>
											</table>
										</div>
									</div>
								</section>
							</div>
							
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
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>