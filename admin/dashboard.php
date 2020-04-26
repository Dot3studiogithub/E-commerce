<?php
include("assets/inc/header.php");
include("assets/inc/navbar.inc.php");

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fas fa-home fa-lg text-dark mr-2"></i>Dashboard</li>
    
  </ol>
</nav>

<div class="container">
<div class="row">
<div class="col-md-8 offset-md-2"></div>
</div>
</div>






<?php
include("assets/inc/footer.php");
?>
