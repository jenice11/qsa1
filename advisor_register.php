<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="home.png">
        <title>Quit Smoking Advisor</title>
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
  
    <style type="text/css">
      body {
  background: #e9e9e9;
  color: #000000;
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
  max-width: 500px;
  width: 100%;
  border-top: 10px solid #E5334B;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  margin: 0 auto;
  margin-top: 20%;
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
  background: #E5334B;
  width: 100%;
  border: 0;
  padding: 10px 15px;
  color: #ffffff;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}
.form-module button:hover {
  background: #FF4A62;
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

.labelform{
  font-size: 12pt;
  color:#262626;"
}
    </style>
   <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="images/logo.png" alt="" >
                        </a>

                        
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="index.php" >Home</a>
                            </li>
                            <li><a href="quit_plan.php">Quit Plan</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Info Wall <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="health_effects.php">Health Effects</a></li>
                                        <li><a href="cigarette_contains_what.php">Cigarette contains what?</a></li>
                                        <li><a href="why_smoke.php">Why Teenagers or Children Smoke</a></li>
                                    </ul>
                                </div>
                            </li>         
                            <li><a href="contact.php">Contact Us</a></li>
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
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="user_register.php">As User</a></li>
                                        <li><a href="advisor_register.php">As Advisor</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>   
      

<section id="hero-area" >
<div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <div class="pen-title">
  <h1></h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    
  </div>
  <div class="form">
    <form method="POST" action="advisor_register_script.php" enctype="multipart/form-data">
    <h1>Create an account <br> As Advisor</h1>

        <div  style="color:black; text-align: left;">
        <label for="advisorname" class="labelform"><b>Name :</b></label>
        <input type="text" placeholder="Name" name="advisor_name"  required>

        <label for="password" class="labelform"><b>Password :</b></label>
        <input type="password" placeholder="Password" name="password" required>

        <label for="email" class="labelform"><b>Email Address :</b></label>
        <input type="email" placeholder="example@gmail.com" name="email" required>

        <label for="phonenumber" class="labelform"><b>Phone Number :</b></label>
        <input type="text" name="phonenumber" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"required />

        <label for="age" class="labelform"><b>Age :</b></label>
        <input type="number" placeholder="Age" name="age" required>

        <label for="gender" class="labelform"><b>Gender :</b></label>
        <br>
        <label class="radio-inline"><input type="radio" style="width: 15px" name="gender" value="male" required>Male</label>
        <label class="radio-inline"><input type="radio" style="width: 15px" name="gender" value="female">Female</label><br><br>

        <label for="experience" class="labelform"><b>Any Experience as a medical practitioner:</b></label>
        <input type="text" placeholder="e.g: Resident in Hospital AAA for 5 years/ Private doctor" name="experience" required>

      </div>
        <button>Register</button>
    </form>
  </div>
                   
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

</html>
