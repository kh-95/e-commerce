<?php
include "connect.php";
$id=$_GET['id'];
$sql="DELETE FROM admin WHERE id=$id";
$conn->query($sql);

header("Location:../index.php");
?>