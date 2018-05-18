<!DOCTYPE html>
<html>
<head>
	<title>Welcome User</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300:700' rel='stylesheet' type='text/css'>

  <style type="text/css">
  	.btn{
  		font-size:25px;
  		width:80%;
      
  	}
  	body{
  		text-align:center;
  		color:white;
  	}
  	h2{
  		font-weight: bold;
  		margin-top:0px;
  	}
  	* {
   	 box-sizing: border-box
	} 
 	a{
 		display:block;
 		width:60%;


 	}
 	.card{
 		border: 3px solid white;
 		height: 400px;
 		padding:20px;
 		padding-top: 60px;
 		padding-bottom: 60px;


 	}
 	p{
 		font-size:21px;
 	}
 	body{

 		background: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url("images/Healthy-Lifestyle1.jpg");

		background-size:cover;

		font-size:15px;
 	}
 	.container{
 		margin-top:20px;
 	}
 	img{
 		width:200px;
 		height:200px;
 	}
 	
 	h1{
 		color:White;
 		font-family: 'Open Sans Condensed', sans-serif;
 		font-weight: 800;
 		font-size:4.5em;
    display: inline-block;
    padding-right: 300px;
    margin-left:380px;
    
 	}
 	span{
 		color:white;
 		font-size:35px;
 	}

 	.glyphicon{
 		font-size:70px;
 	}
  .logout{
    border:none;
    background:none;
    color:white;
     
    font-size:16px;
  }



  </style>
</head>
<body>

  <h1>Quit Smoking Advisor</h1><button onclick="location.href='logout.php';" class="logout">Logout</button>

  
  <br>
 <div class="container">
  <div class="row">

<div id="user"> 
        <?php
          /*
           Filename: login-successful.php
           Purpose: To display protected web page if user is valid.
           Note: If you enter directly to this page, you will be checked by the authenticator, and then redirect to login-failed.html.
          */

          include("authenticator.php");
          echo "<h2>Welcome, Advisor ".$_SESSION['SESS_NAME']." </h2>";
          ?>
        </div>

  
  <br>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-block">
      	<span class="  glyphicon glyphicon-plus-sign"></span>
      	<br><br>
        <h2 class="card-title">Add New Entry</h2>
        <p class="card-text">Post any useful information for the users </p>
       	<br>
        <a href="advisor_addEntry.php" class="btn btn-success">Add Entry</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-block">
      <span class="glyphicon glyphicon-cutlery"></span>
      <br><br>
        <h2 class="card-title">Existing Entry</h2>
        <p class="card-text">View what you have posted so far in system</p>
        <br>
        <a href="advisor_view_infopage.php" class="btn btn-warning">View Entry</a>
      </div>

    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-block">
        <span class="glyphicon glyphicon-list-alt"></span>
        <br><br>
        <h2 class="card-title">Quit Plan List</h2>
        <p class="card-text">View who is under your care on the quit plan</p>
        <br>
        <a href="advisor_view_quitplan.php" class="btn btn-info">View List</a>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>