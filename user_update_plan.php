
    
        <?php  
        include("authenticator.php");
        include("/user_header.php");   
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
                <div class="block" style="margin-top: -2%;">
                    <h2>Edit Quit Plan</h2>
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


                      <div class="form">
                        <form method="POST" action="user_update_plan_script.php" enctype="multipart/form-data">
                          <table>            
                              <tr>
                                <td >Your Quit Date </p></td>
                                <td><input type="date" name="quitdate">  </td>
                              </tr>
                              
                              <tr>
                                <td >Your reason for quitting </p></td>
                                <td><input type="text" name="reason" value="<?php echo $reason ?>"> </td>
                              </tr>

                              <tr>
                                <td >Day(s) you smoke in a week </p></td>
                                <td>
                                  <select name="frequency_smoke_weekly" id="frequency_smoke_weekly" style="width: 100%; font-size: 12pt; "> 
                                <option value="" disabled selected>Select</option> 
                                <option value="0 day in a week">0 day in a week</option>  
                                <option value="1 day in a week">1 days in a week </option>  
                                <option value="2 day in a week">2 days in a week</option>  
                                <option value="3 day in a week">3 days in a week</option>  
                                <option value="4 day in a week">4 days in a week</option>
                                <option value="5 day in a week">5 days in a week</option>  
                                <option value="6 day in a week">6 days in a week</option>  
                                <option value="Everyday">Everyday</option>  
                              </select>  
                            
                              </tr>

                              <tr>
                                <td >Frequency of smoking daily </p></td>
                                <td><input type="number" name="frequency_smoke_daily" min="0" value="<?php echo $frequency_smoke_daily  ?>"> </td>
                              </tr>

                              <tr>
                                <td >Time in the day when craving </p></td>
                                <td><select name="when_craving" id="when_craving" style="width: 100%; font-size: 12pt; ">  
                                <option value="" disabled selected>Select a time</option>
                                <option value="Morning">Morning</option>  
                                <option value="Afternoon">Afternoon</option>  
                                <option value="Evening">Evening</option>  
                              </select>     
                              </td>
                              </tr>

                              <tr>
                                <td >Price per cigarettes </p></td>
                                <td><input type="number" name="price_cigarette" min="0" value="<?php echo $price_cigarette ?>"> </td>
                              </tr>

                              <tr>
                                <td>Your Advisor Name </p></td>
                                <td>: <?php echo $advisor_name ?></td>
                              </tr>
                          </table>
                          <?php
                                }
                }else{
                    echo "No results";
                }
                ?>

                            
                          <br/>
                            <label style="font-size: 1.2em;">Choose one below, if you would like to change advisor</label> <br>  
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
                                $query ="SELECT advisor_id, advisor_name, advisor_email, advisor_age, advisor_gender, advisor_experience FROM advisor_info"; 

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
                                       <input type="radio" name="advisor_id" id="advisor_id" value="<?php echo $advisor_id; ?>"><br>
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
</div>
</div>

              
            <div style="text-align: center;">
            <button type="submit">Submit</button>  
            <button type="reset" >Reset</button>  
        </div>
        </fieldset>  
</form>  

</body>
</html>


