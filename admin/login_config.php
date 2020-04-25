<?php
include("assets/inc/header.php");

if(isset($_POST['login'])){
    $user = safe_value($conn, $_POST['userName']);
    $user = htmlentities($user);
    $pass = safe_value($conn, $_POST['passWord']);
    $pass = htmlentities($pass);

    $query = "SELECT * FROM admin_login WHERE 'userName' ='$user' AND  'password'='$pass'";
    $run = mysqli_query($conn, $query);
    
    if($run)
    {
        $_SESSION['user']="$user";
        header("Location: dashboard.php");
    }
    else{
        ?>
        <script>
        alert("username and password don't match");
        </script>
        <?php
    }

}








?>