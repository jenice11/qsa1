<?php

  include('dbase.php');

  $pagename=$_POST['pagename'];
  $pagedata=$_POST['pagedata'];
  $id=$_POST['id'];

$fileinfo=PATHINFO($_FILES['photo']['name']);

  if(empty($fileinfo['filename'])){
    $location="";
  }
  else{
  $newFilename=$fileinfo['filename'] . "." . $fileinfo['extension'];
  move_uploaded_file($_FILES["photo"]["tmp_name"],"images/pageinfo/" . $newFilename);
  $location="images/pageinfo/" . $newFilename;

 
  }
 $query = "INSERT into page_info(p_name,p_photo,p_data) VALUES('$pagename', '$location', $pagedata)";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
  $query = "SELECT page_id FROM page_info ORDER BY page_id DESC LIMIT 1";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        $page_id = $row["page_id"];

 $result = mysqli_query($conn,$query) or die ("Could not execute query");
 echo "<script type= 'text/javascript'> window.location='advisor_view_infopage.php'</script>";
}



?>