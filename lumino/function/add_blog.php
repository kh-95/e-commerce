<?php 
if(isset($_POST['submit'])){
	include"connect.php";

	$subject = $_POST['subject'];
	$details = $conn->real_escape_string($_POST['details']);

	$img_name = $_FILES['img']['name'];
	$img_temp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_temp,"upload/$img_name");

	$date = date("d F,Y");

	

$insert = "INSERT INTO blog (subject,details,img,dates)VALUES('$subject','$details','$img_name','$date')";
$conn->query($insert);

header("Location:../blog.php");



}


?>