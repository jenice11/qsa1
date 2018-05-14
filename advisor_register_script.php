`<?php

  include('dbase.php');

  $advisor_name=$_POST['advisorname'];
  $advisor_password=$_POST['password'];
  $advisor_email=$_POST['email'];
  $advisor_phone=$_POST['phonenumber'];
  $advisor_age=$_POST['age'];
  $advisor_gender=$_POST['gender'];
  $advisor_experience=$_POST['experience'];
 

  
  
 
 $query = "INSERT INTO advisor_info (advisor_name, advisor_password, advisor_email, advisor_phone, advisor_age, advisor_gender, advisor_experience) VALUES ('$advisor_name', '$advisor_password', '$advisor_email', '$advisor_phone', '$advisor_age','$advisor_gender', '$advisor_experience=')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){

  echo "<script type= 'text/javascript'> window.location='login.php?status=signupsuccessfull'</script>";
}
else 
{
    echo "Insertion Failed: " . $query . "<br>" . mysqli_error($conn);
}
?>
 