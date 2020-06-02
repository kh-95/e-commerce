<?php
session_start();
include "connect.php";
$id = $_POST['id_cat'];
$select="SELECT * FROM product WHERE cat_id= $id";
$result_pro=$conn->query($select);
$count_pro=$result_pro->num_rows;
if($count_pro > 0){
foreach ($result_pro as $row_pro) {


echo '<div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="lumino/function/upload/'.$row_pro['img'].'" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">shoe</span>
                                        <a href="#"><h4 class="title">'.$row_pro['name'].'</h4></a>
                                        <div class="price"><span class="sprice">'.$row_pro['price'].'</span> <del class="dprice">$95.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>';
                        }
                        }else{
echo "NOT PRODUCTS YET ";


                        }
                        ?>
















