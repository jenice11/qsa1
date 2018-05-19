<?php

  include('dbase.php');
   include("authenticator.php");

  $page_id = $_GET['id'];
  $page_name = $_POST['pagename'];
  $page_text = $_POST['page_text'];
  $advisor_id = $_SESSION['SESS_MEMBER_ID'];
  $page_date = date("Y-m-d H:i:s");

$fileinfo=PATHINFO($_FILES['photo']['name']);

  if(empty($fileinfo['filename'])){
    $location="";
  }
  else{
  $newFilename=$fileinfo['filename'] . "." . $fileinfo['extension'];
  move_uploaded_file($_FILES["photo"]["tmp_name"],"images/pageinfo/" . $newFilename);
  $location="images/pageinfo/" . $newFilename;
  }

 $query = "UPDATE page_info SET page_name='$page_name', page_text='$page_text', page_photo='$location', 
            page_date='$page_date', advisor_fk='$advisor_id'
            WHERE page_id='$page_id'";

  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
        
  echo "<script type= 'text/javascript'> alert('Page Entry Updated')
  window.location='advisor_view_infopage.php'</script>";
  // echo $c_id;
}
?>
