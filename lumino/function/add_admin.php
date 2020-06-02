<?php
if(isset($_POST['submit'])){

include "connect.php";
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="INSERT INTO admin (username,password) values ('$username','$password')";
$conn->query($sql);


header("Location:../index.php");

}
?>