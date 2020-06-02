<?php
include"connect.php";
$id = $_GET['id'];

$delete = "DELETE FROM message WHERE id = $id ";
$conn->query($delete) ;
header("Location:../message.php");


?>