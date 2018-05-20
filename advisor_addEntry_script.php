<?php
  include('dbase.php');
   include("authenticator.php");
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
  $query = "SELECT advisor_id, from advisor_info WHERE advisor_id='$advisor_id'";
 $query = "INSERT into page_info (advisor_fk, page_name, page_photo, page_text, page_date ) VALUES('$advisor_id', '$page_name', '$location', '$page_text', '$page_date')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");
if($result){
        
  echo "<script type= 'text/javascript'> alert('Page Entry Added')
  window.location='advisor_view_infopage.php'</script>";
}
?>