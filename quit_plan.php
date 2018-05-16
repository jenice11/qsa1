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
        include("/header.php");   ?> 

        <?php 
        include("dbase.php");
                 $id = $_GET['id'];

                 $query ="SELECT user_id='$id' FROM user_info,";
                 ?>

        <style>
            /* Form Module */
            .form-module {
              position: relative;
              background: #FCFCFC;
              max-width: 1200px;
              width: 100%;
              border-top: 10px solid #33b5e5;
              -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
                      box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
              margin: 0 auto;
            }

            .form-module .form {
              display: none;
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

            /* column */
            /* Create 5 equal columns that floats next to each other */
            .column1 {
                float: left;
                width: 18.4%;
                padding: 1px;

            }
            .column2 {
                float: left;
                width: 8%;
                padding: 1px;
            }

            /* Clear floats after the columns */
            .row1:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .column1 {
                    width: 100%;
                }
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
                <div class="block">
                    <h2>Create Quit Plan</h2>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->

<section class="single-post" >
    <div class="container" >
        <div class="row" >
            <div class="col-md-12" >
                <div class="post-img">
                    <img class="img-responsive" alt="" src="images/white-sign-love-heart-line-red.jpg" style="margin-left: 34%; padding-bottom:1em;">
                </div>
                <div class="post-content">
                    <!-- Form Module-->
                    <div class="module form-module">
                      <div class="toggle"><i class="fa fa-times fa-pencil"></i>



                      </div>
                      <div class="form">
                        <form method="POST" action="quit_plan_script.php" enctype="multipart/form-data">
                        <h1 style="text-align: center; margin-top: -1%;">First Step On Quit Plan</h1>

                            <fieldset> 
                            <div  style="color:black; text-align: left;">
                            <label for="date" class="labelform"><b>Select A Quit Date :</b></label>
                            <input type="date" placeholder="Preferably within 2 weeks" name="date" required>

                            <label for="reason" class="labelform"><b>What is your reason for quitting :</b></label>
                            <input type="textarea" placeholder="As a message to remind yourself the reason of you quitting" name="reason" required>

                            <label for="frequency_smoke_week">How often do you smoke?</label> <br>  
                              <select id="frequency_smoke_weekly" style="width: 40%; font-size: 12pt; ">  
                                <option>0 day in a week</option>  
                                <option>1 days in a week </option>  
                                <option>2 days in a week</option>  
                                <option>3 days in a week</option>  
                                <option>4 days in a week</option>
                                <option>5 days in a week</option>  
                                <option>6 days in a week</option>  
                                <option>Everyday</option>  
                              </select>   
                              <br><br>
                            
                            <label for="frequency_smoke_daily">When you smoke, how many a day?</label> <br>  
                            <input type="number" placeholder="1" name="frequency_smoke_daily" required>

                            <label for="when_craving">How often do you smoke?</label> <br>  
                              <select id="when_craving" style="width: 40%; font-size: 12pt; ">  
                                <option>Morning</option>  
                                <option>Afternoon</option>  
                                <option>Evening</option>  
                              </select>   
                              <br><br>

                            <label for="frequency_smoke_daily">How much do you pay per pack of cigarettes?</label> <br>  
                            <p>$<input type="number" min="1" step="any" placeholder="10.40" name="price_cigarette"></p>

                            <label for="frequency_smoke_daily">Choose one advisor</label> <br>  
                            <div class="row1">
                                    <div class=column2>
                                        <p><b>Select one</b></p>
                                    </div>
                                    <div class=column1>
                                        <p><b>Advisor Name</b></p>
                                    </div>
                                    <div class=column1>
                                        <p><b>Advisor Email</b></p>
                                    </div>
                                    <div class=column1>
                                        <p><b>Advisor Age</b></p>
                                    </div>
                                    <div class=column1>
                                        <p><b>Advisor Gender</b></p>
                                    </div>
                                    <div class=column1>
                                        <p><b>Advisor Experience</p>
                                    </div>
                                </div>

                            <div>
                                <?php

                                $query ="SELECT advisor_id, advisor_name, advisor_email, advisor_age, advisor_gender, advisor_experience from advisor_info"; 
                                $result = mysqli_query($conn,$query);
                                if (mysqli_num_rows($result) > 0){ 
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)){

                                $advisor_id = $row["advisor_id"];
                                $advisor_name = $row["advisor_name"];
                                $advisor_email = $row["advisor_email"];
                                $advisor_age = $row["advisor_age"];
                                $advisor_gender = $row["advisor_gender"];
                                $advisor_experience = $row["advisor_experience"]; 
                                ?>

                                

                                <div class="row1" style="font-size: ">
                                   <!-- List -->
                                   <div class=column2>
                                       <input type="radio" name="gender" value="<?php $advisor_id; ?>"> <br>
                                 </div>
                                    <div class=column1 style="">
                                       <p> <?php echo $advisor_name; ?></p>
                                   </div>

                                       <div class=column1>
                                       <p> <?php echo $advisor_email; ?></p>
                                   </div>

                                       <div class=column1>
                                       <p> <?php echo $advisor_age; ?></p>
                                   </div>

                                       <div class=column1>
                                       <p> <?php echo $advisor_gender; ?></p>
                                   </div>

                                       <div class=column1>
                                       <p> <?php echo $advisor_experience; ?></p>
                                   </div>
                                </div>

                                <?php
                                }
                }else{
                    echo "No results";
                }
                ?>


                            </div>
                        </div>
                    </fieldset>

              
            <div style="text-align: center;">
            <button type="submit">Submit</button>  
            <button type="reset" >Reset</button>  
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