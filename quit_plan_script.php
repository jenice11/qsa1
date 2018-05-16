`<?php
  session_start();
 include("dbase.php");


  $quit_plan_id = $_POST['id'];
  $date = date("d-m-Y");
  $reason = $_POST['reason'];
  $frequency_smoke_daily = $_POST['frequency_smoke_daily'];
  $when_craving = $_POST['when_craving'];
  $price_cigarette = $_POST['price_cigarette'];
  $u_id = $_SESSION['SESS_USER_ID'];
  $advisor_fk = $_POST['advisor_id'];
             


  $query = "INSERT into quit_plan (quit_plan_id,tarikh,reason, frequency_smoke_weekly, frequency_smoke_daily, when_craving,price_cigarette, user_fk, advisor_fk  ) VALUES($c_id, $foodid, $quantity, '$date')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
        
  echo "<script type= 'text/javascript'> window.location='cust_viewOrder.php'</script>";
  // echo $c_id;
}
?>
  