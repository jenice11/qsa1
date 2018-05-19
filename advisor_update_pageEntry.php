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
#user {
      padding-top: 45px;
      padding-left: 250px;
      position: absolute;
    }
    /* Form Module */
            .form-module {
              position: relative;
              margin-left: 32%;
              background: #FCFCFC;
              max-width: 800px; 
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
                    <h2>Update Entry</h2>
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
                      $advisor_id = $_SESSION['SESS_MEMBER_ID'];

                      $query ="SELECT page_id, advisor_name, advisor_fk, page_name, page_photo, page_text, page_date FROM page_info, advisor_info WHERE 
                      page_id='$id'";

                      $result = mysqli_query($conn,$query) or die ("Could not execute query");
                      $row = mysqli_fetch_assoc($result);
                      $id = $row["page_id"];
                      $page_name = $row["page_name"];
                      $page_photo = $row["page_photo"];
                      $page_text = $row["page_text"];

                      ?>
                      


               
                      <div class="form" style="margin-top: -2%;">
                        <form method="POST" action="advisor_UpdateEntry_script.php?id=<?php echo $id; ?>" enctype="multipart/form-data" id="pageform">
<div class="col-md-3">
                <label class="control-label"><b>Add page image here:</b></label><br>
                                  <input type="file" name="photo" onchange="loadFile(event)" accept="image/*">
                                  <br><br>
                            <img  id="output" width="200px"/>
                              <script>
                                var loadFile = function(event) {
                                  var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                              </script>
              </div>

                    <!-- Form Module-->
                    <div class="module form-module">

                      <div class="form" >
                        
                          <table style="margin: 2.5%;">  
                          <h1 style="text-align: center"> Page Info </h1>          
                                <td width="19%" >Page Name </p></td>
                                <td><input type="text" name="pagename" value="<?php echo $page_name; ?>">  </td>
                              </tr>
                              
                              <tr>
                                <td >Page Text </p></td>
                                <td><textarea name="page_text" rows="10" cols="79"  form="pageform" style="resize: none" > <?php echo $page_text; ?></textarea></td>
                              </tr>

                              
                          </table>
                          <div style="text-align: center;">
                          <button>Submit</button>
                          </div>

                    
            </form>
            </div>
         </div>
      </div>
</body>
</html>


