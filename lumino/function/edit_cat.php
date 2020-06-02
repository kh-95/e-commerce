<?php 
if(isset($_POST['submit'])){
	include"connect.php";
	$id = $_POST['id'];

	$name = $_POST['name'];
	$img_name = $_FILES['img']['name'];
	$img_temp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_temp,"upload/$img_name");

	if(!empty($img_name)){

		$up = "UPDATE categories SET img = '$img_name' WHERE id = $id";
		$conn->query($up);

	}
	

$insert = "UPDATE categories SET name = '$name'  WHERE id = $id";
$conn->query($insert);

header("Location:../cat.php");



}


?>