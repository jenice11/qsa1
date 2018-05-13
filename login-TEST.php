<!DOCTYPE html>
<html class="no-js">
    <head>
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
                        <a href="index.html" >
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html" >Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
    
    <?php
/*
  Filename: login.php
  Purpose: Login interface
*/
 //Start Session
 session_start();

 // to display error message if username and password is invalid
if (isset($_SESSION['ERRMSG_ARR']))
{
	echo "<h1 class='ermsg'>Error found: ";
	for ($i=0; $i<count($_SESSION['ERRMSG_ARR']); $i++)
	{
		echo $_SESSION['ERRMSG_ARR'][$i]."!";
	}
		echo "</h1>";
		unset($_SESSION['ERRMSG_ARR']);
	}  


?>
    
</head>
<body>
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Login</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Everyday is a good day.
                    </p>
                    <div class="contact-form">
                        <form id="contact-form" method="#" action="#" role="form">
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="password" placeholder="Your password" class="form-control" name="password" id="password" >
                            </div>

                            
                            
                             <div id="success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>
                            
                            <div id="error" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>
                            
                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Login Now">
                            </div>                      
                        </form>
                    </div>
                </div>
            </div>
            
            <?php
            // to display error message if username and password is invalid
                if (isset($_SESSION['ERRMSG_ARR']))
                {
                    echo "<h1 class='ermsg'>Error found: ";
                    for ($i=0; $i<count($_SESSION['ERRMSG_ARR']); $i++)
                    {
                        echo $_SESSION['ERRMSG_ARR'][$i]."!";
                    }
                    echo "</h1>";
                    unset($_SESSION['ERRMSG_ARR']);
                }  
            ?>

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
				<div class="login-form"> 
					<div align="center">
						<h1>Login </h1>
						<p><br></p>
						<p> <button onclick="customerFunction()" class="btn btn-primary btn2 btn-normal btn-inline ">Customer</button> &nbsp

						<button onclick="sellerFunction()" class="btn btn-primary btn2 btn-normal btn-inline ">&nbsp Seller &nbsp</button></p>
					</div>

					<script>
						function customerFunction() 
						{

  							 if (document.getElementById('seller2').style.display == 'block') 
							{
							  document.getElementById('seller2').style.display = 'none';
		                  	  document.getElementById('customer1').style.display = 'block';
		                  	}
		                  	else
		                  		 document.getElementById('customer1').style.display = 'block';
  							 
						}

						

						function sellerFunction() 
						{
							if (document.getElementById('customer1').style.display == 'block') 
							{
								document.getElementById('customer1').style.display = 'none';
		                  	  document.getElementById('seller2').style.display = 'block';
		                  	}
		                  	else
		                  		 document.getElementById('seller2').style.display = 'block';
  							 
						}


					</script>

					<!--Customer -->
					<div id="customer1" style="display:none;">
						<form method="post" action="cust_sessionHandler.php">
	                    <div class="form-group">
						    <label for="c_matricNum">Customer Matric Number:</label>
						    <input type="text" class="form-control" name="c_matricNum">
						  </div>
						  <div class="form-group">
						    <label for="pass">Password:</label>
						    <input type="password" id="pass" class="form-control" name="c_password">
						  </div>

						  <button type="submit" class="btn btn-block btn-lg btn-primary	">Customer Login</button>
							  <br><br>
							  <p>Don't have an account yet?  <a href="who.html">Register Now</a></p> 
						</form>
					</div>


					<!-- Seller -->
					<div id="seller2" style="display:none;">
						<form method="post" action="bis_sessionHandler.php">
	                    <div class="form-group">
						    <label for="b_matricNum">Seller Matric Number:</label>
						    <input type="text" class="form-control" name="b_matricID">
						  </div>


						  <div class="form-group">
						    <label for="b_password">Password:</label>
						    <input type="password" id="pass" class="form-control" name="b_password">
						  </div>

						  <button type="submit" class="btn btn-block btn-lg btn-primary	">Seller Login</button>
							  <br><br>
							  <p>Don't have an account yet?  <a href="who.html">Register Now</a></p> 
						</form>
					</div>

	
				</div>
				<div class="overlay"></div>
			</div>
		</div><!-- /intro -->
		
		
	</div><!-- /splitlayout -->
</div><!-- /container -->
</body>
</html>