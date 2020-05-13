<?php
 $page ='categories';
include("assets/inc/header.php");
include("assets/inc/navbar.inc.php");

if(!isset($_SESSION['user'])){
    header("Location: inde x.php");
}

if(isset($_GET['type']) && $_GET['type']!='')
{
  $type = $_GET['type'];
  $type = mysqli_real_escape_string($conn,$type);
     if($type=='status')
     {
      $opration = $_GET['opration'];
      $opration = mysqli_real_escape_string($conn,$opration);
      $id = $_GET['id'];
      $id = mysqli_real_escape_string($conn,$id);
      
      if($opration=='active'){
         $status='1';
      }
      else{
        $status='0';
      }
      $update_status = "UPDATE `add_category` SET `status`='$status' WHERE id='$id'";
      $updatedata = mysqli_query($conn,$update_status);
     }

     if($type=='delete')
     {
       $id = $_GET['id'];
       $id = mysqli_real_escape_string($conn,$id);
       $delete_sql = "DELETE FROM `add_category` WHERE id='$id'";
       $data = mysqli_query($conn,$delete_sql);
     }
}

$query = "SELECT * FROM add_category";
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
                        <th>action</th>
                        <th>status</th>
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
                             <td><?php echo $res['status'];?></td>
                             <td>
                                 <?php
                            if($res['status']==1)
                            {
                                
                            echo "<a href='?type=status&opration=deactive&id=".$res['id']."' class='btn btn-success'>Active</a>";
                                
                            }
                            else{
                                echo "<a href='?type=status&opration=active&id=".$res['id']."' class='btn btn-warning'>Deactive</a>";
                            }
                            
                            ?>
                            </td>
                            <td><a href="edit_cate.php?id=<?php echo $res['id'];?>" class='btn btn-info'>edit</a></td>
                            <td><a href="?type=delete&id=<?php echo $res['id'];?>" class='btn btn-danger'>Delete</a></td>
                         </tr>


                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





<?php
include("assets/inc/footer.php");
?>