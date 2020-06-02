<?php
session_start();
include "connect.php";
$sqlselect="SELECT * FROM product ORDER BY price DESC";
$resultpro=$conn->query($sqlselect);
foreach ($resultpro as $product) {
	

echo '<div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="lumino/function/upload/'.$product['img'].'" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">shoe</span>
                                        <a href="#"><h4 class="title">'.$product['name'].'</h4></a>
                                        <div class="price"><span class="sprice">'.$product['price'].'</span> <del class="dprice">$95.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>' ;
                        }
                        ?>

















}