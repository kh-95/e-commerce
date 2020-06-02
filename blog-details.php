<?php
session_start();
include "design/header.php";
include "design/supportarea1.php";
include "design/supportarea2.php";
include "design/nav.php";
include "design/sidebar.php";
?>

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Blog Details</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index.html" class="search-popup-form">
        <div class="form-element">
                <input type="text"  class="input-field" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
    </form>
</div>



    <!-- blog details page content area start -->
    <section class="blog-details-content">
            <div class="container">
                <div class="row">
<?php 
include "function/connect.php";
if(!isset($_GET['id'])){

}else{
$id=$_GET['id'];
$sql_blog = "SELECT * FROM blog WHERE id = $id";
$result_blog = $conn->query($sql_blog);
$key_blog = $result_blog->fetch_assoc();
    
$subject = $key_blog['subject'];
$details = $key_blog['details'];
?>
                    <div class="col-lg-8">
                        <div class="single-blog-post"><!-- single blog post -->
                            <div class="meta-time"><!-- meta time -->
                                <span class="time"><?php echo $key_blog['dates'];?></span>
                                
                            </div><!-- //.meta time -->
                            <div class="details-container"><!-- details contaienr -->
                                <div class="meta-tags"><!-- meta tags -->
                                    <ul>
                                        <li><i class="fas fa-comments"></i> 
                                        <?php
                                $sql="SELECT * FROM comments WHERE id_blog=$id";
                                $result=$conn->query($sql);
                                $count=$result->num_rows;
                                echo $count;
                                ?>
                                         Comments</li>
                                        <li><i class="fas fa-share"></i> 50 Shares</li>
                                    </ul>
                                </div>
                                <div class="post-body"><!-- post body -->
                                    <h3 class="title"><?php echo $subject ;?></h3>
                                    <p><?php echo $details ;?></p>
                                    <blockquote class="post-blockquote"><!-- post blockquote -->
                                        <div class="icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="content">
                                            <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                                            bibendum auctor, nisi elit consequat ipsum, nec.</p>
                                            <span class="post">- Rosalina Pong</span>
                                        </div>
                                    </blockquote><!-- //.post blockquote -->
                                    
                                    <div class="post-bottom-content"><!-- post bottom content -->
                                        <div class="top-content"><!-- top content -->
                                            <div class="left-content"><h4 class="title">Releted Tags</h4></div>
                                            <div class="right-content"><h4 class="title">Social Share</h4></div>
                                        </div><!-- //.top content -->
                                        <div class="bottom-content"><!-- bottom content -->
                                            <div class="left-content"><!-- left content -->
                                                <ul>
                                                    <li><a href="#">organic</a></li>
                                                    <li><a href="#">Foods</a></li>
                                                    <li><a href="#">tasty</a></li>
                                                </ul>
                                            </div><!-- //.left content -->
                                            <div class="right-content"><!-- right content -->
                                                <h4 class="title">Social Share</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-typo3"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-staylinked"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                                </ul>
                                            </div><!-- right content -->
                                        </div><!-- //.bottom content -->
                                    </div><!-- //.post bottom content -->
                                </div><!-- //.post body -->
                                <div class="single-post-separator"></div>
                                <div class="comments-area"><!-- comments area satart -->
                                    <h3 class="title">Comments</h3>
<?php
include "function/connect.php";
$select_comment="SELECT * FROM comments WHERE id_blog=$id ORDER BY id DESC LIMIT 3";
$result_comment=$conn->query($select_comment);
foreach ($result_comment as $comment) {
    $name=$comment['name'];
$select_user="SELECT * FROM user WHERE username ='$name'";
$result_user=$conn->query($select_user);
foreach ($result_user as  $user) {
 

    

?>
                                    <div id="blog" class="single-comment-item margin-bottom-40"><!-- single comment item -->
                                        <div class="thumb">
                                            <img src="lumino/function/upload/<?php echo $user['img'];?>" alt="commente avatar">
                                        </div>
                                        <div  class="content">
                                            <span class="meta-date"><?php echo $comment['comment_date'] ;?></span>
                                            <h4 class="author-name"><?php echo $comment['name'] ;?></h4>
                                            <p><?php echo $comment['comment'];?></p>
                                        </div>
                                        <a href="#" class="reply-btn"><i class="fas fa-reply"></i> Reply</a>
                                    </div><!-- //. single comment item -->
                           
                                   <?php } } ?> 
                                </div><!-- //. comments area end -->


                                <div class="single-blog-page-separator"></div>
                                <div class="comments-form-area"><!-- comments form area -->
                                    <h3 class="title">Post Comment</h3>
                                    <div class="comment-form-wrapper"><!-- comment form wrapper -->
                                        <form   method="post">
                                            <div class="form-element margin-bottom-15">
                                               
                                                <div class="has-icon textarea">
<input type="text" id="comment" class="input-field borderd" placeholder="Type your comment...." name="comment">
                                                    
                                                    <div class="the-icon">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-element margin-bottom-20">
                                                <div class="has-icon ">
                                                   <input type="email" id="email" class="input-field borderd" placeholder="Type your email...." name="email">

                                                    <div class="the-icon">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element ">
                                                <div class="has-icon ">
                                                   <input type="email" id="website" class="input-field borderd" placeholder="Type your website...." name="website">
                                                    <div class="the-icon">
                                                        <i class="fas fa-globe"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element margin-top-40">
                                                <input data_id="<?php echo $id; ?>" type="submit" value="post comment" id="add_message" class="submit-btn btn-rounded" name="submit">
                                            </div>

                                        </form>
                                    </div>
                                </div><!-- comments form area -->
                            </div>
                        </div>
                    </div><!-- //.col-lg-8 -->
                <?php } ?>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <div class="widget-area instagram">
                                <!-- instagram widget start -->
                                <div class="widget-title">
                                    <h4>Instagram</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="instagram-feed">
                                        <!-- instagram feed -->
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/01.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/02.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/03.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/04.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/05.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/06.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/07.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/08.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/09.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /.instagram feed -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- instagram widget end -->
                            <div class="sidebar-separator"></div>
                            <div class="widget-area social">
                                <!-- social widget start-->
                                <div class="widget-title">
                                    <h4>Follow Us</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body-->
                                    <ul class="social-links">
                                        <!-- social links-->
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="pinterest">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="wordpress">
                                                <i class="fab fa-wordpress"></i>
                                            </a>
                                        </li>
                        
                                    </ul>
                                    <!-- ./ social links-->
                                </div>
                                <!-- ./ widget body -->
                            </div>
                            <!-- instragram widget end -->
                            <div class="sidebar-separator"></div>
                            <div class="widget-area category">
                                <!-- category widget start-->
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="categories">
                                        <!-- categories -->
                                        <li>
                                            <a href="#">Lifestyle
                                                <span class="count">(05)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Travel
                                                <span class="count">(34)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Fashion
                                                <span class="count">(89)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Music
                                                <span class="count">(96)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Branding
                                                <span class="count">(78)</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- ./ cateogries -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- category widget end-->
                            <div class="sidebar-separator category"></div>
                            <div class="widget-area latest-post">
                                <!-- latest post widget start -->
                                <div class="widget-title">
                                    <h4>Latest Posts</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/01.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Alonso Kelina Falao Asiano Pero</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 6 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/02.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">It is a long fact that a reader</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 7 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/03.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Many desktop packages and web</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 9 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/04.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Various have evolved over the years</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 10 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/05.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Photo booth anim wolf moon.</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 13 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <div class="sidebar-separator latest-post"></div>
                            <!-- latest post widget end -->
                            <div class="widget-area tags">
                                <!-- tag widget  start -->
                                <div class="widget-title">
                                    <h4>Tags</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="tags-list">
                                        <!-- tags -->
                                        <li>
                                            <a href="#">Travel</a>
                                        </li>
                                        <li>
                                            <a href="#">Lifestyle</a>
                                        </li>
                                        <li>
                                            <a href="#">Photo </a>
                                        </li>
                                        <li>
                                            <a href="#">Adventures </a>
                                        </li>
                                        <li>
                                            <a href="#">Musician </a>
                                        </li>
                                        <li>
                                            <a href="#">08 </a>
                                        </li>
                                        <li>
                                            <a href="#">Travel </a>
                                        </li>
                                        <li>
                                            <a href="#">Lifestyle </a>
                                        </li>
                                        <li>
                                            <a href="#">Photo </a>
                                        </li>
                                        <li>
                                            <a href="#">Adventures </a>
                                        </li>
                                        <li>
                                            <a href="#">Musician </a>
                                        </li>
                                        <li>
                                            <a href="#">08 </a>
                                        </li>
                                    </ul>
                                    <!-- /.tags -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- tag widget  end -->
                        </aside>
                        <!-- sidebar end -->
                    </div><!-- //.col-lg-4 -->
                </div><!-- //.row -->
            </div><!-- //.container -->
        </section>
        <!-- blog details page content area end -->

<?php
include "design/footer.php";
?>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
            <div class="preloader-inner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
            </div>
        </div>
    <!-- preloader area end -->

    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>    
	<!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- way poin js-->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- counterup js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/countdown.js"></script>
    <!-- select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- owl carousel2 thumb -->
    <script src="assets/js/owl.carousel2.thumbs.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:40:03 GMT -->
</html>