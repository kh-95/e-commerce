<?php
include"connect.php";
$id = $_GET['id'];

$delete = "DELETE FROM categories WHERE id = $id ";
$conn->query($delete) ;
header("Location:../cat.php");


?>