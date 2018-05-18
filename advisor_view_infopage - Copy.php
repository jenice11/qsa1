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
                    <h2>View Page Entry</h2>
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
			<?php
			    include("dbase.php");
			    $business_id = $_SESSION['SESS_MEMBER_ID'];

				$query ="SELECT food_id, f_name, f_photo, f_price, b_location, b_timeStart, b_timeEnd FROM food_info, business_info, business_food_mapping WHERE  food_info.food_id = business_food_mapping.food_fk AND business_info.business_id=business_food_mapping.business_fk AND business_info.business_id='$business_id'"; 

				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result) > 0){ 
				// output data of each row
				while($row = mysqli_fetch_assoc($result)){
				$id = $row["food_id"];
				$f_name = $row["f_name"];
				$f_photo = $row["f_photo"];
			 	$f_price = $row["f_price"];
			  	$b_location = $row["b_location"];
			   	$b_timeStart = $row["b_timeStart"];
			    $b_timeEnd = $row["b_timeEnd"]; 
			    ?>
				<div class="card card-padding">
					  <div class="card-block">
					  	<div class="row">
					  		<div class="col-sm-6" align="center" id="photo">
					  			<img src="<?php echo $f_photo; ?>" width="100%">
					 	 	</div>

					  		<div class="col-sm-6" align="left">
					  		<h4 class="card-title"> <?php echo $f_name; ?> </h4>
					  		<hr>
					  			<table>
					  				<tr>
					  					<td style="width:30%" class="first"><p class="card-text">Posted By:</p></td>
					  					<td style="width:70%" >: <?php echo $_SESSION['SESS_NAME']; ?></td>
					  				</tr>
					  				
					  				<tr>
					  					<td class="first"><p class="card-text">Time  </p></td>
					  					<td>: <?php echo date('g:ia ', strtotime($b_timeStart)); ?> - <?php echo date('g:ia ', strtotime($b_timeEnd)); ?></td>
					  				</tr>
					  				
					  				<tr>
					  					<td class="first"><p class="card-text">Price  </p></td>
					  					<td>: <?php echo "RM ".$f_price; ?></td>
					  				</tr>
					  			</table>   
							    
							    <br>
							    <div align="right">
								    <a href="advisor_update_pageEntry.php?id=<?php echo $id; ?>" class="btn btn-success"><b>Update</b></a>
								    <a href="advisor_delete_pageEntry.php?id=<?php echo $id; ?>" class="btn btn-danger "><b>Delete</b></a>
							    </div>
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

</body>
</html>