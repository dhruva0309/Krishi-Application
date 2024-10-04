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

  <script>  
function validateForm() {  
    //collect form data in JavaScript variables  
    var pw1 = document.getElementById("pswd1").value;  
    var pw2 = document.getElementById("pswd2").value;  
    
      
    //check empty first name field  
   
    
    //check empty password field  
    if(pw1 == "") {  
      document.getElementById("message1").innerHTML = "**Fill the password please!";  
      return false;  
    }  
    
    //check empty confirm password field  
    if(pw2 == "") {  
      document.getElementById("message2").innerHTML = "**Enter the password please!";  
      return false;  
    }   
     
    //minimum password length validation  
  
    
    if(pw1 != pw2) {  
      document.getElementById("message2").innerHTML = "**Passwords are not same";  
      return false;  
    } else {  
      alert ("Your password created successfully");  
     
    }  
 }  
</script> 
</head>

<?php

require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
        // removes backslashes
	
    $password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);	
	
	
	
	
        $query = "UPDATE  `susers` SET  password='".md5($password)."'  WHERE username='$username' ";
        $result = mysqli_query($con,$query);
        if($result){
           echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Successfully Updated");
            window.location="slogin.php";
            </script>
			<?php 
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
  <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Udate Password</h2>
            <div class="heading-line"></div>
            <!-- <p>If you have any question or just want to say 'hello' to Alstar web studio please fill out form below and
              we will be get in touch with you within 24 hours. </p> -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" onsubmit ="return validateForm()" >
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="User Name" required/>
                
              </div>
            </div>

           
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="password" class="form-control" name="password" id = "pswd1" placeholder="Password" required />
                <span id = "message1" style="color:red"> </span> 
              </div>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="password" class="form-control" name="password" id = "pswd2" placeholder="Confirm Password" required />
                <span id = "message2" style="color:red"> </span>
              </div>
            </div>

           
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Submit</button>
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
