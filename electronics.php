<?php include("assets/inc/header.php");
include("assets/inc/navbar.inc.php");
?>

 <!-- breadcrumb start  -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <a  href="index.php" class="breadcrumb-item active text-danger" aria-current="page">Home</a>
    <li class="breadcrumb-item " aria-current="page">Electronics</li>
  </ol>
</nav>

<!-- breadcrumb end  -->

<div class="container-fluid">
<div class="row">
<div class="col-lg-2 col-md-3">
<div class="my_sidebar">
<div>
<div class="h6 mt-5 p-2 category-headding"><span id="dropbtn"><i class="fas fa-plus mr-3"></i></span>Electronics Category</div>
<hr>
<ul class="nav flex=column" id="catemenu">
<li class="nav-item">
  <a href="#" class="nav-link">Mobile Phone <span class="badge badge-secondary">66</span></a> 
</li>
<li class="nav-item">
  <a href="#" class="nav-link">tablet <span class="badge badge-secondary">66</span></a> 
</li>
<li class="nav-item">
  <a href="#" class="nav-link">Mobile accessories <span class="badge badge-secondary">66</span></a> 
</li>
<li class="nav-item">
  <a href="#" class="nav-link">Tablet accessories <span class="badge badge-secondary">66</span></a> 
</li>
<li class="nav-item">
  <a href="#" class="nav-link">Feature Phone <span class="badge badge-secondary">66</span></a> 
</li>
</ul>
</div>
</div>

</div>
<!-- end sidebar menu  -->

<div class="col-xl-10 col-md-9">

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
<?php include("assets/inc/footer.php");?>