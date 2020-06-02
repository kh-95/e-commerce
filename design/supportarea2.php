

<!-- support bar area two start -->
<div class="support-bar-two bg-white home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content">
                    <?php
                    include "function/connect.php";
                    $sql="SELECT * FROM siteinfo";
                    $result=$conn->query($sql);
                    $row=$result->fetch_assoc();
                    $phone=$row['phone'];
                    $email=$row['e_mail'];
                    $logo=$row['logo'];
                    $background=$row['background'];

                    ?>
                    <a href="index.html" class="logo main-logo">
                        <img width="60px" height="80px" src="lumino/function/upload/<?php echo $logo;?>" alt="logo">
                    </a>
                </div>
                <div class="right-content">
                    <ul>
                        <li>
                            <div class="support-search-area">
                                <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index-3.html" class="search-form">
                                    <div class="form-element has-icon">
                                        <input type="text" id="searchpro" class="input-field" placeholder="Search your keyword">
                                        <div class="the-icon">
                                            <select class="category select selectpicker">
                                                <option value="0">All Category</option>
                                                <option value="0">Men's Wear</option>
                                                <option value="0">Women's Wear</option>
                                                <option value="0">Kids Wear</option>
                                                <option value="0">Sports Wear</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Email Us</h4>
                                    <span class="details"><?php echo $email ;?></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                        <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Free Support</h4>
                                    <span class="details"><?php echo $phone ;?></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- support bar area two end -->