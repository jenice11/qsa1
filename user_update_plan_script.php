<?php
 include("authenticator.php");
 include("dbase.php");

  $quitdate = strtotime($_POST['quitdate']);
  $quitdate = date('Y-m-d H:i:s', $quitdate);
  $reason = $_POST['reason'];
  $frequency_smoke_weekly = $_POST['frequency_smoke_weekly'];
  $frequency_smoke_daily = $_POST['frequency_smoke_daily'];
  $when_craving = $_POST['when_craving'];
  $price_cigarette = $_POST['price_cigarette'];
  $user_id = $_SESSION['SESS_USER_ID'];
  $advisor_id = $_POST['advisor_id'];

  $query = "SELECT advisor_id, from advisor_info WHERE advisor_id='$advisor_id'";

  $query = "UPDATE quit_plan SET quit_date='$quitdate', reason='$reason', 
            frequency_smoke_weekly='$frequency_smoke_weekly',  frequency_smoke_daily='frequency_smoke_daily',
            when_craving='$when_craving', price_cigarette='$price_cigarette', advisor_fk='$advisor_id'
            WHERE user_fk='$user_id'";
            


  $result = mysqli_query($conn,$query) or die ("Could not execute query");


if($result){
         
  echo "<script type= 'text/javascript'> alert('Plan Details Updated'); 
  window.location='user_view_plan.php'</script>";
}
?>
  