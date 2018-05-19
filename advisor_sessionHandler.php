<?php
/*
 Filename: sessionHandler.php
 Purpose: To handle login information and create a session for that advisor.
*/

//Start session
session_start();



//Validation error flag
$errflag = false;

//Input Validations
if ($_POST['advisor_email'] == '')
{
    $errmsg_arr[] = 'Email address missing';
    $errflag = true;
}

if ($_POST['advisor_password'] == '')
{
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
}

//If there are input validations, redicrect back to the login form
if ($errflag)
{
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
}


// to make a connection with database
$conn = mysqli_connect("localhost", "root", "") or die (mysqli_error()); 

// To select one particular database to be used 
mysqli_select_db($conn,"qsadatabase") or die(mysqli_error());

// to create a query to be executed in sql
$advisor_email = $_POST['advisor_email'];
$advisor_password = $_POST['advisor_password'];
$query = "SELECT * FROM advisor_info WHERE advisor_email = '$advisor_email' AND advisor_password = '$advisor_password'";
    
// to run sql query in database
$result = mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));

// Check whether the query was sucessful or not
if (isset($result))
{
    if (mysqli_num_rows($result) == 1)
    {

        //Login Successful
        session_regenerate_id();
        $member = mysqli_fetch_assoc ($result);
        $_SESSION ['SESS_MEMBER_ID'] = $member['advisor_id'];
        $_SESSION ['SESS_NAME'] = $member['advisor_name'];
        $_SESSION ['STATUS'] = true;

        session_write_close();
        header("location: advisor_login-successful.php");
        exit();
    }
    else
    {
        //Login Failed
        header("location: login-failed.php");
        exit();    
    }
}
else
{
    die("Query failed");    
}

?>