<?php
session_start();
include "connect.php";
$id_user=$_SESSION['id'];
$id_pro=$_POST['id'];
$rating=$_POST['rate'];

$sql_rate="SELECT * FROM rate WHERE product_id=$id_pro AND user_id=$id_user  ";

$result_rate=$conn->query($sql_rate);
$count=$result_rate->num_rows;
if($count >0){
$update="UPDATE rate set rate=$rating , user_id=$id_user ,product_id=$id_pro WHERE product_id=$id_pro AND user_id=$id_user";
$result_rate=$conn->query($update);


}else{
$insert="INSERT INTO rate (user_id , rate, product_id) values($id_user,$rating,$id_pro)";
$result=$conn->query($insert);
}







?>