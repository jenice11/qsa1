`<?php
  session_start();
  include('dbase.php');

  $date = date("d-m-Y");
  $user_name=$_POST['username'];

  $user_password=$_POST['password'];
  $user_email=$_POST['email'];
  $user_phone=$_POST['phonenumber'];
  $user_age=$_POST['age'];

  $user_gender=$_POST['gender'];
 

  
  
 
  $query = "INSERT INTO quit_plan_mappingcustomer_fk,food_fk,quantity, tarikh) VALUES($c_id, $foodid, $quantity, '$date')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){

 echo "<script type= 'text/javascript'> window.location='view_quit_plan.php'</script>";
}
else 
{
    echo "Insertion Failed: " . $query . "<br>" . mysqli_error($conn);
}
?>
 
<!--
 <?php
session_start();

include("dbase.php");
$foodid = $_POST['id'];
$date = date("d-m-Y");
$quantity = $_POST['quantity'];

$c_id = $_SESSION['SESS_CUSTOMER_ID'];

$query = "INSERT into customer_food_mapping (customer_fk,food_fk,quantity, tarikh) VALUES($c_id, $foodid, $quantity, '$date')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
        
  echo "<script type= 'text/javascript'> window.location='cust_viewOrder.php'</script>";
  // echo $c_id;
}
?>