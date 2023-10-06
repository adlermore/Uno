<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <title>Chekout</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/jslider.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.scrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/product_inner.css">

    <link rel="stylesheet" href="css/checkout.css">
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
    <script src="js/jquery.form-validator.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.scrollbar.js"></script>
    <script src="js/jquery.zoom.js"></script>
</head>
<body>
<?php
include 'header.php'
?>
<div class="content">
    <div class="checkout_section">
        <form class="checkout_form">
            <div class="form_fields">
                <div class="custom_container">
                    <div class="checkount_inner_section">
                        <div class="form_container">
                            <div class="first_line_block">
                                <h1 class="page_title">CHECKOUT</h1>
                                <div class="sign_in_link">
                                    Are you a returning customer?
                                    <a href="" class="icon_sign_in_lock">Sign In</a>    
                                </div>
                                <a href="" class="review_btn">Review Cart</a>
                            </div>
                            <div class="form_description">PERSONAL INFORMATION</div>
                            <div class="form_block">
                                <div class="form_first_container">
                                    <div class="left_block">
                                        <div class="field_block">
                                            <span class="label_text">Full Name</span>
                                            <input type="text" placeholder="Full name" name="full_name" data-validation="required"/>
                                            <span class="error_hint">mandatory field</span>
                                        </div>
                                        <div class="field_block">
                                            <span class="label_text">Email</span>
                                            <input type="text" name="mail" placeholder="Email" data-validation="email"/>
                                            <span class="error_hint">
                                                <span class="standard_hint">mandatory field</span>
                                                <span class="individual_hint">invalid e-mail</span>
                                            </span>
                                        </div>
                                        <div class="field_block">
                                            <span class="label_text">City</span>
                                            <input type="text" placeholder="City" name="full_name" data-validation="required"/>
                                            <span class="error_hint">mandatory field</span>
                                        </div>
                                    </div>
                                    <div class="right_block">
                                        <div class="field_block">
                                            <span class="label_text">Phone Number</span>
                                            <input type="text" placeholder="Number" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="full_name" data-validation="required"/>
                                            <span class="error_hint">mandatory field</span>
                                        </div> 
                                        <div class="field_block">
                                            <span class="label_text">Country</span>
                                            <input type="text" placeholder="Country" name="full_name" data-validation="required"/>
                                            <span class="error_hint">mandatory field</span>
                                        </div> 
                                        <div class="field_block">
                                            <span class="label_text">Address</span>
                                            <input type="text" placeholder="Address" name="full_name" data-validation="required"/>
                                            <span class="error_hint">mandatory field</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="field_block ">
                                    <span class="label_text">Additional Information</span>
                                    <textarea placeholder="Full name" name="full_name" data-validation="required"> </textarea>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                                <div class="checkbox_block">
                                    <label for="checkout_btn">
                                        <input type="checkbox" id="checkout_btn">
                                        <span id="box" class="icon_check"></span>
                                        <span class="box_title">Remember me</span>
                                    </label>
                                </div>
                                <div class="form_description delivery_desc">DELIVERY</div>
                                <div class="delivery_container">
                                    <div class="left_block">
                                        <label for="radio_btn1" class="delivery_block">
                                            <input type="radio" name="delivery_radio" id="radio_btn1">
                                            <span  class='block_clone'></span>
                                            <span  class="delivery_title icon_pick_up_in_store">Pick-up in store</span>
                                            <span  class="inner_title">Free</span>
                                        </label>
                                        <label for="radio_btn2" class="delivery_block">
                                            <input type="radio"  name="delivery_radio" id="radio_btn2">
                                            <span class='block_clone'></span>
                                            <span class="delivery_title icon_delivery_express_home">Express Home</span>
                                            <span class="inner_title">1,000 AMD</span>
                                        </label>
                                    </div>
                                    <div class="right_block">
                                        <label for="radio_btn3" class="delivery_block">
                                            <input type="radio" name="delivery_radio" id="radio_btn3" checked>
                                            <span class='block_clone'></span>
                                            <span class="delivery_title icon_delivery_home">Standard Home</span>
                                            <span class="inner_title">free me</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="payment_method_container">
                                    <div class="form_description delivery_desc">PAYMNET METHOD</div>
                                    <div class="method_list">
                                        <label for="radio_btn4" class="payment_block">
                                            <input type="radio" name="payment_radio" id="radio_btn4">
                                            <span class='block_clone'></span>
                                            <span class="inner_title">Cash</span>
                                        </label>
                                        <label for="radio_btn5" class="payment_block">
                                            <input type="radio" name="payment_radio" id="radio_btn5" checked>
                                            <span class='block_clone'></span>
                                            <span class="inner_title">Credit Card</span>
                                        </label>
                                        <label for="radio_btn6" class="payment_block">
                                            <input type="radio" name="payment_radio" id="radio_btn6">
                                            <span class='block_clone'></span>
                                            <span class="inner_title">Payment terminal</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product_container">
                        <a href="" class="icon_menu_close review_close"></a>
                            <div class="shopping_bag_block">
                                <div class="shoping_inner_block">
                                    <div class="shoping_container">
                                        <div class="shoping_bag_list">
                                            <div class="shoping_list_inner">
                                                <div class="product_block">
                                                    <div class="image_block">
                                                        <img src="images/product_3.jpg" alt="" title="" />
                                                    </div>
                                                    <div class="info_block">
                                                        <div class="top_ineer_block">
                                                            <a href="" class="icon_trash"></a>
                                                            <div class="product_name">Nabour Boots</div>
                                                            <div class="product_price">
                                                                <div class="active_price">17,900<span>AMD</span></div>
                                                                <div class="old_price">24 900 <span>AMD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="bottom_ineer_block">
                                                            <a href="" class="modal_link">Beige <span>37</span></a>
                                                            <div class="product_count">
                                                                <a href="" class="left_arrow icon_arrow_left"></a>
                                                                <input  maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="text" class="prod_number" value="1"/>
                                                                <div class="right_arrow icon_arrow_right"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_block">
                                                    <div class="image_block">
                                                        <img src="images/product_6.jpg" alt="" title="" />
                                                    </div>
                                                    <div class="info_block">
                                                        <div class="top_ineer_block">
                                                            <a href="" class="icon_trash"></a>
                                                            <div class="product_name">Nabour Boots</div>
                                                            <div class="product_price">
                                                                <div class="active_price">17,900<span>AMD</span></div>
                                                                <div class="old_price">24 900 <span>AMD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="bottom_ineer_block">
                                                            <a href="" class="modal_link">Beige <span>37</span></a>
                                                            <div class="product_count">
                                                                <a href="" class="left_arrow icon_arrow_left"></a>
                                                                <input  maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="text" class="prod_number" value="1"/>
                                                                <div class="right_arrow icon_arrow_right"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_block">
                                                    <div class="image_block">
                                                        <img src="images/product_2.jpg" alt="" title="" />
                                                    </div>
                                                    <div class="info_block">
                                                        <div class="top_ineer_block">
                                                            <a href="" class="icon_trash"></a>
                                                            <div class="product_name">Nabour Boots</div>
                                                            <div class="product_price">
                                                                <div class="active_price">17,900<span>AMD</span></div>
                                                                <div class="old_price">24 900 <span>AMD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="bottom_ineer_block">
                                                            <a href="" class="modal_link">Beige <span>37</span></a>
                                                            <div class="product_count">
                                                                <a href="" class="left_arrow icon_arrow_left"></a>
                                                                <input  maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="text" class="prod_number" value="1"/>
                                                                <a class="right_arrow icon_arrow_right"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_block">
                                                    <div class="image_block">
                                                        <img src="images/product_6.jpg" alt="" title="" />
                                                    </div>
                                                    <div class="info_block">
                                                        <div class="top_ineer_block">
                                                            <a href="" class="icon_trash"></a>
                                                            <div class="product_name">Nabour Boots</div>
                                                            <div class="product_price">
                                                                <div class="active_price">17,900<span>AMD</span></div>
                                                                <div class="old_price">24 900 <span>AMD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="bottom_ineer_block">
                                                            <a href="" class="modal_link">Beige <span>37</span></a>
                                                            <div class="product_count">
                                                                <a href="" class="left_arrow icon_arrow_left"></a>
                                                                <input  maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="text" class="prod_number" value="1"/>
                                                                <div class="right_arrow icon_arrow_right"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom_block">
                                            <div class="subtotal_block">
                                                <div class="inner_title">Subtotal</div>
                                                <div class="total_sum">17,000<span>AMD</span></div>
                                            </div>
                                            <div class="shipping_block">
                                                <div class="inner_title">Shipping</div>
                                                <div class="shiping">Free</div>
                                            </div>
                                            <div class="total_order_block">
                                                <div class="inner_title">Order Total</div>
                                                <div class="order_sum">45,700AMD</div>
                                            </div>
                                        </div>
                                    </div>               
                                </div>                                                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom_section_order">
                    <div class="custom_container">
                        <div class="content_block">
                            <div class="total_order">Order Total: 45,700 AMD</div>
                            <div class="content_description">By placing your order, you agree to unoshoes.am’s <a href="">privacy</a> notice and <a href=""> conditions of use.</a></div>
                        </div>
                        <div class="button_block">
                            <button type="submit" class="validate_button checkout_btn">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="checkout_success_popup">
            <div class="popup_inner ">
                <div class="popup_inner_container">
                    <a href="" class="icon_menu_close success_close"></a>
                    <span class="icon_check"></span>
                    <div class="popup_title">Thank you for your purchase</div>
                    <div class="popup_desc">You have successfully placed your order!</div>
                    <a href="" class="continue_btn">Continue Shopping</a>
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