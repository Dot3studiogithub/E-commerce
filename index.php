<?php include("assets/inc/header.php");



?>



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
<!-- <section class="main-banner">  -->
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
 <!-- <ul class="bxslider">

     <li><img src="assets/img/banner02.jpg" alt=""></li>
   <li><img src="assets/img/3176.jpg" alt=""></li>  </ul> -->

   <!-- bootstrap carousel start  -->


   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/banner02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- bootstrap carousel end  -->

</div>
</div>
</div>
</section> 

<!-- end main carousel  -->

<div class="container">
  <div class="h4 text-secondary mt-5 mb-5 trproducts text-uppercase ">Trending Products</div>
</div>

<!-- start carosaul  -->
<!-- <section>  -->
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="owl-carousel owl-theme">
    <div class="item">
      <a href="" class="text-decoration-none">
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
    </a>
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

<section class="adverticement my-5">
<div class="container">
  <div class="row">
    <div class="col-md-6 my-2">
      <img src="assets/img/ad02.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-md-6 my-2">
      <img src="assets/img/ad01.jpg" alt="" class="img-fluid">
    </div>
  </div>
</div>

</section>


<section class="appdownload my-5">

<div class="container">
  <div class="row">
     <div class="col-md-6 my-2 p-3">
      <img src="assets/img/group.png" alt="" class="img-fluid">
    </div>
    <div class="col-md-6 my-2">
     <div class="text-center">
     <div class="h1 text-dark download-text">Download Bazaarhunt 
            app now</div>

            <div class="h6 my-3 text-dark">Fast and delight 
                all its take is 40 second in download</div>


     </div>
     <div class="ml-3">
     <a href=""><img src="assets/img/apple-store.png" alt="" widthh="150px" height="60px" class="text-left"></a>
      <a href=""><img src="assets/img/play-store.png" alt="" widthh="150px" height="90px" class="text-left"></a>
     </div>
    </div>
  </div>
</div>

</section>

<section class="card-section py-3">
<div class="container-fluid">
<div class="row">
<!-- start card 1 -->
<div class="col-md-3 my-2">
<div class="card">
<div class="card-body">
<div class="text-center">
<i class="fas fa-credit-card fa-4x text-primary mb-2"></i>
<div class="h5 text-dark my-3">100% SECURE PAYMENT </div>
<div class="card-text">Move Your Card Details to a Much More Secure Place</div>
</div>
</div>
</div>
</div>
<!-- end card 1 -->

<!-- start card 2 -->
<div class="col-md-3 my-2">
<div class="card">
<div class="card-body">
<div class="text-center">
<i class="fas fa-shield-alt fa-4x text-warning mb-2"></i>
<div class="h5 text-dark my-3">TRUSTPAY </div>
<div class="card-text">100% Payment Protection Ease Return Policy with customer satisfaction </div>
</div>
</div>
</div>
</div>
<!-- end card 2 -->

<!-- start card 3 -->
<div class="col-md-3 my-2">
<div class="card">
<div class="card-body">
<div class="text-center">
<i class="fas fa-question-circle fa-4x text-success mb-2"></i>
<div class="h5 text-dark my-3">HELP CENTER </div>
<div class="card-text">Got question? Look no further.
Browse  our faqs and submit your query here.</div>
</div>
</div>
</div>
</div>
<!-- end card 3 -->

<!-- start card 4 -->
<div class="col-md-3 my-2">
<div class="card">
<div class="card-body">
<div class="text-center">
<i class="fas fa-mobile fa-4x text-danger mb-2"></i>
<div class="h5 text-dark my-3">SHOP ON THE GO </div>
<div class="card-text">Download the app and get exciting
app only offers on your fingertip </div>
</div>
</div>
</div>
</div>
<!-- end card 4 -->
</div>
</div>

</section>


<section id="footer-section">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
     <div class="row">
       <!-- start footer column 1  -->
       <div class="col-md-3">
         <div class="">
           <div class="h3 text-uppercase text-dark pl-3">policy info</div>
           <ul class="nav flex-column">
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">privecy policy</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">trems of sale</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">trems of use</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">Report Abuse & Takedown Policy</a>
             </li>
           </ul>
         </div>
        </div>
       <!-- end footer column 1  -->

        <!-- start footer column 2  -->
       <div class="col-md-3">
         <div class="">
           <div class="h3 text-uppercase text-dark pl-3">company</div>
           <ul class="nav flex-column">
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">About us</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">Blog</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">Carrer</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">Sitemap</a>
             </li>
           </ul>
         </div>
        </div>
       <!-- end footer column 2  -->

        <!-- start footer column 3  -->
       <div class="col-md-3">
         <div class="">
           <div class="h3 text-uppercase text-dark pl-3">Need help ?</div>
           <ul class="nav flex-column">
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">Contact us</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">FAQs</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link text-secondary pb-0">Online Shopping</a>
             </li>
             
           </ul>
         </div>
        </div>
       <!-- end footer column 3  -->

        <!-- start footer column 4  -->
       <div class="col-md-3">
         <div class="">
           <div class="h3 text-uppercase text-dark pl-3">Subscribe</div>
           <div class="input-group">
             <input type="text" class="form-control"><span><button class="btn btn-secondary">SUBSCRIBE</button></span>
           </div>
           <div class="h6 text-secondary pt-2">register now to get updates on 
promotions and coupons.
or download app</div>
         </div>
        </div>
       <!-- end footer column 4  -->
     </div>
    </div>
  </div>
</div>

</section>














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