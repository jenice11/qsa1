`<?php

  include('dbase.php');

  $user_name=$_POST['username'];
  $user_password=$_POST['password'];
  $user_email=$_POST['email'];
  $user_phone=$_POST['phonenumber'];
  $user_age=$_POST['age'];
  $user_gender=$_POST['gender'];
 

  
  
 
 $query = "INSERT INTO user_info (user_name, user_password, user_email, user_phone, user_age, user_gender) VALUES ('$user_name', '$user_password', '$user_email', '$user_phone', '$user_age','$user_gender')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){

  echo "<script type= 'text/javascript'> window.location='login.php?status=signupsuccessfull'</script>";
}
else 
{
    echo "Insertion Failed: " . $query . "<br>" . mysqli_error($conn);
}
?>
 