<?php 
if(isset($_POST['submit'])){
	include"connect.php";
	$id = $_POST['id'];

	$subject = $_POST['subject'];
	$details = $_POST['details'];
	
	$img_name = $_FILES['img']['name'];
	$img_temp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_temp,"upload/$img_name");

	if(!empty($img_name)){

		$up = "UPDATE blog SET img = '$img_name' WHERE id = $id";
		$conn->query($up);

	}
	
	

$insert = "UPDATE blog SET subject = '$subject' ,
 details = '$details' WHERE id = $id";
$conn->query($insert);

header("Location:../blog.php");



}


?>