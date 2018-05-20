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
  $user_id = $_SESSION['SESS_MEMBER_ID'];
  $advisor_id = $_POST['advisor_id'];

  $query = "SELECT advisor_id, from advisor_info WHERE advisor_id='$advisor_id'";
    $query = "SELECT user_id from user_info WHERE user_id='$user_id'";
  $query = "INSERT into quit_plan (quit_date, reason,  frequency_smoke_weekly,  frequency_smoke_daily, when_craving, price_cigarette, user_fk, advisor_fk)
            VALUES ('$quitdate', '$reason', '$frequency_smoke_weekly', '$frequency_smoke_daily', '$when_craving', '$price_cigarette','$user_id', '$advisor_id')";

  $result = mysqli_query($conn,$query) or die ("Could not execute 1query");



if($result){
        
  echo "<script type= 'text/javascript'> alert('Quit Plan Created')
  window.location='user_view_plan.php'</script>";

}
?>
  