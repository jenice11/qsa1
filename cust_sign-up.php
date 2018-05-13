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
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
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

    $('#my-imageupload').imageupload(options);


   </script>
  
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<style type="text/css">

#pad {
  padding-left: 16em;
  width: 112%;
}

#sub {
  padding-left: 12em;
}


</style>

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
            <li><a href="logout.php">Logout</a></li>
            
            <div class="clearfix"></div>
          </ul>
    </div>      
   </div>
     <div class="clearfix"></div>      
    </div>
   </div> 

   <!-- Ends Header -->
    <!------------ Start Content ---------------->
        <div class="main">
          <div class="reservation_banner" style="margin-bottom:40px">
            <div class="main_title">Customer Sign Up</div>
            <div class="divider"></div>
         </div>

    
            <div class="row">
            <div class="container">
            <div class="col-md-15">
             
            <div class="sign-up-form" id="pad">
            <form method="POST" action="cust_sign-upscript.php" enctype="multipart/form-data">
                    <form action="cust_sign-upscript.php" method="post">
                                  
                      <div class="form-group" >
                        <label for="customer_name"><b>Customer Name :</b></label>
                        <input type="text" name="customer_name" class="form-control " placeholder="e.g : Ali Baba" required>
                      </div>

                        <label for="custmatric"><b>Matric number :</b></label>
                        <input type="text" name="custmatric" class="form-control " placeholder="e.g : CC11555" required>

                      <div class="form-group" >
                        <label for="password"><b>Password :</b></label>
                        <input type="password" name="password" class="form-control " placeholder="Must be more than 5 characters" required>
                      </div>
                      <div class=sign-up><p>Gender</p>
                                    
                                      <input class="w3-radio" type="radio" name="gender" value="male" checked>
                                      <label>Male</label>
                                    
                                    <p>
                                      <input class="w3-radio" type="radio" name="gender" value="female">
                                      <label>Female</label>
                                    </p>
                                </div>
                      <div class="form-group" >
                        <label for="hpNum"><b>Mobile number :</b></label>
                        <input type="number" name="hpNum" class="form-control " placeholder="e.g : 013-8299365" required>
                      </div><br>

                      <label for="location"><b>Hostel Location :</b></label><p></p>
                      <select class="sign-up-form select" name="location" required>
                        <option value="" disabled selected>Which hostel do you live in?</option>
                        <option value="KK1">KK1</option>
                        <option value="KK2">KK2</option>
                        <option value="KK3">KK3</option>
                        <option value="KK4">KK4</option>
                      </select> <br>
                      <div id="sub">
                          <input type="submit" class="btn btn-primary" value="Register as Customer">
                        </div>

                        </form>
                    <div class="clearfix"></div>
                         </div>
                         </div>
                       </form>
                     </div>
                   </div>
                 </div>
                 </div>
               </div>
             </div>
           </div>
         </body>
         </html>


