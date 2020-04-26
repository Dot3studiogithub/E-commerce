<?php
include("assets/inc/header.php");
include("assets/inc/navbar.inc.php");

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}

// user information 





?>

<nav aria-label="breadcrumb ">
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">User</li>
  </ol>
</nav>

<!-- end breadcrumb  -->

<div class="container my-5">
<div class="h1 text-center text-secondary text-uppercase">user information</div>
<div class="row">
<div class="col-md-8 offset-md-2">
<table class="table mt-5">
<thead>
<tr>
<th>sr</th>
<th>username</th>
<th>email</th>
<th>contact</th>
<th>time</th>
</tr>
</thead>
<tbody>
<tr></tr>
</tbody>
</table>
</div>
</div>
</div>






<?php
include("assets/inc/footer.php");
?>
