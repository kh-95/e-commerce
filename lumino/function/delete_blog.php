<?php
include"connect.php";
$id = $_GET['id'];

$delete = "DELETE FROM blog WHERE id = $id ";
$conn->query($delete) ;
header("Location:../blog.php");


?>