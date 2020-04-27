<?php
include("assets/inc/header.php");


if(isset($_POST['login']))
{
    $inpt_email= $_POST['inemail'];
    $inpt_email = mysqli_real_escape_string($conn, $inpt_email);
    $inpt_email = htmlentities($inpt_email);

    $inpt_pass= $_POST['inpassword'];
    $inpt_pass = mysqli_real_escape_string($conn, $inpt_pass);
    $inpt_pass = htmlentities($inpt_pass);

    $sql = "SELECT * FROM `user_signup` WHERE email_id='$inpt_email'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($run);

    if($row)
    {
        $result = mysqli_fetch_assoc($run);
          
        $dbpass = $result['password'];

        $_SESSION['user']=$result['user_name'];

        $newpass = password_verify($inpt_pass,$dbpass);

        if($newpass)
        {
            header("Location: index.php");
        }
        else{
           header("Location: user_login.php");
           $_SESSION['message']="not login";
        }
    }
    else{
        header("Location: user_login.php");
        $_SESSION['message']="criedential not match";
    }
   
}


?>