<?php include("assets/inc/header.php");?>



<nav class="navbar navbar-expand-lg navbar-dark bg-light topbar">
  <a class="navbar-brand my-logo" href="#">Bazaarhunt</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class=" nav mx-auto">
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="user_register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
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
   <li class="nav-item">
   <a href="#" class="nav-link menubar-link ">Electronics</a>
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

<!-- strat main carousel  -->
<section class="main-banner">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
 <ul class="bxslider">

  
  

  
 
 
</ul>

</div>
</div>
</div>
</section> 

<!-- end main carousel  -->

<div class="container">
  <div class="h4 text-secondary mt-5 mb-5 trproducts text-uppercase ">Trending Products</div>
</div>

<!-- start carosaul  -->
<section>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="owl-carousel owl-theme">
    <div class="item">
      <div class="card mycard">
      
        <img src="assets/img/mobile-png-10855.png" alt="" class="card-img-top">
     <div class="card-body">
       <div>
       
         <div class="h6 text-center">samsung gallaxy s6 adge</div>
         <div class="rating text-center">
           <span><i class="fas fa-star text-warning"></i></span>
             <span><i class="fas fa-star text-warning"></i></span>
               <span><i class="fas fa-star text-warning"></i></span>
                 <span><i class="fas fa-star text-warning"></i></span>
                   <span><i class="fas fa-star-half-alt text-warning"></i></span>
         </div>
         <div class="h6 text-center">
           <span class="strike">Rs. 22,999</span>
           <span>Rs. 21,849.05</span>
         </div>
         <div class="text-light text-center text-left  bg-success w-50">5% OFF</div>

       </div>
     </div>
    </div>
  </div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
    <div class="item"><img src="assets/img/mobile-png-10855.png" alt=""></div>
   
</div>
</div>
</div>
</div>
</section> 
<!-- end carosaul  -->














<script>

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
});

$(function(){
  $('.bxslider').bxSlider({
    auto: true,
  autoControls: true,
  stopAutoOnClick: true,
  pager: true,
    mode: 'fade',
    captions: true,
    
  });
});
</script>

<?php include("assets/inc/footer.php");?>