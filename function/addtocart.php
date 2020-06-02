<?php
session_start();
if(isset($_SESSION['username'])){

include "connect.php";
// $id=$_POST['id_pro'];
// $price=$_POST['price_pro'];
// $id_user=$_SESSION['id'];

// $select_cart="SELECT * FROM cart WHERE id_product=$id AND id_user=$id_user";
// $result_cart=$conn->query($select_cart);
// $count_cart=$result_cart->num_rows;
// if($count_cart>0){

// $update="UPDATE cart SET count=count+1,total_price=total_price+$price
// WHERE id_product=$id AND id_user=$id_user";
// $conn->query($update);

// }else{

// $insert="INSERT INTO cart (id_product,id_user,count,total_price)values($id,$id_user,1,$price)";
// $conn->query($insert);


// }
$sql_cart="SELECT SUM(count) AS count_sum FROM cart";
$result_cart=$conn->query($sql_cart);
$row_result=$result_cart->fetch_assoc();
$count=$row_result['count_sum'];
echo $count;













}