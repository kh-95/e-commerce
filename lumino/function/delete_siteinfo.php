<?php
include"connect.php";
$id = $_GET['id'];

$delete = "DELETE FROM siteinfo WHERE id = $id ";
$conn->query($delete) ;
header("Location:../siteinfo.php");


?>