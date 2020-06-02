<?php 
if(isset($_POST['submit'])){
	include"connect.php";
	$id = $_POST['id'];
	$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];

$img_name = $_FILES['background']['name'];
$img_temp = $_FILES['background']['tmp_name'];
move_uploaded_file($img_temp,"upload/$img_name");
$logo_name=$_FILES['logo']['name'];
$img_templo=$_FILES['logo']['tmp_name'];
move_uploaded_file($img_templo, "upload/$logo_name");

    if(!empty($img_name)){

		$up = "UPDATE siteinfo SET background = '$img_name' WHERE id = $id";
		$conn->query($up);

	   }
	   if(!empty($logo_name)){

		$up = "UPDATE siteinfo SET logo= '$logo_name' WHERE id = $id";
		$conn->query($up);

	   }
	   $insert = "UPDATE siteinfo SET phone = '$phone' , e_mail = '$email' ,address= '$address'   WHERE id = $id";
$conn->query($insert);

header("Location:../siteinfo.php");



}
	
