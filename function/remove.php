<?php
session_start();
if(isset($_SESSION['username'])){
include"connect.php";
$id = $_POST['id_cart'];
$id_user=$_SESSION['id'];
$price=$_POST['price_pro'];

$select_cart="SELECT * FROM cart WHERE id=$id AND id_user=$id_user";
$result_cart=$conn->query($select_cart);
$row_reult=$result_cart->fetch_assoc();
$count_cart=$row_reult['count'];
if($count_cart > 1){

 
 $update="UPDATE cart SET count=count-1,total_price=total_price-$price
WHERE id=$id AND id_user=$id_user";
$conn->query($update);
}else{

$delete="DELETE FROM cart WHERE id=$id AND id_user=$id_user";

$conn->query($delete);



}
}

?>