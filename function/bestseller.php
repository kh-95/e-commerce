
 

<?php
session_start();
include "connect.php";


$select="SELECT * FROM product WHERE favourite ='1' ";
$result_pro=$conn->query($select);
foreach ($result_pro as $product) {
$id = $product['id'];
echo'

                                                <div class="col-lg-4 col-md-6">
                                                        <div class="single-new-collection-item"><!-- single new collections -->
                                                            <div class="thumb">
                                                                <img style="width: 200px;" height="200px;" src="lumino/function/upload/'.$product['img'].'" >
                                <div class="hover">
                                <a data_id='.$product['id'].'class="addtocart">Add To Cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="content">
<span class="category">'. $product['name'].'</span>
<a href="product-details.php?id=<?php echo $id ;?>"><h4 class="title"> '.$product['disc'].'</h4></a>
<div class="price">
    <span class="sprice">'.$product['price'].'</span> <del class="dprice">$45.00</del></div>
</div>
</div><!-- //. single new collections  -->
</div>

                                                    
                                        </div>';
                                    }
                                    ?>











