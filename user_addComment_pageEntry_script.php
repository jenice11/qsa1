<?php

  include('dbase.php');
   include("authenticator.php");

   $comment_id = $_GET['id'];
   $user_id = $_SESSION['SESS_MEMBER_ID'];
   $page_id = $_POST['page_id'];
   $comment_text = $_POST['comment_text'];
   $comment_date = date("Y-m-d H:i:s");


$query = "SELECT user_id, user_fk, page_fk, page_id from user_info, comment_table,page_info WHERE user_info.user_id=comment_table.user_fk AND page_info.page_id=comment_table.page_fk AND comment_table.user_fk='$user_id' ";

$query = "INSERT into comment_table (comment_text, user_fk, page_fk, comment_date) VALUES ('$comment_text', '$user_id', '$page_id' , '$comment_date')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");


if($result){
        
  echo "<script type= 'text/javascript'> alert('Comment Added')
  window.location='user_view_pageEntry.php?id=$page_id'</script>";
}
?>

