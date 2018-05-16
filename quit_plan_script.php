`<?php
  session_start();
 include("dbase.php");

  $advisor_id = $_POST['advisor_id'];
  $tarikh = date("d-m-Y");
  $reason = $_POST['reason'];
  $frequency_smoke_weekly = $_POST['frequency_smoke_weekly'];
  $frequency_smoke_daily = $_POST['frequency_smoke_daily'];
  $when_craving = $_POST['when_craving'];
  $price_cigarette = $_POST['price_cigarette'];
    


  $query = "INSERT into quit_plan (advisor_fk, tarikh,reason, frequency_smoke_weekly, frequency_smoke_daily, when_craving, price_cigarette )      VALUES($advisor_id, $tarikh, '$reason', '$frequency_smoke_weekly', '$frequency_smoke_daily', '$when_craving', '$price_cigarette')
            ";

  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
        
  echo "<script type= 'text/javascript'> window.location='cust_viewOrder.php'</script>";
  // echo $c_id;
}
?>
  