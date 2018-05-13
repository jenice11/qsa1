<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>UMP Dinner Ordering</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300:700' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script src="js/fwslider.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#slider').fwslider({
            auto:     true,  //auto start
            speed:    300,   //transition speed
            pause:    4000,  //pause duration
            panels:   5,     //number of image panels
            width:    1680,
            height:   500,
            nav:      true   //show navigation
        });
    });
    </script>       
 <!---- animated-css ---->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>
    <script>
        $(function() {
        var button = $('#loginButton');
        var box = $('#loginBox');
        var form = $('#loginForm');
        button.removeAttr('href');
        button.mouseup(function(login) {
            box.toggle();
            button.toggleClass('active');
        });
        form.mouseup(function() { 
            return false;
        });
        $(this).mouseup(function(login) {
            if(!($(login.target).parent('#loginButton').length > 0)) {
                button.removeClass('active');
                box.hide();
            }
        });
    });
   </script>
  
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">


</head>
<body>

        <div class="header_bottom">
              <div class="container">               
                <div class="logo">
                    <h1><a href="index.php">UMP DINNER<span>Ordering</span></a></h1>
                </div>              
            <div class="navigation">    
            <div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
                <ul class="nav">
              <li><a href="index.php">Home</a></li>                  
                     
              <li><a href="cust_viewOrder.php">View Order</a></li>
                  

            <li><a href="index.html">Logout</a></li>
            
            <div class="clearfix"></div>
          </ul>
        </div>          
     </div>
     <div class="clearfix"></div>          
    </div>
   </div>   
<!--    <div id="slider">
      <div><img src="images/carousel1.jpg" class="img-responsive" alt="img01"/></div>
      <div><img src="images/carousel2.jpg" class="img-responsive" alt="img02"/></div>
      <div><img src="images/carousel3.jpg" class="img-responsive" alt="img03"/></div>
    </div> -->
  </div>
   <!-- Ends Header -->

<?php
/*
 Filename: logout.php
 Purpose: To logout from website and destroy the self identity.
*/

// Start session
session_start();

// Unset the variables stored in session
session_destroy();

?>
<html>
    <body>
        <!------------ Start Content ---------------->
        <div class="main">
                <div class="order_banner">
                <div class="main_title">Log Out</div>
                <div class="divider"></div>
                </div> 
        </div>

        <div align="center">
          <p><br></p>
          <h2> You have been logged out. </h2>
            <p><br></p>
            <h2> See you again!!!</h2>
                <p><br></p>
                <p><br></p>
                <p><br></p>

            <button class="btn btn-primary btn2 btn-normal btn-inline"><h1><a href="login.php">     Login Again     </a> </h1></button>
    </body>
</html>