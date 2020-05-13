<?php  
$page='Dashboard';
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

<div class="container-fluid">
<div class="row">
<!-- start card column  -->
<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<i class="fas fa-user fa-3x text-primary"></i>
<div class="text-right">
<div class="h6 text-secondary">users</div>
</div>
</div>
</div>
</div>
</div>
<!-- end card column  -->

<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<i class="fas fa-users fa-3x text-danger"></i>
<div class="text-right">
<div class="h6 text-secondary">visitors</div>
</div>
</div>
</div>
</div>
</div>
<!-- end card column  -->

<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<i class="fas fa-dollar-sign fa-3x text-warning"></i>
<div class="text-right">
<div class="h6 text-secondary">total earnings</div>
</div>
</div>
</div>
</div>
</div>
<!-- end card column  -->

</div>
</div>
</div>
<!-- end card section  -->







<?php
include("assets/inc/footer.php");
?>
