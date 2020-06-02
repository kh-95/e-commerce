<?php 
if(isset($_POST['submit'])){
	include"connect.php";

	$name = $_POST['name'];
	
$img_name = $_FILES['img']['name'];
	$img_temp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_temp,"upload/$img_name");
$insert = "INSERT INTO categories (name,img)VALUES('$name','$img_name')";
$conn->query($insert);

header("Location:../cat.php");



}


?>