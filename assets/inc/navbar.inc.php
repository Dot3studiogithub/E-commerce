<nav class="navbar navbar-expand-lg navbar-dark bg-light topbar">
  <a class="navbar-brand my-logo" href="index.php">Bazaarhunt</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class=" nav mx-auto">
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </ul>
      <ul class="navbar-nav ml-auto">
     
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle text-light mr-2"></i>
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item my-dropdown" href="#">My Account</a>
          <a class="dropdown-item my-dropdown" href="#">My Order</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item my-dropdown" href="user_register.php">Register</a>
          <a class="dropdown-item my-dropdown" href="user_login.php">Login</a>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-shopping-cart"></i>
        my cart
        </a>
      </li>
    </ul>
    
  </div>
</nav>
<!-- start category  -->

<nav class="navbar navbar-expand-md navbar-light bg-light ">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcate" aria-controls="navbarcate" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarcate">
   <ul class="navbar-nav mx-auto">
   <li class="nav-item <?php if($page=='Mobile & Tablet'){echo 'active';}?>">
   <a href="mobileteblet.php" class="nav-link menubar-link ">Mobile & Tablet</a>
   </li>
   <li class="nav-item <?php if($page=='electronics'){echo 'active';}?>">
   <a href="electronics.php" class="nav-link menubar-link ">Electronics</a>
   </li>
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link">Men</a>
   </li>
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link">Women</a>
   </li>
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link">Kids</a>
   </li>
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link">Home Appliances</a>
   </li>
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link">sports</a>
   </li>
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link">Grocry</a>
   </li>
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link">books</a>
   </li>
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link">Fitness</a>
   </li>
   </ul>
  </div>
</nav>

<!-- end category  -->