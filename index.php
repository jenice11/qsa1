<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php  
        include("authenticator.php");
        include("user_header.php");   ?> 
        
    </head>

<?php
session_start(); ?>
<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>Stop Smoking Now & You can make a difference</span><br>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">FOR YOUR HEALTH</b>
                        <b>FOR YOUR FAMILY</b>
                        <b>FOR THE FUTURE</b>
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        With the online quit smoking plan,<br> you can gain more years ahead in your life .
                    </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works">More Info about the plan</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->


<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Information posted by our Advisors</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Choose your type of quit plan that you will conquer for that duration of time.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <?php
                include("dbase.php");

                $query ="SELECT business_id, b_name, b_location, b_timeStart, b_timeEnd, b_photo from business_info"; 
                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0){ 
                // output data of each row
                while($row = mysqli_fetch_assoc($result)){

                $id = $row["business_id"];
                $b_photo = $row["b_photo"];
                $b_name = $row["b_name"];
                $b_location = $row["b_location"];
                $b_timeStart = $row["b_timeStart"];
                $b_timeEnd = $row["b_timeEnd"]; 

                
                ?>
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="<?php echo $b_photo; ?>" style="width:100%;" class="img-responsive" alt=""/>
                        <div class="overlay">

                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        <a href="cust_orderFood.php?id=<?php echo $id; ?>">
                           <div class="inner_content clearfix">
                            <div class="product_image" id="photo">
                                

                                <div class="label-product">
                                <span class="new">From RM 5++</span> </div>
                                <div class="mask" >

                                    <h2> <?php echo $b_name; ?></h2>
                                    
                                    <h3> One of the UMP best food ordering. Don't miss the chance to eat good food</h3>
                                    <div class="info"><i class="fa fa-search-plus"></i> </div>
                                </div>
                    </a>
                    </h4>
                    <p>
                        <h3><a href="cust_orderFood.php?id=<?php echo $id?> <?php $b_location?>"> <?php echo $b_name; ?></a></h3>
                          <div class="underheader-line"></div><br>
                     
                          <p><?php echo $b_location; ?></p>
                          <p><?php echo date('g:ia ', strtotime($b_timeStart)); ?> - <?php echo date('g:ia ', strtotime($b_timeEnd)); ?></p>
                    </figcaption>
                </figure>
            </div>

             <?php

                }
                }else{
                    echo "No results";
                }
                ?>
            </p>
        </div>
           
        </div>
    </div>
</section> <!-- #works -->


            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span><br> 
                            Learn More 
                            <a href="about.html"target="_blank">
                                About Us
                            </a>
                        </p>
                    </div>
                    
                </div>
            </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="plugins/jQurey/jquery.min.js"></script>
	<!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
	<!-- owl carouserl js -->
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<!-- bootstrap js -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- wow js -->
	<script src="plugins/wow-js/wow.min.js"></script>
	<!-- slider js -->
	<script src="plugins/slider/slider.js"></script>
	<!-- Fancybox -->
	<script src="plugins/facncybox/jquery.fancybox.js"></script>
	<!-- template main js -->
	<script src="js/main.js"></script>
 	</body>
</html>