<!DOCTYPE html>
<html lang="en" >

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

/* Pen Title */
.pen-title {
  padding: 50px 0 30px 0;
  text-align: center;
  letter-spacing: 2px;
}
.pen-title h1 {
  margin: 0 0 20px;
  font-size: 48px;
  font-weight: 300;
}
.pen-title span {
  font-size: 12px;
}
.pen-title span .fa {
  color: #33b5e5;
}
.pen-title span a {
  color: #33b5e5;
  font-weight: 600;
  text-decoration: none;
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
  margin-top: -215px;
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

  /* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;


}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    color: #333333;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    color: #333333;
}

.ermsg {
      position: absolute;
      bottom: 10px;
      right: 10px;
      padding-right: 100px;
      font-size: 16pt;
    }


    </style>
<?php
/*
  Filename: login.php
  Purpose: Login interface
*/
 //Start Session
 session_start();

?>
    

<?php  include("/header.php");   ?> 

<?php
            // to display error message if username and password is invalid
                if (isset($_SESSION['ERRMSG_ARR']))
                {
                    echo "<h1 class='ermsg'>Error found: ";
                    for ($i=0; $i<count($_SESSION['ERRMSG_ARR']); $i++)
                    {
                        echo $_SESSION['ERRMSG_ARR'][$i]."!";
                    }
                    echo "</h1>";
                    unset($_SESSION['ERRMSG_ARR']);
                }  
            ?>

<div class="side side-right" >

        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success_alert" style="margin-bottom:-50px; visibility :hidden">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Sign Up successfull!</strong> You can login now!! Enjoy!!
      </div>


      <?php

        if(isset($_GET['status'])) {
          // echo "<script type='text/javascript'> $('.alert').alert() </script>";

          echo "<script type='text/javascript'> 
          document.getElementById('success_alert').style.visibility = 'visible'
          </script>";
        }
        else  {
        }
        ?>

<section id="hero-area" >
<div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <div class="pen-title">
  <h1></h1>
</div>
</head>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    
  </div>
  <div class="form">
    <h1>Login in Now</h1>
          <!-- for tab -->
          <div class="tab">
          <button class="tablinks" onclick="openAccount(event, 'User')" style="background-color: #33b5e5; margin-bottom: 2%;"  >User</button>    
          <button class="tablinks" onclick="openAccount(event, 'Advisor')" style="background-color: #E5334B; margin-bottom: 2%;">Advisor</button>
        </div>

        <div id="User" class="tabcontent" style="text-align: left;" >
          <form method="post" action="user_sessionHandler.php">
              <h3 style="text-align: center; padding-bottom: 2%;">As User</h3>

              <label for="user_email" class="labelform"><b>Email Address :</b></label>
              <input type="email" placeholder="example@gmail.com" name="user_email" required>

              <label for="user_password" class="labelform"><b>Password :</b></label>
              <input type="password" placeholder="Password" name="user_password" required>

              <p style="text-align: center">Don't have an account yet?  <a href="user_register.html"><br>Register Now as User</a></p> 

              <button type="submit">User Login</button>

            </form>
        </div>

        <div id="Advisor" class="tabcontent" style="text-align: left;" >
          <form method="post" action="advisor_sessionHandler.php">
              <h3 style="text-align: center; padding-bottom: 2%;">As Advisor</h3>

              <label for="advisor_email" class="labelform"><b>Email Address :</b></label>
              <input type="email" placeholder="example@gmail.com" name="advisor_email" required>

              <label for="advisor_password" class="labelform"><b>Password :</b></label>
              <input type="password" placeholder="Password" name="advisor_password" required>

              <p style="text-align: center;">Don't have an account yet?  <a href="advisor_register.html"><br>Register Now as Advisor</a></p> 

          <button type="submit">Advisor Login</button>

        </form>
        </div>

        <script>
        function openAccount(evt, accountName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(accountName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        </script>

       <?php
            // to display error message if username and password is invalid
                if (isset($_SESSION['ERRMSG_ARR']))
                {
                    echo "<h1 class='ermsg'>Error found: ";
                    for ($i=0; $i<count($_SESSION['ERRMSG_ARR']); $i++)
                    {
                        echo $_SESSION['ERRMSG_ARR'][$i]."!";
                    }
                    echo "</h1>";
                    unset($_SESSION['ERRMSG_ARR']);
                }  
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</head>
</html>

