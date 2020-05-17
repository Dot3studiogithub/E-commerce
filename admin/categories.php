<?php
 $page ='categories';
include("assets/inc/header.php");
include("assets/inc/navbar.inc.php");

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}

 $t = "SELECT * FROM add_category";
 $d = mysqli_query($conn,$t);
 $total = mysqli_num_rows($d);
 $start = 0;
 $limit = 8;
 
 $page = ceil($total/$limit);
 if(isset($_GET['id']))
 {
   $id = $_GET['id'];
   $start = ($id-1)*$limit;
 }
 else{
   $id = 1;
 }

$query = "SELECT * FROM add_category LIMIT $start, $limit";
$data = mysqli_query($conn, $query);
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"> <a href="dashboard.php"><i class="fas fa-home fa-lg text-dark mr-2"></i>Dashboard</a></li>
    <li class="breadcrumb-item">Categories></li>
    
  </ol>
  <div class="text-center">
      <a href="add.category.php" class="btn btn-dark">add category</a>
  </div>
</nav>
<!-- end breadcrumb  -->

<div class="container my-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>sr</th>
                        <th>category</th>
                        <th>sub-category</th>
                        
                       
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while( $res=mysqli_fetch_assoc($data))
                    {
                        ?>

                         <tr>
                             <td><?php echo $res['id'];?></td>
                             <td><?php echo $res['cate_name'];?></td>
                             <td><?php echo $res['sub_category'];?></td>
                             
                             
                            <td><a href="edit_cate.php?id=<?php echo $res['id'];?>" class='btn btn-info'>edit</a></td>
                            <td><a href="cate_delete.php?id=<?php echo $res['id'];?>" class='btn btn-danger'>Delete</a></td>
                         </tr>


                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
   
    <?php
    
    
    if($id > 1)
    {
      ?>
         <li class="page-item">
      <a class="page-link" href="?id=<?php echo ($id-1);?>">Previous</a>
    </li>
      <?php
    }
    ?>

   <?php
   for($i=1; $i<=$page;$i++)
   {
     ?>
       <li class="page-item">
       <a class="page-link" href="?id=<?php echo $i;?>"><?php echo $i;?></a>
       </li>

     <?php
   }
   
   ?>
    
    <?php
    if($id!=$page)
    {
      ?>
<li class="page-item">
      <a class="page-link" href="?id=<?php echo ($id+1);?>">Next</a>
    </li>
           
      <?php
    }
    
    ?>
    
    
  </ul>
</nav>




<?php
include("assets/inc/footer.php");
?>