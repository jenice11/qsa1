<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<?php  
        include("authenticator.php");
        include("/header.php");   
        $id = $_SESSION['SESS_MEMBER_ID'];
        ?> 

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
                <div class="block" style="margin-top: -3%;">
                    <h2>Add Info Page</h2>
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
        
            <div class="sign-up-form">
            <form method="POST" action="advisor_addInfo_script.php" enctype="multipart/form-data">
              <div class="row" align="center">
                <div class="col-md-2"></div>
              <div class="col-md-3">
                <label class="control-label"><b>Add image here:</b></label><br>
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
                           <label for="pagename"><b>Page Name :</b></label>
                          <input type="text" name="pagename" class="form-control " placeholder="e.g : Story 1">
  </div>
  <br>
  <div class="form-group" >
                           <label for="pagedata"><b>Page Text:</b></label><br>

                           <textarea name="pagedata" cols="87" rows="8" id="pagedata">
                </textarea>
  </div>
                          <br>

                          <input type="submit" class="btn btn-primary" value="Add page">

                    <div class="clearfix"></div>
                         </div>
                         </div>

                    
            </form>
            </div>
         </div>
      </div>
</body>
</html>


