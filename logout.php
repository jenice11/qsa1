<!DOCTYPE HTML>
<html>
<head>

  <meta charset="UTF-8">
  <title>Login</title>

  <style type="text/css">
      body {
  background: #e9e9e9;
  color: #666666;
  font-family: 'RobotoDraft', 'Roboto', sans-serif;
  font-size: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


/* Form Module */
.form-module {
  position: relative;
  background: #FCFCFC;
  max-width: 400px;
  padding-bottom: 20px;
  width: 100%;
  border-top: 10px solid #33b5e5;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  margin: 0 auto;
}

.form-module .form {
  display: none;
  padding: 30px;
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
  outline: none;
  display: block;
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
  width: 100%;
  border: 0;
  padding: 10px 15px;
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

/* slide */
#hero-area {
  background: url('../images/slider.jpg') no-repeat 20%;
  background-size: cover;
  background-attachment: fixed;
  margin-top: -100px;
  padding: 50px 0;
  color: #fff;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
  position: relative;
}


#hero-area h1 {
  font-size: 40px;
  line-height: 50px;
  color: #333;
  font-weight: 700;
  margin-bottom: 15px;
  text-transform: uppercase;
}
#hero-area h2 {
  font-size: 18px;
  font-weight: 300;
  margin-bottom: 38px;
  line-height: 27px;
  text-transform: uppercase;
  color: #666;
  font-family: 'Roboto', sans-serif;
  margin-top: 25px;
}

    </style>


  <?php  include("user_header.php");   ?> 


</head>

<?php
/*
 Filename: logout.php
 Purpose: To logout from website and destroy the self identity.
*/

// Start session
session_start();

// Unset the variables stored in session
session_destroy();

?>
    <body>
        <section id="hero-area" >
<div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
</head>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    
  </div>
  <div class="form">
    <h1>You have logged out<br><br>Have a nice day</h1><br>
                    <hr>
                    <p style="font-size: 16pt;"><a href="login.php"> Login Again</a></p><br>
       
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>