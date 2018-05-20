<!DOCTYPE html>
<html>
<head>
</body>
</html>
<?php 
include("advisor_header.php");

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

    /* Form Module */
            .form-module {

              text-align: center;
              background: #FCFCFC;
              max-width: 800px; 
              margin-left: 14%;
              width: 100%;
              border-top: 10px solid #33b5e5;
              -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
                      box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
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
              font-weight: 400;
             
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
            <div class="col-md-12">
                <div class="block">
                    <h2>Update Comment</h2>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->


<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="post-content" style="margin-top: -3%;">
               <!-- Form Module-->
               <?php

           include("dbase.php");                     
                      $id = $_GET['id'];
                      $user_id = $_SESSION['SESS_MEMBER_ID'];

                      $query ="SELECT comment_id, page_fk, comment_text, user_fk, page_name FROM comment_table, page_info WHERE 
                      comment_table.comment_id='$id' AND comment_table.user_fk='$user_id' AND page_info.page_id=comment_table.page_fk";

                      $result = mysqli_query($conn,$query) or die ("Could not execute query");
                      $row = mysqli_fetch_assoc($result);
                      $comment_id = $row["comment_id"];
                      $comment_text = $row["comment_text"];
                      $page_fk = $row["page_fk"];
                      $page_name = $row["page_name"];

                      ?>
                    <!-- Form Module-->

                    <form method="POST" action="user_updateComment_script.php?id=<?php echo $id?>" enctype="multipart/form-data" id="pageform">
                    <div class="module form-module">

                      <div class="form" align="center">
                        
                          <table>  
                          <h1> Comment</h1>
                          <h2 >For Page: <?php echo $page_name ?></h2>
                          <tr>          
                                <td ></p></td>
                                <td><textarea name="comment_text" rows="5" cols="80"  form="pageform" style="resize: none" > <?php echo $comment_text; ?>
                                  
                                </textarea> </td>
                        </tr>
                        <td>
                          <input type="hidden" name="page_fk" value="<?php echo $page_fk ?>">
                        </td>

                            
                              
                          </table>
                          <div style="text-align: center;">
                            <br>
                          <button>Edit Comment</button>
                          </div>
                          <br>

                    
            </form>
            </div>
         </div>
      </div>
</body>
</html>


