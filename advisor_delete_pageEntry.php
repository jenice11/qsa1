<?php
include ("dbase.php"); 
$idURL = $_GET['id'];
$query = "DELETE FROM page_info WHERE page_id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in edit.php");
if($result){
echo "<script type= 'text/javascript'> window.location='advisor_view_infopage.php'</script>";}
?>