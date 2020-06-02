<?php
include "design/header.php";
 include "design/supportarea1.php";
include "design/supportarea2.php";
//include "design/nav.php";
// include "design/sidebar.php";


?>

<body> 
    

<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Login</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- login page content area start -->
<div class="login-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-page-wrapper"><!-- login page wrapper -->
                    <div class="or">
                        <span>or</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="left-content-area">
                                <div class="top-content">
                                    <h4 class="title">Welcome Back Again</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                                <div class="bottom-content">
                                    <div class="left-content">
                                        <div class="thumb">
                                            <img src="assets/img/login-image.jpg" alt="login image">
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <ul>
                                            <li class="active">
                                                <a href="#">Login as shuvo</a>
                                            </li>
                                            <li>
                                                <a href="#">Delete Account</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-contnet-area">
                                <div class="top-content">
                                    <h4 class="title">Account Login</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                                <div class="bottom-content">
                                    <form action="function/login.php" method="post" class="login-form">
                                        <div class="form-element">
                                            
                                            <input type="text" class="input-field" placeholder="Enter Username" name="username">
                                        </div>
                                        <div class="form-element">
                                            <input type="password" class="input-field" placeholder="Enter Password" name="password">
                                        </div>
                                        <div class="btn-wrapper">
                                            <input type="submit" value="login" name="submit" class="btn btn-info" >
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- //.login page wrapper -->
            </div>
        </div>
    </div>
</div>
<!-- login page content area end -->

<?php
include "design/footer.php";
?>