<?php
          include("dbase.php");
          $food_id = $_GET['id'];
        $query ="SELECT food_id, f_name, f_photo, f_price, b_location, b_timeStart, b_timeEnd FROM food_info, business_info WHERE food_id IN (SELECT food_fk FROM business_food_mapping WHERE business_fk IN (SELECT business_id FROM business_info WHERE b_name='just eat' AND food_id='$food_id')) "; 
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        
        $f_name = $row["f_name"];
        $f_photo = $row["f_photo"];
        $f_price = $row["f_price"];
          $b_location = $row["b_location"];
          $b_timeStart = $row["b_timeStart"];
          $b_timeEnd = $row["b_timeEnd"]; 
          ?>
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
<!-- <script src="js/dropzone.js"></script> -->
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
  .error {color: #FF0000;}
  td{
    padding:0px;
    font-size: 17px;
    padding-bottom: 5px;
  }
  .first{
    font-weight: 600;
  }
  h4{
    font-weight: bold;
  }
  .btn{
    color:white;
  }

  #photo {
    height: 200px; 
    width: 200px;
    overflow: hidden;
  }

  #user {
      padding-top: 45px;
      padding-left: 250px;
      position: absolute;
      
    }
    
</style>
</head>
<body >

      <div class="header_bottom">
        <div class="container">       
        <div class="logo">
          <h1><a href="bis_home.php">UMP DINNER<span>Ordering</span></a></h1>
        </div>
        <div id="user"> 
        <?php
          /*
           Filename: login-successful.php
           Purpose: To display protected web page if user is valid.
           Note: If you enter directly to this page, you will be checked by the authenticator, and then redirect to login-failed.html.
          */

          include("authenticator.php");
          echo "<h3>Welcome, Seller ".$_SESSION['SESS_NAME']." </h3>";
          
          ?>
        </div>      
      <div class="navigation">  
      <div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
        <ul class="nav">
              <li><a href="bis_home.php">Home</a></li>                  
            <li><a href="logout.php">Logout</a></li>
            
            <div class="clearfix"></div>
          </ul>
    </div>      
   </div>
     <div class="clearfix"></div>      
    </div>
   </div> 

           <div class="main">
          <div class="reservation_banner" style="margin-bottom:40px">
            <div class="main_title">Update food</div>
            <div class="divider"></div>
         </div>

          <div class="container">
            <div class="sign-up-form">
            <form method="POST" action="bis_updateFoodscript.php" enctype="multipart/form-data">
              <div class="row" align="center">
                <div class="col-md-2"></div>
              <div class="col-md-3">
                <label class="control-label"><b>Update food image here:</b></label><br>
                                  <input type="file" id="photo1" name="photo" onchange="loadFile(event)"  accept="image/*">
                                  <input type="hidden" name="food_id" value="<?php echo $food_id; ?>">
                                  <br><br>
                            <img src="<?php echo $f_photo; ?>" id="output" width="300px"/>
                              <script>

                                var loadFile = function(event) {
                                  var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);

                                };
                              </script>
              </div>
              

                   <div class="col-md-7" align="center">
                                  
  <div class="form-group">
                           <label for="foodname"><b>Food Name :</b></label>
                          <input type="text" name="foodname" class="form-control " value="<?php echo $f_name; ?>" placeholder="e.g : Nasi Goreng">
  </div>
  <br>
  <div class="form-group" >
                           <label for="price"><b>Price (RM):</b></label>
                           <input type="number" name="price" class="form-control " value="<?php echo $f_price; ?>" placeholder="e.g : 5">
  </div>
                          <br>

                          <input type="submit" class="btn btn-primary" value="Update Food">

                    <div class="clearfix"></div>
                         </div>
                         </div>

                    
            </form>
            </div>
         </div>
      </div>

   <!-- Ends Header -->
    <!------------ Start Content ---------------->
<!--         <div class="main">
          <div class="reservation_banner" style="margin-bottom:40px">
            <div class="main_title">Update food</div>
            <div class="divider"></div>
         </div>

          <div class="container" align="center">
            <div class="sign-up-form">
            <form method="POST" action="bis_updateFoodscript.php" enctype="multipart/form-data">
                   <div class="col-md-8" align="center">
                          
                                  <label class="control-label">Add Photo:</label><br>
                                  <input type="file" name="photo">
                            
                                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <input type="text" name="foodname" value="<?php echo $f_name; ?>">
                          RM<input type="number" name="price" value="<?php echo $f_price; ?>">

                          <br>
                         </div>

                    <input type="submit"  value="Update Food">

                    <div class="clearfix"></div>
                      
                  </div>
            </form>
            </div>
         </div>
      </div> -->
</body>
</html>


