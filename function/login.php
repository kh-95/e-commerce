<?php
if(isset($_POST['submit'])){

session_start();
include "connect.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$id=$row['id'];
$img=$row['img'];
$count=$result->num_rows;
if($count>0)
{
$_SESSION['username']=$username;
$_SESSION['id']=$id;
$_SESSION['img']=$img;


header("Location:../index.php");

}else{
	header("Location:../login.php");
}}




