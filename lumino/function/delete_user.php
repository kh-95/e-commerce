<?php
include"connect.php";
$id = $_GET['id'];

$delete = "DELETE FROM user WHERE id = $id ";
$conn->query($delete) ;
header("Location:../user.php");


?>