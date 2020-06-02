<?php 
if(isset($_POST['submit'])){
	include"connect.php";
	$id = $_POST['id'];

	$name = $_POST['name'];
	$price = $_POST['price'];
	$disc = $_POST['disc'];
	$cat = $_POST['cat'];
	$img_name = $_FILES['img']['name'];
	$img_temp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_temp,"upload/$img_name");

	if(!empty($img_name)){

		$up = "UPDATE product SET img = '$img_name' WHERE id = $id";
		$conn->query($up);

	}
	$img_name1 = $_FILES['img1']['name'];
	$img_temp1 = $_FILES['img1']['tmp_name'];
	move_uploaded_file($img_temp1,"upload/$img_name1");

	if(!empty($img_name1)){

		$up = "UPDATE product SET img1 = '$img_name1' WHERE id = $id";
		$conn->query($up);

	}
	$img_name2 = $_FILES['img2']['name'];
	$img_temp2 = $_FILES['img2']['tmp_name'];
	move_uploaded_file($img_temp2,"upload/$img_name2");

	if(!empty($img_name2)){

		$up = "UPDATE product SET img2 = '$img_name2' WHERE id = $id";
		$conn->query($up);

	}
	$img_name3 = $_FILES['img3']['name'];
	$img_temp3 = $_FILES['img3']['tmp_name'];
	move_uploaded_file($img_temp3,"upload/$img_name3");

	if(!empty($img_name3)){

		$up = "UPDATE product SET img3 = '$img_name3' WHERE id = $id";
		$conn->query($up);

	}

	
	

$insert = "UPDATE product SET name = '$name' , price = '$price' , disc = '$disc' , cat_id = '$cat'  WHERE id = $id";
$conn->query($insert);

header("Location:../product.php");



}


?>