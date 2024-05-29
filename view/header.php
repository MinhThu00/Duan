<?php

    
    $countCart = 0;
    
    if (isset($_SESSION['mycart'])) {
        $countCart = count( $_SESSION['mycart']);
    }
       
?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/koparion/koparion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 12:28:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Book HT </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="view/img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="view/css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="view/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="view/css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="view/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- flexslider.css-->
    <link rel="stylesheet" href="view/css/flexslider.css">
    <!-- chosen.min.css-->
    <link rel="stylesheet" href="view/css/chosen.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/mau.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="view/css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- header-area-start -->
    <header>
        <!-- header-top-area-start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="language-area">
                            <ul>
                                <li><img src="view/img/flag/1.jpg" width="30px" alt="flag" /><a href="#">Tiếng Việt<i class="fa fa-angle-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="account-area text-end">
                            <ul>
                                <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                <li><a href="index.php?act=dangky">Đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-area-end -->
        <!-- header-mid-area-start -->
        <div class="header-mid-area ptb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-12">
                        <div class="header-search">
                            <form action="index.php?act=truyen" method="post">
                                <input type="text" placeholder="Tìm kiếm" name="kyw">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="logo-area text-center logo-xs-mrg">
                            <a href="index.php"><img src="view/img/logo/logo.jpg" width="100" height="100" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="my-cart">
                            <ul>
                                <li><a href="index.php?act=viewcart"><i class="fa fa-shopping-cart"></i>Giỏ hàng của tôi</a>
                                <span id="totalProduct"><?= $countCart ?></span>
                                
                                    <div class="mini-cart-sub">
                                        <div class="cart-product">
                                            <div class="single-cart">
                                                <!-- <div class="cart-img">
                                                    <a href="#"><img src="view/img/product/1.jpg" alt="book" /></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h5><a href="#">Joust Duffle Bag</a></h5>
                                                    <p>1 x £60.00</p>
                                                </div>
                                                <div class="cart-icon">
                                                    <a href="#"><i class="fa fa-remove"></i></a>
                                                </div> -->
                                            </div>
                                            <div class="single-cart">
                                                <!-- <div class="cart-img">
                                                    <a href="#"><img src="view/img/product/3.jpg" alt="book" /></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
                                                    <p>1 x £52.00</p>
                                                </div>
                                                <div class="cart-icon">
                                                    <a href="#"><i class="fa fa-remove"></i></a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="cart-totals">
                                            <h5>Total <span></span></h5>
                                        </div>
                                        <div class="cart-bottom">
                                            <a class="view-cart" href="index.php?act=viewcart">Xem giỏ hàng</a>
                                            <a href="index.php?act=bill">Thanh toán</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-mid-area-end -->
        <!-- main-menu-area-start -->
        <div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-area">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.php">Trang chủ<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li><a href="#">Thể loại<i class="fa fa-angle-down"></i></a>
                                        <div class="mega-menu">
                                            <?php
                                            foreach ($dsdm as $theloai) {
                                                extract($theloai);
                                                $linkdm = "index.php?act=truyen&iddm=" . $id;
                                                echo '<span>
                                                <a href="' . $linkdm . '" class="title">' . $name . '</a>
                                            </span>';
                                                # code...
                                            }
                                            ?>
                                        </div>
                                    </li>
                                    <li class=""><a href="index.php?act=blog">Blog</a>
                                    </li>
                                    <li><a href="index.php?act=lienhe">Liên hệ</a>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-menu-area-end -->
    </header>