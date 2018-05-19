<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="home.png">
        <title>Quit Plan</title>
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
    
        <?php  
        include("authenticator.php");
        include("/user_header.php");   
        ?> 

        <style>
            /* Form Module */
            .form-module {
              position: relative;
              background: #FCFCFC;
              max-width: 600px;
              width: 100%;
              border-top: 10px solid #33b5e5;
              -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
                      box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
              margin: 0 auto;
              margin-top: -5%;
            }

            .form-module .form {

              padding: 30px ;
            }
            .form-module .form:nth-child(2) {
              display: block;
            }
            .form-module h2 {
              margin: 0 0 20px;
              color: #33b5e5;
              font-size: 18px;
              font-weight: 400;
              line-height: 1;
            }
            .form-module input {

              width: 100%;
              border: 1px solid #d9d9d9;
              margin: 0 0 20px;
              padding: 10px 15px;
              -webkit-box-sizing: border-box;
                      box-sizing: border-box;
              font-wieght: 400;
             
            }

            .form-module button {
              cursor: pointer;
              background: #33b5e5;
              width: 30%;
              border: 0;
              padding: 10px 15px;
              margin-left: 5%;
              margin-right: 5%;
              font-size: 1.5em;
              color: #ffffff;
              -webkit-transition: 0.3s ease;
              transition: 0.3s ease;
            }
            .form-module button:hover {
              background: #178ab4;
            }

            .form-module .cta a {
              color: #333333;
              text-decoration: none;
            }

            td{
            vertical-align:top;
            width: 270px;
            font-family: arial;
            font-weight: bold;
            padding: 1%;
          }

        </style>

    </head>
       
<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div id="user"> 
                
                </div>
            <div class="col-md-12" style="margin-top:  -4%;">
                <div class="block" style="margin-top: -2%;">
                    <h2>View Quit Plan</h2>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->

<section class="single-post" >
    <div class="container" >
        <div class="row" >
            <div class="col-md-12" >
                
                <div class="post-content">
                    <!-- Form Module-->
                    <div class="module form-module">

                      <div class="form">
                        <?php
                        include("dbase.php");                     
                        $user_id = $_SESSION['SESS_MEMBER_ID'];

                      $query ="SELECT quit_date, reason, frequency_smoke_weekly, frequency_smoke_daily, when_craving, price_cigarette, advisor_fk, user_fk, advisor_name,advisor_email, advisor_phone FROM quit_plan, advisor_info, user_info WHERE advisor_info.advisor_id=quit_plan.advisor_fk AND 
                        user_info.user_id=quit_plan.user_fk AND quit_plan.user_fk='$user_id'"; 

                      $result = mysqli_query($conn,$query);
                      if (mysqli_num_rows($result) > 0){ 
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)){
                      $quit_date = $row ["quit_date"];
                      $reason = $row ["reason"];
                      $frequency_smoke_weekly = $row ["frequency_smoke_weekly"];
                      $frequency_smoke_daily = $row["frequency_smoke_daily"];
                      $when_craving = $row["when_craving"];
                      $price_cigarette = $row["price_cigarette"];
                      $advisor_name = $row["advisor_name"];
                      $advisor_email = $row["advisor_email"];
                      $advisor_phone = $row["advisor_phone"];
                        ?>
                        <div style="font-size: 1.15em;">
                          <table>
                              <h1 style="text-align: center">Your Quit Plan Information</h1>
                          <h2 style="text-align: center; font-size: 1.3em;">Contact your advisor for further discussion</h2>

                          </table>
                          
                            <table>

                             <tr>
                                <td >Your Name </p></td>
                                <td >: <?php echo $_SESSION['SESS_NAME']; ?></td>
                              </tr>
                              
                              <tr>
                                <td >Your Quit Date </p></td>
                                <td>: <?php echo $quit_date ?></td>
                              </tr>
                              
                              <tr>
                                <td >Your reason for quitting </p></td>
                                <td>: <?php echo $reason ?></td>
                              </tr>

                              <tr>
                                <td >Day(s) you smoke in a week </p></td>
                                <td>: <?php echo $frequency_smoke_weekly ?></td>
                              </tr>

                              <tr>
                                <td >Frequency of smoking daily </p></td>
                                <td>: <?php echo $frequency_smoke_daily  ?></td>
                              </tr>

                              <tr>
                                <td >Time in the day when craving </p></td>
                                <td>: <?php echo $when_craving ?></td>
                              </tr>

                              <tr>
                                <td >Price per cigarettes </p></td>
                                <td>: $<?php echo $price_cigarette ?></td>
                              </tr>

                              <tr>
                                <td>Your Advisor Name </p></td>
                                <td>: <?php echo $advisor_name ?></td>
                              </tr>

                              <tr>
                                <td>Your Advisor Email</td>
                                <td>: <?php echo $advisor_email ?></td>
                              </tr>

                              <tr>
                                <td>Your Advisor Phone</td>
                                <td>: <?php echo $advisor_phone ?></td>
                              </tr>
                            </table>
                            <br>
                            <input type="button" value="Edit Plan" onclick="window.location.href='user_update_plan.php'" style="background-color: #33B5E5;" />

                            <input type="button" value="Return to homepage" onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php' " style="background-color: #33B5E5;" />

                             

                            
                                

                                <?php
                                }
                }else{
                    echo "No results";
                }
                ?>


                            </div>
                        </div>

              
            <div style="text-align: center;">
        </div>
        </fieldset>  
</form>  
         
                </div>
            </div>
        </div>
    </div>

</div>
</section>
</div>
</section>


  <!-- Template Javascript Files
  ================================================== -->
  <!-- jquery -->
  <script src="plugins/jQurey/jquery.min.js"></script>
  <!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
  <!-- owl carouserl js -->
  <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
  <!-- bootstrap js -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- wow js -->
  <script src="plugins/wow-js/wow.min.js"></script>
  <!-- slider js -->
  <script src="plugins/slider/slider.js"></script>
  <!-- Fancybox -->
  <script src="plugins/facncybox/jquery.fancybox.js"></script>
  <!-- template main js -->
  <script src="js/main.js"></script>
</html>