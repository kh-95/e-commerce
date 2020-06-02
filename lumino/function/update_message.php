<?php
include "connect.php";
$id=$_POST['id'];

$update="UPDATE message SET view='1' WHERE id=$id";
$conn->query($update);


$select ="SELECT * FROM message WHERE view ='0'";
$result=$conn->query($select);
$count_mes=$result->num_rows;
echo $count_mes;





?>