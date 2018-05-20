<?php

  include('dbase.php');
   include("authenticator.php");

   $comment_id = $_GET['id'];
   $user_id = $_SESSION['SESS_MEMBER_ID'];
   $page_fk = $_POST['page_fk'];
   $comment_text= $_POST['comment_text'];
   $comment_date = date("Y-m-d H:i:s");

   $query = "SELECT page_id, page_fk from page_info, comment_table WHERE page_info.page_id=comment_table.page_fk";

$query = "UPDATE comment_table SET comment_text='$comment_text', comment_date='$comment_date'
            WHERE comment_id='$comment_id'";

  $result = mysqli_query($conn,$query) or die ("Could not execute 2query");

if($result){
         
  echo "<script type= 'text/javascript'> alert('Comment Edited')
  window.location='user_view_pageEntry.php?id=$page_fk'</script>";
}
?>

