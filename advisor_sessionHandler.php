<?php
/*
 Filename: sessionHandler.php
 Purpose: To handle login information and create a session for that user.
*/

//Start session
session_start();



//Validation error flag
$errflag = false;

//Input Validations
if ($_POST['user_email'] == '')
{
    $errmsg_arr[] = 'Email address missing';
    $errflag = true;
}

if ($_POST['user_password'] == '')
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
$matricnum = $_POST['user_email'];
$password = $_POST['user_password'];
$query = "SELECT * FROM user_info WHERE user_email = '$user_email' AND user_password = '$user_password'";
    
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
        $_SESSION ['SESS_CUSTOMER_ID'] = $member['user_email'];
        $_SESSION ['SESS_NAME'] = $member['user_name'];
        $_SESSION ['STATUS'] = true;

        session_write_close();
        header("location: user_login-successful.php");
        exit();
    }
    else
    {
        //Login Failed
        header("location: login-failed.html");
        exit();    
    }
}
else
{
    die("Query failed");    
}

?>