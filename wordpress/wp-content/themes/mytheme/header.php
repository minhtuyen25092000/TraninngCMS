<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/slide/animate.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/slide/carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/slide/default.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/slide/carousel2.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/slide/carousel3.min.css">
</head>

<body>
    <header>
        <section class="top-link clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav navbar-nav topmenu-contact">
                            <li><i class="fa fa-phone-alt"></i>Hotline:0908 77 00 95</li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right topmenu  hidden-xs">
                            <li class="hotline"><a href="#"><i class="fa fa-phone-alt"></i>Hotline:0908 77 00 95</a>
                            </li>
                            <li class="order-check"><a href="/wordpress/tai-khoan/orders/"><i
                                        class="fa fa-pen-square"></i>Kiểm tra đơn hàng</a></li>
                            <li class="order-cart"><a href="/wordpress/gio-hang/"><i class="fa fa-shopping-cart"></i>Giỏ
                                    hàng</a></li>
                            <!-- <li class="account-login"><a href="/wordpress/login/"><i class="fa fa-sign-in-alt"></i>Đăng
                                    nhập
                                </a></li>
                            <li class="account-register"><a href="/wordpress/signup/"><i class="fa fa-key"></i>Đăng ký </a>
                            </li> -->
                        </ul>
                        <div class="show-mobile hidden-lg hidden-md hidden-sm">
                            <div class="quick-cart">
                                <div class="quickaccess-toggle">
                                    <a href="/wordpress/gio-hang" title="Giỏ hàng"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="quick-tracking">
                                <div class="quickaccess-toggle">
                                    <a id="mobile-wishlist-total" href="/tai-khoan/orders/" title="Kiểm tra đơn hàng"
                                        class="wishlist"><i class="fa fa-pen-square"></i></a>
                                </div>
                            </div>
                            <div class="quick-user">
                                <div class="quickaccess-toggle">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="inner-toggle">
                                    <ul class="login links">
                                        <li>
                                            <a href="/dang-ky.html"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                        </li>
                                        <li>
                                            <a href="/dang-nhap.html"><i class="fa fa-key"></i>Đăng nhập</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="menu-mobile">
                                <div class="quickaccess-toggle">
                                    <span class="ts-mobile-menu-icon-toggle visible-phone fa fa-list"
                                        id="menu-icon"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="header-content clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 logo text-center">
                        <a href="/wordpress" title="">
                        <?php the_custom_logo()?>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12 top-search">
                        <div class="search">
                            <div class="input-cat form-search clearfix">
                                <div class="main-search">
                                    <form action="<?php bloginfo('url'); ?>/" method="GET" role="form" id="searchform">
                                        <input type="text" autocomplete="off" class="form-control search-ajax" name="s"
                                            placeholder="Từ khóa">
                                    </form>
                                    <div id="load-data"></div>
                                </div>
                            </div>
                        </div>
                        <div class="social-group">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 top-cart  hidden-xs">
                        <div class="cart" id="cart">
                            <div class="heading">
                                <a href="/wordpress/wordpress/gio-hang">
                                    <span class="icon">icon</span><span id="cart-total" style=" color: #454545; ">
                                        0
                                        sp - 0đ
                                    </span> <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php
                wp_nav_menu( array(
                        'menu' => 'main-menu',
                        'theme_location'    => 'main-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'main-menu',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                ));
            ?>
        </section>
    </header>
    <style>

    #main-menu {
        background-color: #454545;
        margin-top: 2%;
        padding-left: 10%;
    }

    .header-content .logo {
        height: 80px;
    }

    .header-content .logo img {
        max-height: 100%;
        max-width: 100%;
    }

    .header-content .top-search {
        margin-top: 20px;
    }

    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }

    .header-content .top-search .search .form-search .form-search-controls input {
        margin-right: -1px;
        width: 100%;
        border: 1px solid #dedede;
        border-radius: 0;
        color: #454545;
        height: 40px;
        padding: 5px;
    }

    .header-content .top-search .search .form-search .form-search-controls .input-group-btn {
        vertical-align: top;
    }

    .header-content .top-search .search .form-search .btn-search {
        background-color: #000000;
        color: #ffffff;
        height: 40px;
        margin-left: -1px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        -moz-background-clip: padding;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        font-size: 14px;
        border: none;
        margin-top: 0;
    }

    .header-content .top-cart {
        margin-top: 20px;
    }

    .header-content .top-cart .cart {
        text-align: right;
    }

    .header-content .top-cart .cart .heading a {
        display: block;
        height: 43px;
        line-height: 40px;
    }

    .header-content .top-cart .cart .heading a .icon {
        background-image: url(<?= get_template_directory_uri() ?>/assets/images/i_mycart.png);
        display: inline-block;
        width: 50px;
        background-repeat: no-repeat;
        background-position: center;
        color: transparent;
        height: 44px;
        margin-right: 5px;
    }

    .header-content .top-cart .cart .heading a i {
        margin-left: 15px;
    }

    .top-link {
        background: #f46164;
        margin-bottom: 0;
        border-top: 2px solid #f46164;
    }

    .top-link ul {
        margin: 0;
    }

    .top-link ul li {
        float: left;
        position: relative;
        line-height: 40px;
        color: #ffffff;
    }

    .top-link ul li a {
        color: #ffffff;
        display: block;
        padding: 10px;
        font-size: 12px;
        float: left;
    }

    .top-link ul li a:hover {
        color: #f46164;
        display: block;
        padding: 10px;
        font-size: 12px;
        float: left;
    }

    .nav-link {
        color: #ffffff !important;
        padding: 16px 30px !important;
        text-transform: uppercase !important;
        height: 53px !important;
        font-size: 15px !important;
    }

    .nav li .nav-link:hover {
        color: #ffffff !important;
        background-color: #f46164;
    }

    i {
        padding-right: 5px;
    }
    </style>