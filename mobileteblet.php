<?php
   $page='Mobile & Tablet';
 include("assets/inc/header.php");
include("assets/inc/navbar.inc.php");

// $t = "SELECT * FROM add_category";
//  $d = mysqli_query($conn,$t);
//  $total = mysqli_num_rows($d);
//  $start = 0;
//  $limit = 8;
 
//  $page = ceil($total/$limit);
//  if(isset($_GET['id']))
//  {
//    $id = $_GET['id'];
//    $start = ($id-1)*$limit;
//  }
//  else{
//    $id = 1;
//  }
$sql = "SELECT * FROM add_category WHERE cate_name='mobile & tablet' ";
$run =  mysqli_query($conn,$sql);

?>

 <!-- breadcrumb start  -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <a  href="index.php" class="breadcrumb-item active text-danger" aria-current="page">Home</a>
    <li class="breadcrumb-item " aria-current="page">Mobile & Tablet</li>
  </ol>
</nav>

<!-- breadcrumb end  -->

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
   <div class="card sidebar-menu" >
<div class="card-header">
<div class="h6"><span id="dropbtn"><i class="fas fa-plus mr-3"></i></span>Category</div>
</div> 
<!-- end panel-heading   -->
<div class="card-body">
<ul class="navbar-nav flex-column" id="catemenu">

<?php
while( $ress = mysqli_fetch_array($run)){
  ?>

<li class="nav-item active">
  <a href="#" class="nav-link text-dark"><?php echo $ress['sub_category'];?> <span class="badge badge-danger">66</span></a> 
</li>

<?php
}
?>

</ul>
</div>
</div>
<!-- end sidebar  -->

<div class="card sidebar-menu" >
<div class="card-header">
<div class="h6"><span id="dropbtn2"><i class="fas fa-plus mr-3"></i></span>Price</div>
</div> 
<!-- end panel-heading   -->
<div class="card-body">
<div id="catemenu2">
<form>
  <div class="form-group">
    <label for="formControlRange"></label>
    <input type="range" data-min="50" data-startselected="50" data-max="50000" data-endselected="50000" class="form-control-range" id="formControlRange">
   <div class="d-flex justify-content-between mt-2">
 <h6 class="text-left">Rs 50</h6> <h6 class="text-right">Rs 50000</h6></div>
<div class="d-flex justify-content-between">
<div class="price-input mt-2">
<input type="text" value="Rs 50" class="form-control">
</div>
<span class="mt-3 mr-2 ml-2 "> - </span>
<div class="price-input mt-2">
<input type="text" value="Rs 5000" class="form-control">
</div>
  </div>
  <button class="price-range-search btn btn-success my-3" id="price-range-submit" type="submit">Search</button>
</form>


</div>
</div>
</div>
</div>
<!-- end sidebar  -->

<div class="card sidebar-menu" >
<div class="card-header">
<div class="h6"><span id="dropbtn3"><i class="fas fa-plus mr-3"></i></span>Brands</div>
</div> 
<!-- end panel-heading   -->
<div class="card-body">
<div id="catemenu3">
<ul class="nav flex-column text-justify">
<li class="nav-item">
<input type="checkbox" value="apple" >
<label for="">

<a href="" class="nav-link">Apple <span class="badge badge-secondary">66</span></a>
</label>
</li>
<li class="nav-item">
<input type="checkbox" value="apple" >
<label for="">

<a href="" class="nav-link">Redmi <span class="badge badge-secondary">66</span></a>
</label>
</li>

<li class="nav-item">
<input type="checkbox" value="apple" >
<label for="">

<a href="" class="nav-link">nokia <span class="badge badge-secondary">66</span></a>
</label>
</li>

<li class="nav-item">
<input type="checkbox" value="apple" >
<label for="">

<a href="" class="nav-link">oppo <span class="badge badge-secondary">66</span></a>
</label>
</li>

<li class="nav-item">
<input type="checkbox" value="apple" >
<label for="">

<a href="" class="nav-link">samsung <span class="badge badge-secondary">66</span></a>
</label>
</li>

<li class="nav-item">
<input type="checkbox" value="apple" >
<label for="">

<a href="" class="nav-link">vivo <span class="badge badge-secondary">66</span></a>
</label>
</li>
</ul>
 <button class="price-range-search btn btn-secondary my-3" id="price-range-submit" type="submit">View More</button>
</div>
</div>
</div>
<!-- end sidebar  -->


</div>
<!-- end sidebar menu  -->

<div class="col-md-9 contentarea">
 <div class="h6 text-secondary card-header">Mobile Phone <span>(154 Items)</span></div>
 <div class="row my-3">
   <div class="col-md-3">
       <div class="card mycard">
      
        <img src="assets/img/mobile-png-10855.png" alt="" width="200px" height="200px" class="card-img-top">
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
   <!-- end col-md-3  -->

 <div class="col-md-3">
       <div class="card mycard">
      
        <img src="assets/img/mobile01.jpeg" alt="" width="200px" height="200px" class="card-img-top">
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
   <!-- end col-md-3  -->
   
 </div>

</div>
<!-- end content  -->
</div>
</div>



<script>
$(document).ready(function(){
$('#dropbtn').click(function(){
$('#catemenu').toggle(100)
});
});


</script>


<script>
$(document).ready(function(){
$('#dropbtn2').click(function(){
$('#catemenu2').toggle(100)
});
});


</script>

<script>
$(document).ready(function(){
$('#dropbtn3').click(function(){
$('#catemenu3').toggle(100)
});
});


</script>
<?php include("assets/inc/footer.php");?>




