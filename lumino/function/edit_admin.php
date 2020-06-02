<?php
if(isset($_POST['submit'])){

include "connect.php";
$id=$_POST['id'];
$username=$_POST['username'];
$password= md5($_POST['password']);



$sql="UPDATE admin set username='$username' , password='$password' WHERE id=$id";
$conn->query($sql);

header("Location:../index.php");
}
?>