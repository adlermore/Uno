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
    <link rel="stylesheet" href="css/product_inner.css">
    <link rel="stylesheet" href="css/product_listing.css">
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
        <div class="listing_page">
            <h1 class="page_title">Women’s Shoes</h1>
            <div class="row">
                <div class="col-lg-3 col-xl-2">
                    <div class="product_count">
                        <span>Found:</span>
                        <span>232 Products</span>
                    </div>
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
                                <form>
                                    <div class="filter_block">
                                        <div class="filter_subblock">
                                            <div class="filter_subtitle">Shoes</div>
                                            <ul class="radio_list">
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radiobutton"/>
                                                        <span class="radio_button">Boots</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radiobutton"/>
                                                        <span class="radio_button">Booties</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radiobutton"/>
                                                        <span class="radio_button">Heels</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radiobutton"/>
                                                        <span class="radio_button">Flats</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radiobutton"/>
                                                        <span class="radio_button">Sandals</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radiobutton"/>
                                                        <span class="radio_button">Mules & Slides</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="filter_subblock">
                                            <div class="filter_subtitle">Style</div>
                                            <ul class="checkbox_list">
                                                <li data-filter="style">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Sport</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="style">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button  icon_check">Dress</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="style">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Balerinas</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="style">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Sneakers</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="style">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Espadrille</span>
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="filter_subblock">
                                            <div class="filter_subtitle">Material</div>
                                            <ul class="checkbox_list">
                                                <li data-filter="material">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Textile</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="material">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Rubber</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="material">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Leather</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="material">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">PU</span>
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="filter_subblock">
                                            <div class="title_blocks">
                                                <div class="filter_subtitle">Size</div>
                                                <a href="" class="filter_subtitle sizes_popup_button">Guide</a>
                                            </div>
                                            <ul class="checkbox_list">
                                                <li data-filter="size_guide">
                                                    <label>
                                                      <span class="checkbox">
                                                            <span class="checkbox_button icon_check">34</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="size_guide">
                                                    <label>
                                                      <span class="checkbox">
                                                            <span class="checkbox_button icon_check">35</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="size_guide">
                                                    <label>
                                                      <span class="checkbox">
                                                            <span class="checkbox_button icon_check">36</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="size_guide">
                                                    <label>
                                                      <span class="checkbox">
                                                            <span class="checkbox_button icon_check">37</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="size_guide">
                                                    <label>
                                                      <span class="checkbox">
                                                            <span class="checkbox_button icon_check">38</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="size_guide">
                                                    <label>
                                                      <span class="checkbox">
                                                            <span class="checkbox_button icon_check">39</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="size_guide">
                                                    <label>
                                                      <span class="checkbox">
                                                            <span class="checkbox_button icon_check">40</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="size_guide">
                                                    <label>
                                                      <span class="checkbox">
                                                            <span class="checkbox_button icon_check">41</span>
                                                        </span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="filter_subblock">
                                            <div class="filter_subtitle">Colour</div>
                                            <ul class="checkbox_list">
                                                <li data-filter="colour">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Black</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="colour">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">White</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="colour">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Beige</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="colour">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Red</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="colour">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Yellow</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="colour">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Blue</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="colour">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Green</span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li data-filter="colour">
                                                    <label>
                                                        <span class="checkbox">
                                                            <span class="checkbox_button icon_check">Purple</span>
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="filter_fields">
                                            <div class="filter_subblock">
                                                <div class="filter_subtitle">Price</div>
                                                <div class="range_block">
                                                    <input class="lineslider" name="range"
                                                           value="1000;500000" data-min="1000" data-max="500000"
                                                           data-step="1000"/>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="hidden" class="range_input" name="range_from"
                                                               oninput="this.value=this.value.replace(/[^0-9]/g,'');"/>
                                                        <div class="range_from"></div>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="hidden" class="range_input" name="range_to"
                                                               oninput="this.value=this.value.replace(/[^0-9]/g,'');"/>
                                                        <div class="range_to"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button_block">
                                        <button type="submit">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-10">
                    <div class="show_filter custom_container">
                        <div class="name_block">Women</div>
                        <div class="block_filters">
                        </div>
                        <div class="tabs_products">
                            <a href="#" class="active_tab">Price Ascending</a>
                            <a href="#">Price Ascending</a>
                        </div>
                    </div>
                    <ul class="listing_product row">
                        <li class="col-lg-4 col-sm-6  col-12">
                            <div class="listing_block combo_hover">
                                <a href="product_inner.php" class="product_image combo_link">
                                    <img src="images/product_1.jpg" alt="" title=""/>
                                </a>
                                <div class="product_price">19,900 AMD</div>
                                <div class="product_name">Platform Ankle Boots</div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-sm-6  col-12">
                            <div class="listing_block combo_hover">
                                <a href="product_inner.php" class="product_image combo_link">
                                    <img src="images/product_2.jpg" alt="" title=""/>
                                </a>
                                <div class="product_price">19,900 AMD</div>
                                <div class="product_name">Classic Gray Trousers</div>
                                <div class="color_block">
                                    <div class="color_product" style="background: #000000"></div>
                                    <div class="color_product" style="background: #FFFFFF"></div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-sm-6  col-12">
                            <div class="listing_block combo_hover">
                                <a href="product_inner.php" class="product_image combo_link">
                                    <img src="images/product_3.jpg" alt="" title=""/>
                                </a>
                                <div class="product_price">19,900 AMD</div>
                                <div class="product_name">Lace-up Leather High Heel ankle boots</div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-sm-6  col-12">
                            <div class="listing_block combo_hover">
                                <a href="product_inner.php" class="product_image combo_link">
                                    <img src="images/product_4.jpg" alt="" title=""/>
                                </a>
                                <div class="product_price">19,900 AMD</div>
                                <div class="product_name">Platform Ankle Boots</div>
                                <div class="color_block">
                                    <div class="color_product" style="background: #A90000"></div>
                                    <div class="color_product" style="background: #000000"></div>
                                    <div class="color_product" style="background: #FFFFFF"></div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-sm-6  col-12">
                            <div class="listing_block combo_hover">
                                <a href="product_inner.php" class="product_image combo_link">
                                    <img src="images/product_1.jpg" alt="" title=""/>
                                </a>
                                <div class="product_price">19,900 AMD</div>
                                <div class="product_name">Lace-up Leather High Heel ankle boots</div>
                                <div class="color_block">
                                    <div class="color_product" style="background: #FFFFFF"></div>
                                    <div class="color_product" style="background: #000000"></div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-sm-6  col-12">
                            <div class="listing_block combo_hover">
                                <a href="product_inner.php" class="product_image combo_link">
                                    <img src="images/product_2.jpg" alt="" title=""/>
                                </a>
                                <div class="product_price">19,900 AMD</div>
                                <div class="product_name">Leather Mid-Heel Cowboy Heel</div>
                            </div>
                        </li>
                    </ul>
                    <div class="bottom_block">
                        <div class="per_page">
                            <div class="results_title">Results Per Page:</div>
                            <ul>
                                <li class="current_results"><a href="#">12</a></li>
                                <li><a href="#">36</a></li>
                                <li><a href="#">60</a></li>
                            </ul>
                        </div>
                        <div class="paging">
                            <ul>
                                <li><a href="#" class="prev_page icon_arrow_right"></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="current_page">2</a></li>
                                <li><span>...</span></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#" class="next_page icon_arrow_right"></a></li>
                            </ul>
                            <div class="form_page">from 241</div>
                        </div>
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