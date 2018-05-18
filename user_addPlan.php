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
#user {
      padding-top: 45px;
      padding-left: 250px;
      position: absolute;
    }
    /* Form Module */
            .form-module {
              position: relative;
              margin-left: 20%;
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

</style>

</head>
<body>

     
        <?php
          /*
           Filename: login-successful.php
           Purpose: To display protected web page if user is valid.
           Note: If you enter directly to this page, you will be checked by the authenticator, and then redirect to login-failed.html.
          */
          echo "<h3>Welcome, Seller ".$_SESSION['SESS_NAME']." </h3>";
          $id = $_SESSION['SESS_MEMBER_ID'];
          ?>
        </div>
      

    <!------------ Start Content ---------------->
    <!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block" style="margin-top: -8%; margin-bottom: -5%;">
                    <h2>Add New Entry</h2>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->


<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="post-content">
               <!-- Form Module-->
                    

                      <div class="form" style="margin-top: -2%;">
                        <form method="POST" action="advisor_addEntry_script.php" enctype="multipart/form-data">
<div class="col-md-3">
                <label class="control-label"><b>Add food image here:</b></label><br>
                                  <input type="file" name="photo" onchange="loadFile(event)" accept="image/*">
                                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                                  <br><br>
                            <img  id="output" width="300px"/>
                              <script>
                                var loadFile = function(event) {
                                  var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                              </script>
              </div>

                   <div class="col-md-7" align="center">
                                  
  <div class="form-group" >
                           <label for="foodname"><b>Food Name :</b></label>
                          <input type="text" name="foodname" class="form-control " placeholder="e.g : Nasi Goreng">
  </div>
  <br>
  <div class="form-group" >
                           <label for="price"><b>Price (RM):</b></label>
                           <input type="number" name="price" class="form-control " placeholder="e.g : 5">
  </div>
                          <br>

                          <input type="submit" class="btn btn-primary" value="Sell Food">

                    <div class="clearfix"></div> 

                    <div class="clearfix"></div>
                         </div>
                         </div>
              </div>



                    
            </form>
            </div>
         </div>
      </div>
</body>
</html>


