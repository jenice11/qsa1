<!DOCTYPE html>
<html>
<head>

    <?php 
include("advisor_header.php");

?>
<style type="text/css">


  body {
    background-image: url("./images/background.png"); 
    background-size: auto;
    background-repeat: no-repeat;
  }
  #columnb{
    border: solid;
    padding: 30px;

  }

</style>
  
</head>
<body>
 <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Advisor Home</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=======================================
=            Blog Left sidebar            =
========================================-->

<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-4" id="columnb">
        <h2 class="card-title">Add New Entry</h2>
        <p class="card-text">Post any useful information for the users </p>
       	<br>
        <a href="advisor_addEntry.php" class="btn btn-success">Add Entry</a>
      </div>

      <div class="col-md-4" id="columnb">
    <div class="card">
      <div class="card-block">
        <h2 class="card-title">Existing Entry</h2>
        <p class="card-text">View what you have posted so far in system</p>
        <br>
        <a href="advisor_view_infopage.php" class="btn btn-warning">View Entry</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4" id="columnb">
    <div class="card">
      <div class="card-block">
        <h2 class="card-title">Quit Plan List</h2>
        <p class="card-text">View who is under your care on the quit plan</p>
        <br>
        <a href="advisor_view_quitplan.php" class="btn btn-info">View List</a>
      </div>
    </div>
  

    </div>
  </div>
  
  </div>
</div>
</div>
</body>
</html>