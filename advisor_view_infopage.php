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
            width: 110%;
            margin-left: 50%;
            position: relative;
            margin-top: -15%;


          }
           #displaypic {
            width:100%;
            max-width:200px;
            max-height: :200px;
            padding-top: 70px;
            padding-bottom: 20px;
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

                      $query ="SELECT page_id, advisor_name, advisor_fk, page_name, page_photo, page_text, page_date FROM page_info, advisor_info WHERE advisor_fk=$advisor_id AND advisor_info.advisor_id=page_info.advisor_fk"; 

                      $result = mysqli_query($conn,$query);
                      if (mysqli_num_rows($result) > 0){ 
                      // output data of each row

                      while($row = mysqli_fetch_assoc($result)){
                      $id = $row["page_id"];
                      $advisor_name = $row["advisor_name"];
                      $page_name = $row["page_name"];
                      $page_photo = $row["page_photo"];
                      $page_text = $row["page_text"];
                      $page_date = $row["page_date"];
                      ?>
                      
                      <!-- Form Module-->

<hr>

                      <div style="display: block; padding-top: 10px;" >
                    <div class="row">
                

                <div class="col-sm-6" align="center" ">
                
                <div id="display">
                  
                  <table >
                      <tr>
                  <img id="displaypic" src="<?php echo $page_photo; ?>">
              </div>
                              <td width="40%">Page Name: </td>
                              <td> <?php echo $page_name; ?></td>

                            </tr>
                              
                             <tr>
                              <td>Posted By: </td>
                              <td><?php echo $advisor_name; ?></td>
                              
                            </tr>
                              
                              <tr>
                                <td> Page Text: </td>
                              <td style="padding-top: 10px;"> <textarea name="page_text" form="pageform" style="resize: none" readonly rows="5" cols="50" ><?php echo $page_text; ?></textarea></td>

                            </tr>

                              <tr>
                              <td>Posted Time: </td>
                                <td><?php echo $page_date;?></td>
                            </tr>
                  </table>   
                  <a href="advisor_update_pageEntry.php?id=<?php echo $id; ?>" class="btn btn-success"><b>Update</b></a>
                                  <a href="advisor_delete_pageEntry.php?id=<?php echo $id; ?>" class="btn btn-danger "><b>Delete</b></a>
                              </td>
                  </div>

               


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