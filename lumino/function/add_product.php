<?php 
if(isset($_POST['submit'])){
	include"connect.php";

	$name = $_POST['name'];
	$price = $_POST['price'];
	$disc = $_POST['disc'];

	$img_name = $_FILES['img']['name'];
	$img_temp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_temp,"upload/$img_name");

$img_name1 = $_FILES['img1']['name'];
	$img_temp1 = $_FILES['img1']['tmp_name'];
	move_uploaded_file($img_temp1,"upload/$img_name1");
	$img_name2 = $_FILES['img2']['name'];
	$img_temp2 = $_FILES['img2']['tmp_name'];
	move_uploaded_file($img_temp2,"upload/$img_name2");
	
	$img_name3 = $_FILES['img3']['name'];
	$img_temp3 = $_FILES['img3']['tmp_name'];
	move_uploaded_file($img_temp3,"upload/$img_name3");

    $cat = $_POST['cat'];
    $favour=$_POST['favour'];
   $date = date("Y-m-d");




$insert = "INSERT INTO product (name,price,disc,img,cat_id,pro_date,favourite,img1,img2,img3)VALUES('$name','$price','$disc','$img_name','$cat','$date','$favour','$img_name1','$img_name2','$img_name3')";
$conn->query($insert);

header("Location:../product.php");



}


?>