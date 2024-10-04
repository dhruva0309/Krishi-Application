<!doctype html>
<?php include("fauth.php"); ?>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">
    <title>Dashboard-Farmer</title>
    <meta name="keywords" content="HTML5 Admin Template"/>
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet"
          type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/66a0d5edbecc2fed6929d78e/1i3i47art';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="#" class="logo">
                <img src="assets/images/logo.png" height="46" alt="Porto Admin"/>
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                 data-fire-event="sidebar-left-opened">
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
                        <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle"
                             data-lock-picture="assets/images/!logged-user.jpg"/>
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name"><?php echo $_SESSION['username'] ?></span>
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
                                    <i class="fa fa-tree" aria-hidden="true"></i>
                                    <span>Add Crop INFO</span>
                                </a>
                            </li>
                            <li>
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
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <span>Search Service</span>
                                </a>

                            </li>
                            <li>
                                <a href="vr.php">
                                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                                    <span>View Response</span>
                                </a>

                            </li>
                            <li>
                                <a href="sf.php">
                                    <i class="fa fa-send" aria-hidden="true"></i>
                                    <span>Send Feedback</span>
                                </a>
                            </li>

                            <li>
                                <a href="symptom.php">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <span>Agriculture Symptom Solver</span>
                                </a>
                            </li>

                            <li>
                                <a href="http://localhost:8501/">
                                    <i class="fa fa-link" aria-hidden="true"></i>
                                    <span>Prediction</span>
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
                <div class="right-wrapper pull-right">
                </div>
            </header>

            <!-- start: page -->
            <div class="row">
                <section class="panel">
                    <div class="panel-body">
                        <a class="weatherwidget-io" href="https://forecast7.com/en/12d3076d64/mysuru/"
                           data-label_1="MYSORE" data-label_2="WEATHER" data-theme="original">MYSORE WEATHER</a>
                        <script>
                            !function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = 'https://weatherwidget.io/js/widget.min.js';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, 'script', 'weatherwidget-io-js');
                        </script>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-body">
                        <div class="container">
                            <h2>Agriculture Symptom Solver</h2>
                            <form id="symptomForm">
                                <label for="symptom">Choose Symptom:</label>
                                <select id="symptom" name="symptom" required>
                                    <option value="">--Select a symptom--</option>
                                    <option value="yellow leaves">Yellow Leaves</option>
                                    <option value="wilting">Wilting</option>
                                    <option value="brown spots">Brown Spots</option>
                                    <option value="stunted growth">Stunted Growth</option>
                                    <option value="pest infestations">Pest Infestations</option>
                                    <option value="fungal diseases">Fungal Diseases</option>
                                    <option value="dry soil">Dry Soil</option>
                                    <option value="overwatering">Overwatering</option>
                                    <option value="nutrient deficiency">Nutrient Deficiency</option>
                                    <option value="poor light">Poor Light</option>
                                    <option value="powdery fungal growth">Powdery Fungal Growth</option>
                                    <option value="rust spots">Rust-colored spots</option>
                                    <option value="water spots">Water-soaked spots</option>
                                </select>
                                <button type="submit">Get Solution</button>
                            </form>
                            <div id="solution"></div>
                        </div>
                    </div>
                </section>

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

<!-- Theme Base, Components and Settings -->
<script src="assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="assets/javascripts/theme.init.js"></script>
<style>
        #solution {
            display: none;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
            font-size: 1.2em;
            transition: all 0.3s ease-in-out;
        }

        #solution.show {
            display: block;
            background-color: #ffeb3b;
            transform: scale(1.1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
<!-- Example: Form -->
<script>
    document.getElementById('symptomForm').addEventListener('submit', function (e) {
        e.preventDefault();
        var symptom = document.getElementById('symptom').value;
        var solutionText;

        switch (symptom) {
            case 'yellow leaves':
                solutionText = 'Solution for yellow leaves: Ensure adequate nitrogen and water.';
                break;
            case 'wilting':
                solutionText = 'Solution for wilting: Check for root rot and water appropriately.';
                break;
            case 'brown spots':
                solutionText = 'Solution for brown spots: Apply fungicides and maintain proper soil moisture.';
                break;
            case 'stunted growth':
                solutionText = 'Solution for stunted growth: Provide balanced fertilizers and ensure proper sunlight.';
                break;
            case 'pest infestations':
                solutionText = 'Solution for pest infestations: Use appropriate pesticides or natural predators.';
                break;
            case 'fungal diseases':
                solutionText = 'Solution for fungal diseases: Apply fungicides and avoid overhead watering.';
                break;
            case 'dry soil':
                solutionText = 'Solution for dry soil: Water deeply and mulch to retain moisture.';
                break;
            case 'overwatering':
                solutionText = 'Solution for overwatering: Improve drainage and reduce watering frequency.';
                break;
            case 'nutrient deficiency':
                solutionText = 'Solution for nutrient deficiency: Apply the necessary fertilizers based on soil test results.';
                break;
            case 'poor light':
                solutionText = 'Solution for poor light: Move plants to a sunnier location or provide artificial lighting.';
                break;
            case 'powdery fungal growth':
                solutionText = 'Solution for powdery fungal growth: Ensure good air circulation by proper spacing and pruning and Use fungicides like potassium bicarbonate.';
                break;   
            case 'rust spots':
                solutionText = 'Solution for rust spots: Remove and destroy infected plant material.';
                break; 
            case 'water spots':
                solutionText = 'Solution for water spots: Avoid overhead irrigation and manage plant spacing for good air circulation and.';
                break;  
            default:
                solutionText = 'Please select a valid symptom.';
        }
        document.getElementById('solution').innerHTML = '<p>' + solutionText + '</p>';
        var solutionDiv = document.getElementById('solution');
            solutionDiv.innerHTML = solutionText;
            solutionDiv.classList.add('show');
    });
</script>

</body>
</html>
