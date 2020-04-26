<?php
include("assets/inc/header.php");

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}
?>






<?php
include("assets/inc/footer.php");
?>