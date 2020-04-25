<?php 
include("assets/inc/db.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>www.Bazaarhunt.com</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

<script src="assets/js/jquery-3.4.1.js"></script>    
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/all.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/chart.js"></script>

  

</head>
<body>

<div class="container">
    <div class="row">
    
        <div class="col-md-10 offset-md-1 mycard">
            
            <div class="row">
                <div class="col-md-6 fiture">
                <div class="h3 text-center text-light fiture-text">READY TO LOGIN</div>
                    <div class="text-center">
                        <i class="fas fa-store-alt fa-7x text-light my-5"></i>
                    </div>
                </div> 
                <!-- end fiture   -->
                <div class="col-md-6">
                <div class="text-center">
                    <form action="login_config.php" method="POST" class="myloginform">
                        <div class="form-group mb-3">
                            <label for="">Username</label>
                            <input type="email" name="userName"  class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="passWord"  class="form-control" required>
                        </div>
                        <div class="text-center">

                        <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                        </div>
                    </form>
                   
                </div>

                </div>
            </div>
        </div>
    </div>
</div>









</body>
</html>