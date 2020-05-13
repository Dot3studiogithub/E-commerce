<?php $page='categories';
 include("assets/inc/header.php");
 include("assets/inc/navbar.inc.php");
if(!isset($_SESSION['user'])){
    header("Location: index.php");
}

if(isset($_POST['add']))
{
     //    $id= mysqli_real_escape_string($conn,$_POST['id']);
   $category = trim(mysqli_real_escape_string($conn,$_POST['catename']));
   $subcategory = trim(mysqli_real_escape_string($conn,$_POST['sub_cate']));

   $sql= "SELECT * FROM `add_category` WHERE sub_category='$subcategory'";
   $data = mysqli_query($conn,$sql);
   $check = mysqli_num_rows($data);
  
   if($check>0){
       header("Location: add.category.php");
    }
        else {
            $ins_qry = "INSERT INTO `add_category`(`cate_name`, `sub_category`, `status`) VALUES ('$category', '$subcategory', '1')";
            $ins_data = mysqli_query($conn,$ins_qry);
            if($ins_data)
            {
              header("Location: categories.php");
            }
            else{
                 header("Location: add.category.php");
            }
        }

}

 ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"> <a href="dashboard.php"><i class="fas fa-home fa-lg text-dark mr-2"></i>Dashboard</a></li>
     <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
    <li class="breadcrumb-item">Add Category></li>
    
  </ol>
  
</nav>
<!-- end breadcrumb  -->

<div class="container my-5">
    <div class="h3 text-center text-dark text-uppercase">Add Category Here.</div>
    <div class="row">
    <div class="col-md-8 offset-md-2 mt-5">
       
     <form action="" method="POST">
         
         <div class="form-group">
             <label for="Title">Cateory Name</label>
             <input type="text" name="catename" class="form-control" required>
         </div>

         <div class="form-group">
             <label for="Title">Sub-Cateory</label>
             <input type="text" name="sub_cate" class="form-control" required>
         </div>

       <div class="text-center">
           <input type="submit" name="add" class="btn btn-outline-dark" value="Add Category">
       </div>
     </form>
     </div>
    </div>
</div>

