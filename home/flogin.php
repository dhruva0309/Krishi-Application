<!DOCTYPE html>
<html>

<head>
  <title>Krushi</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">

  <!-- Custom CSS for background image -->
  <style>
    body {
      background-image: url('img/intro/bg1.jpg'); /* Path to your background image */
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>

  <!-- =======================================================
    Theme Name: Alstar
    Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66a0d5edbecc2fed6929d78e/1i3i47art';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `fusers` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: http://localhost/krushi/octopus/fdashboard.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='flogin.php'>Login</a></div>";
	}
    }else{
?>
<body>

  <!-- Navigation -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
       

      </div>
     
        <div class="container">
          <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!-- <a class="navbar-brand" href="index.html"><img src="" alt="Progressus HTML5 template"></a> -->
          </div>
          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
              <li class="active"><a href="index.php">Home</a></li>
             
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a href="login.php">Admin</a></li>
                  <li><a href="flogin.php">Farmer </a></li>
                  <li><a href="slogin.php">Service Provider</a></li>
                </ul>
              </li>
              
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div> 
    </div>
  </div>

 
  <!-- Contact -->
  <section id="contact" class="home-section" style="background-color: transparent;">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Farmer Login</h2>
            <div class="heading-line"></div>
            <!-- <p>If you have any question or just want to say 'hello' to Alstar web studio please fill out form below and
              we will be get in touch with you within 24 hours. </p> -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div> -->

          <form action="" method="post">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="username" class="form-control"  placeholder="User Name" required  />
                
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="password" class="form-control" name="password"  placeholder="Password" required />
                
              </div>
            </div>
            <div class="row">
                                <div class="col-md-12">
                                  <div class="tile">
                                  
                        
                        
                               
                                  
                        
                        
                                  <p style="color:black;">Not registered yet? <a href='fregister.php'>Register Here</a></p>
                                        <p><a href='fforgot.php'>Forgot Password ??</a></p>            
                                        
                                
                               
                                        
                                
                            
            </div>             

           
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Sign In</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>

  <!-- Bottom widget -->
  

 

  <!-- js -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>

</body>
<?php } ?>
</html>
