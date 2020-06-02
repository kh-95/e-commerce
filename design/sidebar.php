<!-- slide sidebar area start -->
<div class="slide-sidebar-area" id="slide-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" id="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="recent-reviews"><!-- recent reviews -->
            <h4 class="title">Recent Reviews</h4>
<?php
// session_start();
$id_user=$_SESSION['id'];
$username=$_SESSION['username'];
include "function/connect.php";
$select_pro="SELECT * FROM product ";
$result_pro=$conn->query($select_pro);
foreach ($result_pro as $product) {
    $id_pro=$product['id'];
 $select_rate="SELECT * FROM rate WHERE  user_id=$id_user AND product_id =$id_pro ";
$result_rate=$conn->query($select_rate);
foreach ($result_rate as $rate) { 
$ratex=$rate['rate']  ;
$remain = 5-$ratex;



    


?>

            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img width="100px" height= "100px" src="lumino/function/upload/<?php echo $product['img']; ?>" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title"><?php echo $product['name'];?></h4>
                    <ul>
                        <?php
                        for ($i=1; $i <= $ratex ; $i++) {
                        

                      echo  '<li>
                                <i value="'.$i.'" class="fas fa-star"></i>
                        </li>';
                        }
                        for ($i=1; $i <= $remain ; $i++) {
                        

                      echo  '<li>
                                <i value="'.$i.'" class="far fa-star"></i>
                        </li>';
                        }
                        ?>
                       
                    </ul>
                    <span class="posted-by">by <?php echo $_SESSION['username'] ;?></span>
                </div>
            </div><!-- //. single review item -->
        <?php } }?>
            
          
           
            
        </div> <!-- //. recent reviews -->
    </div><!-- //. bottom content -->
</div>
<!-- slide sidebar area end -->
<!-- cart sidebar area start -->