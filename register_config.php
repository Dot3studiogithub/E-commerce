<?php
include("assets/inc/header.php");


// register function

if(isset($_POST['register']))
{
    $name = $_POST['name'];

    $name = mysqli_real_escape_string($conn,$name);
    $name = htmlentities($name);

   

    $admin_email = $_POST['email'];

    $admin_email = mysqli_real_escape_string($conn, $admin_email);
    $admin_email = htmlentities($admin_email);

    

    $ad_pass = $_POST['password'];

    $ad_pass = mysqli_real_escape_string($conn, $ad_pass);
    $ad_pass = htmlentities($ad_pass);

    $crypass= password_hash($ad_pass, PASSWORD_BCRYPT);

    $confirm_pass = $_POST['repassword'];

    $confirm_pass = mysqli_real_escape_string($conn, $confirm_pass);
    $confirm_pass = htmlentities($confirm_pass);

    $con_crypass = password_hash($confirm_pass, PASSWORD_BCRYPT);

    $admin_number = $_POST['contactnumber'];

    $admin_number = mysqli_real_escape_string($conn, $admin_number);
    $admin_number = htmlentities($admin_number);

    

    $selquery = "SELECT * FROM user_signup WHERE email_id='$admin_email'";
    $selsql = mysqli_query($conn, $selquery);

    $countemail = mysqli_num_rows($selsql);

    if($countemail > 0)
    {
       ?>
        <script> alert("email already exists")</script>

        <?php
    }
    else{

        if($ad_pass === $confirm_pass)
        {
            $query = "INSERT INTO `user_signup`(`user_name`, `email_id`, `password`, `re-password`, `contact_number`)
             VALUES ('$name','$admin_email','$crypass','$con_crypass','$admin_number')";
            $sql = mysqli_query($conn,$query);

               if($sql)
               {
                  header("Location: user_login.php");
               }

               else{
                  header("Location: user_register.php");
                  $_SESSION['message']="you are not register please retry";
               

               }
        }

        else{
            header("Location: user_register.php");
                  $_SESSION['message']="password are not match";
        }
    }

    

              

}

?>