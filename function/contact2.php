<?php

include "connect.php";
    $name = $_POST['name'];
	
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone=$_POST['phone'];


	$insert = "INSERT INTO message (e_mail,subject,message,phone,name) VALUES ('$email','$subject','$message','$phone','$name')";
	$conn->query($insert);

	// header("Location:../contact.php");
?>