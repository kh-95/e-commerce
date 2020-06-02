<?php 
session_start();

include"connect.php";

$id = $_POST['id_pro'];
$id_user=$_SESSION['id'];
$price=$_POST['price_pro'];

$sql_cart="SELECT * FROM cart WHERE id_product=$id AND id_user=$id_user";
 $result_cart=$conn->query($sql_cart);
 $count_cart=$result_cart->num_rows;


 if($count_cart > 0)   {
$update ="UPDATE cart SET count=count+1 , total_price =total_price+$price WHERE id_product=$id AND id_user=$id_user" ;
$conn->query($update);
$select_cart="SELECT * FROM cart WHERE id_product=$id";
$result_cartt=$conn->query($select_cart);
$row_cart=$result_cartt->fetch_assoc();

$counttt=$row_cart['count'];

echo $counttt;



 }else{

$insert="INSERT INTO cart (id_product,id_user,count,total_price) VALUES ($id,$id_user,1,$price)";
$conn->query($insert);
$sql="SELECT * FROM product WHERE id=$id";
$result1=$conn->query($sql);
$row1=$result1->fetch_assoc();

$select_cart="SELECT * FROM cart WHERE id_product=$id";
$result_cartt=$conn->query($select_cart);
$row_cart=$result_cartt->fetch_assoc();
$counttt=$row_cart['count'];








   

echo '<div class="single-product-item">
                <!-- single product item -->
              
                  <div class="thumb">
                    <img src="lumino/function/upload/'. $row1['img'].'"  style="width: 80px; height:100px"; alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">'.$row1['name'].'</h4><span id="countp'.$id.'">'.$counttt.'</span
                    <div class="price"><span class="pprice">'.$row1['price'].'</span> <del class="dprice">$500.00</del>
                    </div>

                    <a remove_id=" '.$row1['id'].'" class="remove-cart">Remove</a>

                </div>
            
            </div>' ;
}


?>