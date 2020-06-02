<?php
if(isset($_POST['submit'])){

session_start();
include "connect.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
$count=$result->num_rows;
if($count>0)
{
$_SESSION['username']=$username;
header("Location:../index.php");

}
}
?>