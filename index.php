<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php  
        include("authenticator.php");
        include("user_header.php");   ?> 
        
        <style type="text/css">
            

        </style>
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
        <div class="section-heading" style="margin-top: -5%; margin-bottom: -30%;">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s" >Information posted by our Advisors</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                These information may be useful!
            </p>
        </div>
    </div>
</section>
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <?php
                include("dbase.php");

                $query ="SELECT page_id, page_name, page_text, page_photo, page_date, advisor_name, advisor_id, advisor_fk from page_info, advisor_info WHERE advisor_info.advisor_id=page_info.advisor_fk";

                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0){ 
                // output data of each row
                while($row = mysqli_fetch_assoc($result)){

                $id = $row["page_id"];
                $page_name = $row["page_name"];
                $page_text = $row["page_text"];
                $page_photo = $row["page_photo"];
                $page_date = $row["page_date"];
                $advisor_name = $row["advisor_name"];

                
                ?>
                <hr>
                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="user_view_pageEntry.php?id=<?php echo $id; ?>"><img class="img-responsive" src="<?php echo $page_photo; ?>" alt="" width="250px" height="250px"/></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="user_view_pageEntry.php?id=<?php echo $id; ?>"><?php echo $page_name ?></a>
                        </h2>
                        <div class="blog-meta">
                            <span><?php echo $page_date ?>;</span>
                            <span>by <?php echo $advisor_name ?></span>
                        </div>
                        <p><?php echo $page_text ?>
                        </p>
                        <a href="user_view_pageEntry.php?id=<?php echo $id; ?>" class="btn btn-dafault btn-details">Read</a>
                        <?php

                }
                }else{
                    echo "No results";
                }
                ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
             
            </p>

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