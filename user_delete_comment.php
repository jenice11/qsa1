<?php
include ("dbase.php"); 
$idURL = $_GET['id'];
$page_id = $_POST["page_id"];

$query = "DELETE FROM comment_table WHERE comment_id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query");
if($result){
echo "<script type= 'text/javascript'> alert('Comment Deleted')
  window.location='user_view_pageEntry.php?id=$page_id'</script>";

}
?>