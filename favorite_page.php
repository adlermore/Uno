<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <title>Project Name</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/jslider.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.scrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/favorite_page.css">
    <link rel="stylesheet" href="css/slider_product.css">
    <link rel="stylesheet" href="css/product_inner.css">

    <!--link rel="shortcut icon" href="css/images/favicon.png"-->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jshashtable-2.1_src.js"></script>
    <script src="js/jquery.numberformatter-1.2.3.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.scrollbar.js"></script>
    <script src="js/jquery.form-validator.js"></script>
    <script src="js/jquery.zoom.js"></script>

</head>
<body>
<?php
include 'header.php'
?>
<div class="content">
    <div class="custom_container">
        <div class="favorite_page">
            <h1 class="page_title">Favorites</h1>
            <div class="block_favorite row">
                <div class="col-lg-3 col-xl-2">
                    <div class="promos_page">
                        <div class="filter_button_block">
                            <a href="" class="filter_button">Filter</a>
                        </div>
                        <div class="sort_block">
                            <a href="" class="sort_btn">Sort</a>
                        </div>
                        <div class="filter_section">
                            <div class="filter_inner">
                                <div class="mob_head_block">
                                    FILTER <a href="" class="filter_button icon_close"></a>
                                </div>
                                <div class="filter_block">
                                    <div class="filter_subblock">
                                        <div class="filter_subtitle">Availability</div>
                                        <ul class="radio_list">
                                            <li>
                                                <label>
                                                    <input type="radio" name="radiobutton"/>
                                                    <span class="radio_button">Out of Stock</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" name="radiobutton"/>
                                                    <span class="radio_button">In Stock</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" name="radiobutton"/>
                                                    <span class="radio_button">Not Matter</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-10">
                    <div class="show_filter">
                        <div class="tabs_products">
                            <a href="#" class="active_tab">Price Ascending</a>
                            <a href="#">Price Descending</a>
                        </div>
                    </div>
                    <div class="arrivals_section">
                        <ul class="favorite_inner row">
                            <li class="col-xl-4 col-lg-6">
                                <div class="inner_block combo_hover">
                                    <a href="" class="add_to_wish add_wish icon_heartbg"></a>
                                    <div class="stock_block">out of stock</div>
                                    <a href="" class="product_image combo_link">
                                        <img src="images/product_1.jpg" alt="" title=""/>
                                    </a>
                                    <div class="product_price">19,900 AMD</div>
                                    <a href="" class="product_name combo_link">Platform Ankle Boots</a>
                                </div>
                            </li>
                            <li class="col-xl-4 col-lg-6">
                                <div class="inner_block combo_hover">
                                    <a href="" class="add_to_wish add_wish icon_heartbg"></a>
                                    <a href="" class="product_image combo_link">
                                        <img src="images/product_2.jpg" alt="" title=""/>
                                    </a>
                                    <div class="product_price">19,900 AMD</div>
                                    <a href="" class="product_name combo_link">Classic Gray Trousers</a>
                                    <div class="color_block">
                                        <div class="color_product" style="background: #000000"></div>
                                        <div class="color_product" style="background: #FFFFFF"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-4 col-lg-6">
                                <div class="inner_block combo_hover">
                                    <a href="" class="add_to_wish add_wish icon_heartbg"></a>
                                    <a href="" class="product_image combo_link">
                                        <img src="images/product_3.jpg" alt="" title=""/>
                                    </a>
                                    <div class="product_price">19,900 AMD</div>
                                    <a href="" class="product_name combo_link">Lace-up Leather High Heel ankle boots</a>
                                </div>
                            </li>
                            <li class="col-xl-4 col-lg-6">
                                <div class="inner_block combo_hover">
                                    <a href="" class="add_to_wish add_wish icon_heartbg"></a>
                                    <a href="" class="product_image combo_link">
                                        <img src="images/product_4.jpg" alt="" title=""/>
                                    </a>
                                    <div class="product_price">19,900 AMD</div>
                                    <a href="" class="product_name combo_link">Platform Ankle Boots</a>
                                    <div class="color_block">
                                        <div class="color_product" style="background: #A90000"></div>
                                        <div class="color_product" style="background: #000000"></div>
                                        <div class="color_product" style="background: #FFFFFF"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-4 col-lg-6">
                                <div class="inner_block combo_hover">
                                    <a href="" class="add_to_wish add_wish icon_heartbg"></a>
                                    <a href="" class="product_image combo_link">
                                        <img src="images/product_1.jpg" alt="" title=""/>
                                    </a>
                                    <div class="product_price">19,900 AMD</div>
                                    <a href="" class="product_name combo_link">Lace-up Leather High Heel ankle boots</a>
                                    <div class="color_block">
                                        <div class="color_product" style="background: #FFFFFF"></div>
                                        <div class="color_product" style="background: #000000"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-4 col-lg-6">
                                <div class="inner_block combo_hover">
                                    <a href="" class="add_to_wish add_wish icon_heartbg"></a>
                                    <div class="stock_block">out of stock</div>
                                    <a href="" class="product_image combo_link">
                                        <img src="images/product_2.jpg" alt="" title=""/>
                                    </a>
                                    <div class="product_price">19,900 AMD</div>
                                    <a href="" class="product_name combo_link">Leather Mid-Heel Cowboy Heel</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php'
?>
<script src="js/main.js"></script>
</body>
</html>