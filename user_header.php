<!DOCTYPE html>
<html class="no-js">
    <head>

        <?php  
        include("authenticator.php");  ?> 
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="home.png">
        <title>Quit Smoking Advisor</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/style.css">

        
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="images/logo.png" alt="" >
                        </a>

                        
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li> <a><?php echo "Welcome, ".$_SESSION['SESS_NAME']?></a> </li>
                            <li>
                                <a href="index.php" >Home</a>
                            </li>
                             <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quit Plan <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                         <li><a href="quit_plan.php">Create Quit Plan</a></li>
                                        <li><a href="user_view_plan.php">View Quit Plan</a></li>
                                    </ul>
                                </div>
                            </li>
                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Info Wall <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="health_effects.php">Health Effects</a></li>
                                        <li><a href="cigarette_contains_what.php">Cigarette contains what?</a></li>
                                        <li><a href="why_smoke.php">Why Teenagers or Children Smoke</a></li>
                                    </ul>
                                </div>
                            </li>         

                            <?php

        if(isset($_GET['status'])) {
          // echo "<script type='text/javascript'> $('.alert').alert() </script>";

          echo "<script type='text/javascript'> 
          document.getElementById('success_alert').style.visibility = 'visible'
          </script>";
        }
        else  {
        }
        ?>                  
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="user_register.php">As User</a></li>
                                        <li><a href="advisor_register.php">As Advisor</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>   
        