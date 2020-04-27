<?php 
include("assets/inc/db.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <title>www.Bazaarhunt.com</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/css/style.css">

<script src="assets/js/jquery-3.4.1.js"></script>    
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/all.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.bxslider.js"></script>
<style>
body{
    background:#000;
}

</style>
</head>
<body>
<section class="register-section">
<div class="container">
<div class="h3 text-center text-uppercase text-secondary pt-3">Please login Your Account</div>
<div class="row">
<div class="col-md-6 offset-md-3 my-5 mycard1">
<div class="h6 text-danger">
<?php 

if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

?></div>
<form action="login_config.php" method="POST">

<div class="form-group">
<label for="email" class="text-light"> <i class="fas fa-envelope mr-2"></i>E-mail</label>
<input type="email" name="inemail" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label for="password" class="text-light"> <i class="fas fa-key mr-2"></i>Password</label>
<input type="password" name="inpassword" class="form-control" autocomplete="off" required>
</div>


<div class="text-center">
<button type="submit" name="login" class="btn btn-success">login</button>

</div>


</form>

</div>
</div>
</div>
</section>




</body>
</html>