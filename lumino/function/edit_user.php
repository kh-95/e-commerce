<?php 
if(isset($_POST['submit'])){
	include"connect.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$img_name = $_FILES['img']['name'];
$img_temp = $_FILES['img']['tmp_name'];
move_uploaded_file($img_temp,"upload/$img_name");
if(!empty($img_name)){

		$up = "UPDATE user SET img = '$img_name' WHERE id = $id";
		$conn->query($up);

	}

if($_POST['password']){
	$pass = md5($password);
	$up = "UPDATE users SET password = '$pass'";
	$conn->query($up);
}

$update = "UPDATE user SET username = '$username' , fname = '$first_name',lname = '$last_name', email = '$email',phone = '$phone',address = '$address',age = '$age' WHERE id = $id" ;

$conn->query($update);
header("location:../user.php");






}
