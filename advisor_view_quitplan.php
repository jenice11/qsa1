<!DOCTYPE html>
<html>
<head>
  <?php 
include("advisor_header.php");
include("authenticator.php");

?>
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

   
            td{
            padding:0px;
            font-size: 16.5px;
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
             float: left;
          }

          #display {
            width: 100%;
            margin-left: 50%;
            position: relative;



          }


</style>


</head>
<body>

    <!------------ Start Content ---------------->
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
    <div class="container" align="right">
                    
                        <?php
                        include("dbase.php");                     
                        $advisor_id = $_SESSION['SESS_MEMBER_ID'];

                      $query ="SELECT quit_plan_id, quit_date, reason, frequency_smoke_weekly, frequency_smoke_daily, when_craving, price_cigarette, advisor_fk, user_fk, user_name,user_email, user_phone, user_gender FROM quit_plan, advisor_info, user_info WHERE advisor_info.advisor_id=quit_plan.advisor_fk
                       AND user_info.user_id=quit_plan.user_fk AND quit_plan.advisor_fk='$advisor_id'";

                      $result = mysqli_query($conn,$query);
                      if (mysqli_num_rows($result) > 0){ 
                      // output data of each row

                      while($row = mysqli_fetch_assoc($result)){
                      $id = $row["quit_plan_id"];
                      $quit_date = $row ["quit_date"];
                      $reason = $row ["reason"];
                      $frequency_smoke_weekly = $row ["frequency_smoke_weekly"];
                      $frequency_smoke_daily = $row["frequency_smoke_daily"];
                      $when_craving = $row["when_craving"];
                      $price_cigarette = $row["price_cigarette"];
                      $user_name = $row["user_name"];
                      $user_email = $row["user_email"];
                      $user_phone = $row["user_phone"];
                      $user_gender = $row["user_gender"];
                      ?>

                      <!-- Form Module-->

<hr>

                      <div style="display: block; padding-top: 10px;" >
                    <div class="row">
                

                <div class="col-sm-6" align="center" ">
                
                <div id="display">
                  
                  <table >
                    <h2>User</h2>
                    <br>
                            <tr>
                              <td width="40%">User Name: </td>
                              <td> <?php echo $user_name; ?></td>
                            </tr>

                            <tr>
                                <td>User Email: </td>
                                <td><?php echo $user_email; ?></td>
                            </tr>

                            <tr>
                                <td>User Phone: </td>
                                <td><?php echo $user_phone; ?></td>
                            </tr>
                            <tr>
                                <td>User Gender: </td>
                                <td><?php echo $user_gender; ?></td>
                            </tr>

                              
                             <tr>
                              <td>Quit Date: </td>
                              <td><?php echo $quit_date; ?></td>
                              
                            </tr>
                              
                             <tr>
                                <td>Reason for Quitting: </td>
                             <td><?php echo $reason; ?></td>
                            </tr>

                              <tr>
                              <td>Frequency smoke weekly: </td>
                              <td><?php echo $frequency_smoke_weekly;?></td>
                            </tr>
                            <tr>
                                <td>Frequency smoke daily:  </td>
                                <td><?php echo $frequency_smoke_daily; ?></td>
                            </tr>
                            <tr>
                                <td>When craving: </td>
                                <td><?php echo $when_craving; ?></td>
                            </tr>
                            <tr>
                                <td>Price per Cigarette Paid: </td>
                                 <td><?php echo $price_cigarette; ?></td>
                            </tr>
                  </table>   
                  <hr>

               


            </div>
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
  </section>
</body>

</html>