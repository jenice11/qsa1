<!DOCTYPE html>
<html>
<head>
  <?php 
include("user_header.php");
include("authenticator.php");

?>
  <script>
     new WOW().init();
  </script>
  <script>
    $(function() {
      var button = $('#loginButton');
      var box = $('#loginBox');
      var form = $('#loginForm');
      button.removeAttr('href');
      button.mouseup(function(login) {
          box.toggle();
          button.toggleClass('active');
      });
      form.mouseup(function() { 
          return false;
      });
      $(this).mouseup(function(login) {
          if(!($(login.target).parent('#loginButton').length > 0)) {
              button.removeClass('active');
              box.hide();
          }
      });
  });

    $('#my-imageupload').imageupload(options);


   </script>
  
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<style type="text/css">

   
            td{
            padding:0px;
            font-size: 16.5px;
            padding-bottom: 5px;
          }
          .first{
            font-weight: 600;
          }
          h4{
            font-weight: bold;
          }
          .btn{
            color:white;
          }

          #photo {
            height: 200px; 
            width: 200px;
            overflow: hidden;
             float: left;
          }




         #displaypic {
            width:100%;
            max-width:500px;
            max-height: :500px;
            padding-bottom: 10px;
        }

</style>


</head>
<body>

    <!------------ Start Content ---------------->
    <!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div id="user"> 
                
                </div>
            <div class="col-md-12">
               <?php
                        include("dbase.php");
                        $id = $_GET['id'];

                      $query ="SELECT page_id, advisor_name, advisor_fk, page_name, page_photo, page_text, page_date FROM page_info, advisor_info WHERE page_id=$id AND page_info.advisor_fk=advisor_info.advisor_id"; 

                      $result = mysqli_query($conn,$query);
                      if (mysqli_num_rows($result) > 0){ 
                      // output data of each row

                      while($row = mysqli_fetch_assoc($result)){
                      $id = $row["page_id"];
                      $advisor_name = $row["advisor_name"];
                      $page_name = $row["page_name"];
                      $page_photo = $row["page_photo"];
                      $page_text = $row["page_text"];
                      $page_date = $row["page_date"];
                      ?>
                <div class="block" style="margin-top: -2%;">
                    <h2><?php echo $page_name ?></h2>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->
                    
  <section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-img" align="center">
                    <img class="img-responsive" id="displaypic" alt="" src="<?php echo $page_photo; ?>" style="margin-top: -2%" >
                    <h3 align="center">Posted By <?php echo $advisor_name ?></h3>
                    <h4 align="center">At <?php echo $page_date ?></h4>
                </div>
                <div class="post-content" align="center">
                  <p><?php echo $page_text ?> </p>
                </div>
                <?php
        }
        }else{
          echo "No results";
        }
        ?>

                <div class="col-sm-12">
                  
                    <h3>Comments: </h3>
                  <?php 
                   $query ="SELECT comment_id, comment_text, comment_date, user_fk, user_name, page_fk from comment_table, page_info, user_info WHERE user_info.user_id=comment_table.user_fk AND page_info.page_id=comment_table.page_fk AND page_fk='$id' ";
                   $result = mysqli_query($conn,$query);
                      if (mysqli_num_rows($result) > 0){ 
                      // output data of each row

                      while($row = mysqli_fetch_assoc($result)){
                        $id = $row["comment_id"];
                      $page_id = $row["page_fk"];
                      $comment_text = $row["comment_text"];
                      $user_name = $row["user_name"];
                      $user_id = $row["user_fk"];
                      $comment_date = $row["comment_date"];
                    
                    ?>
                    <hr>
                    <p><?php echo $comment_text ?> </p>
                    <p>by <?php echo $user_name ?> at <?php echo $comment_date ?></p>
                       <?php


                        if ($_SESSION['SESS_MEMBER_ID'] === $user_id)
                        {
                          ?>

                            <button class="btn btn-info"><a href="user_updateComment.php?id=<?php echo $id; ?>">Edit</a></button>

                              <form method="POST" action="user_delete_comment.php?id=<?php echo $id?>" enctype="multipart/form-data" id="pageform">
                                 <input type="hidden" name="page_id" value="<?php echo $page_id ?>">
                                 <button class="btn btn-danger">Delete</button>
                               </form>

                            <?php
                        } else {
                            echo " ";
                        }


                     }
                }else{
                    echo "No comment";
                }
                ?>


                </div>
                
                <div class="col-sm-12">
                  <hr>
                  <form method="POST" action="user_addComment_pageEntry_script.php?id=<?php echo $id ?>" enctype="multipart/form-data" name="commentform" id="commentform">
                  <table >
            <tr>
                              <td width="20%">Leave a comment:</td>
                              <td width="50%">
                                 <textarea name="comment_text" rows="3" cols="70"  form="commentform" style="resize: none" placeholder="Comment Here" ></textarea>
                              </td>
                            </tr>
                            </table> 
                             <input type="hidden" name="page_id" value="<?php echo $page_id ?>">
                            <div align="center">
                              <input type="submit" value="submit" name="button" class="btn btn-info"/>
                          </div>
                        </form>
                         


            </div>
          </div>
        </div>
        
      </div>
    </div>

      </div>
    </div>
  </section>
</body>

</html>