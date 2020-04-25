<?php
session_start();
ob_start();
$servername = "localhost:3307";
$hostname = "root";
$password="";
$db = "bazaarhunt.com";

$conn = mysqli_connect($servername,$hostname,$password,$db);


?>