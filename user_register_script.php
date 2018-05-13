`<?php

  include('dbase.php');

  $user_name=$_POST['username'];
  $user_password=$_POST['password'];
  $user_phone=$_POST['phonenumber'];
  $user_gender=$_POST['gender'];
  $user_email=$_POST['email'];
  $user_age=$_POST['age'];
  $c_location=
  
 
 $query = "INSERT INTO user_info (user_name, user_password, user_phone, user_gender, , user_email, user_age) VALUES ('$user_name', '$user_password', '$user_phone', '$user_gender', '$user_email', '$user_age')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){

  echo "<script type= 'text/javascript'> window.location='login.php?status=signupsuccessfull'</script>";
}
else 
{
    echo "Insertion Failed: " . $query . "<br>" . mysqli_error($conn);
}
?>
 