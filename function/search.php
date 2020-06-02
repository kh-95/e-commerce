<?php 
session_start();
include "connect.php";

$name=$_POST['searchpro'];

$sql="SELECT * FROM product WHERE name LIKE '%".$name."%'";
$sql_pro=$conn->query($sql);
$row=$sql_pro->num_rows;
if($row > 0 ){
foreach ($sql_pro as $key_product) {
	
echo '<div class="col-lg-4 col-md-6">
                                                        <div class="single-new-collection-item"><!-- single new collections -->
                                                            <div class="thumb">
                                                                <img style="width: 200px;" height="200px;" src="lumino/function/upload/'. $key_product['img'].'">
                                <div class="hover">
                                <a data_id='.$key_product['id'].'class="addtocart">Add To Cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="content">
<span class="category">'.$key_product['name'].'</span>
<a href="product-details.php?id=<?php echo $id ;?>"><h4 class="title"> '.$key_product['disc'].'</h4></a>
<div class="price">
    <span class="sprice">'.$key_product['price'].'</span> <del class="dprice">$45.00</del></div>
</div>
</div><!-- //. single new collections  -->
</div>


                                                    
                                        </div>';
                                    }
                                }else{
                                	echo "NOT FOUND";
                                }
                                ?>

