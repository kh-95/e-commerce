<?php
if(isset($_POST['submit'])){

include "connect.php";
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];

$img_name = $_FILES['background']['name'];
$img_temp = $_FILES['background']['tmp_name'];
move_uploaded_file($img_temp,"upload/$img_name");
$logo_name=$_FILES['logo']['name'];
$img_templo=$_FILES['logo']['tmp_name'];
move_uploaded_file($img_templo, "upload/$logo_name");


$sql="INSERT INTO siteinfo (phone,e_mail,address,background,logo) values ('$phone','$email','$address','$img_name','$logo_name')";
$conn->query($sql);


header("Location:../siteinfo.php");

}
?>