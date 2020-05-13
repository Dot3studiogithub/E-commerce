<!-- navbar start  -->
<nav class="navbar navbar-expand-md navbar-dark topbar">
<a href="dashboard.php" class="navbar-brand my-logo">BAZAARHUNT</a>
<button type="button" class="navbar-toggler" data-target="#navbarcollapse" data-toggle="collapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarcollapse">
<ul class="navbar-nav ml-auto">
<li class="nav-item <?php if($page=='Dashboard'){echo 'active';}?>">
<a href="dashboard.php" class="nav-link"><i class="fas fa-home text-light mr-2"></i>Dashboard</a>
</li>

<li class="nav-item <?php if($page=='categories'){echo 'active';}?>">
<a href="categories.php" class="nav-link">Categories</a>
</li>

     <li class="nav-item">
<a href="products.php" class="nav-link">Products</a>
</li>
    <li class="nav-item">
<a href="user.php" class="nav-link">User</a>
</li>
    <li class="nav-item">
<a href="order.php" class="nav-link">Order</a>
</li>

    <li class="nav-item">
<a href="myimages.php" class="nav-link">images</a>
</li>

    <li class="nav-item">
<a href="signout.php" class="nav-link">Logout</a>
</li>

</ul>
</div>

</nav>

<!-- end navbar  -->