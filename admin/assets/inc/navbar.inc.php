<!-- navbar  -->
<nav class="navbar navbar-expand-md navbar-dark">
<button type="button" class="navbar-toggler mb-2 bg-light ml-auto" data-toggle="collapse" data-target="#adminnavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="adminnavbar">
<div class="container-fluid">
<div class="row">
<!-- start sidebar  -->
<div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
<a href="admin.php" class="navbar-brand d-block mx-auto text-center my-logo">
Bazaarhunt
</a>
<hr>
<ul class="navbar-nav flex-column">
<li class="nav-item ">
<a href="admin.php" class="nav-link sidebar-link  p-3 mb-3 <?php if($page =='dashboard'){echo 'active';}?>">
<i class="fas fa-home fa-lg text-light mr-2"></i>
Dashboard
</a>
</li>
<li class="nav-item">
<a href="category.php" class="nav-link sidebar-link  p-3 mb-3 <?php if($page =='categories'){echo 'active';}?>">
<i class="fas fa-people-carry fa-lg text-light mr-2"></i>
categories
</a>
</li>
<li class="nav-item">
<a href="product.php" class="nav-link sidebar-link  p-3 mb-3 <?php if($page =='Products'){echo 'active';}?>">
<i class="fas fa-box fa-lg text-light mr-2"></i>
Products
</a>
</li>
<li class="nav-item">
<a href="" class="nav-link sidebar-link  p-3 mb-3 <?php if($page =='Order'){echo 'active';}?>">
<i class="fas fa-truck fa-lg text-light mr-2"></i>
Order
</a>
</li>
<li class="nav-item">
<a href="" class="nav-link sidebar-link  p-3 mb-3 <?php if($page =='User'){echo 'active';}?>">
<i class="fas fa-user fa-lg text-light mr-2"></i>
User
</a>
</li>
<li class="nav-item">
<a href="" class="nav-link sidebar-link  p-3 mb-3 <?php if($page =='Contact us'){echo 'active';}?>">
<i class="fas fa-id-card fa-lg text-light mr-2"></i>
Contact us
</a>
</li>
<li class="nav-item">
<a href="display_carousel_image.php" class="nav-link sidebar-link  p-3 mb-2 <?php if($page =='images'){echo 'active';}?>">
<i class="fas fa-id-card fa-lg text-light mr-2"></i>
images
</a>
</li>
</ul>

<hr>
<div class="text-center mb-2">
<a href="signout.php" class="btn btn-outline-danger">
<i class="fas fa-sign-out-alt"></i>
</a>
</div>
</div>
<!-- end sidebar  -->


<!-- start top bar  -->
<div class="col-xl-10 col-lg-9 col-md-8 fixed-top ml-auto bg-dark top-navbar">
<div class="row d-flex align-items-center">
<div class="col-md-4">
<div class="h4 text-light">Dashboard</div>
</div>
<div class="col-md-3">
<ul class="nav ml-auto">
<li class="nav-item">
<a href="" class="nav-link">
<i class="fas fa-bell text-light"></i>
</a>
</li>
<li class="nav-item">
<a href="" class="nav-link">
<i class="fas fa-envelope text-light"></i>
</a>
</li>
</ul>
</div>
<div class="col-md-5">
<div class="h6 text-light">
<?php echo $_SESSION['username'];?>
</div>
</div>
</div>
</div>
<!-- end  top bar  -->
</div>
<!-- end row  -->
</div>
<!-- end container  -->
</div>
<!-- end navbar collapse  -->
</nav>
<!-- end navbar  -->