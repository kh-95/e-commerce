<?php 
if(isset($_POST['submit'])){
	include"connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$u_date = date("Y-m-d");
$img_name = $_FILES['img']['name'];
	$img_temp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_temp,"upload/$img_name");
  
  $insert = "INSERT INTO user (username,password,fname,lname,email,phone,address,age,gender,u_date,img)VALUES('$username','$password','$first_name','$last_name','$email','$phone ','$address','$age','$gender','$u_date','$img_name')";
$conn->query($insert);

header("Location:../user.php");



}