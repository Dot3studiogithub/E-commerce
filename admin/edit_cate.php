<?php $page='categories';
 include("assets/inc/header.php");
 include("assets/inc/navbar.inc.php");
if(!isset($_SESSION['user'])){
    header("Location: index.php");
}
  

  $ids = $_GET['id'];
    
   $query = "SELECT * FROM add_category WHERE id='$ids'";
   $run = mysqli_query($conn, $query);
   $res = mysqli_fetch_assoc($run);
  
   


if(isset($_POST['update'])){
       $idupdate = trim(safe_value($conn,$_GET['id']));
      $category = trim(safe_value($conn,$_POST['catename']));
      $subcate = trim(safe_value($conn,$_POST['sub_cate']));

    
   $sql= "SELECT sub_category FROM `add_category` WHERE sub_category='$subcate'";
   $data = mysqli_query($conn,$sql);
   $check = mysqli_num_rows($data);
  
   if($check>0){
       //header("Location: categories.php");
       echo '<script>alert("Category and sub category already exists")</script>';
    }
        else {
            $ins_qry = "UPDATE `add_category` SET id=$ids ,`cate_name`='$category',`sub_category`='$subcate' WHERE id='$idupdate'";
            $ins_data = mysqli_query($conn,$ins_qry);
            if($ins_data)
            {
              header("Location: categories.php");
            }
            else{
                 header("Location: edit_cate.php");
            }
        }
}


 ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"> <a href="dashboard.php"><i class="fas fa-home fa-lg text-dark mr-2"></i>Dashboard</a></li>
     <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
    <li class="breadcrumb-item">Update Category></li>
    
  </ol>
  
</nav>
<!-- end breadcrumb  -->

<div class="container my-5">
    <div class="h3 text-center text-dark text-uppercase">update Category Here.</div>
    <div class="row">
    <div class="col-md-8 offset-md-2 mt-5">
       
     <form action="" method="POST">
         
         <div class="form-group">
             <label for="Title">Cateory Name</label>
             <input type="text" name="catename" class="form-control" value="<?php echo $res['cate_name'];?>" required>
         </div>

         <div class="form-group">
             <label for="Title">Sub-Cateory</label>
             <input type="text" name="sub_cate" class="form-control" value="<?php echo $res['sub_category'];?>" required>
         </div>

       <div class="text-center">
           <input type="submit" name="update" class="btn btn-outline-dark" value="Update Category">
       </div>
     </form>
     </div>
    </div>
</div>

