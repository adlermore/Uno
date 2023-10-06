<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <title>Orders</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.scrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/product_inner.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="shortcut icon" href="css/images/favicon.png">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-select.js"></script>
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
    <div class="custom_container">
        <div class="orders_page">
            <div class="top_block">
                <h1 class="page_title">account</h1>
                <div class="user_name">Welcome, Anna Simonyan!</div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-2 col-xl-2">
                    <ul class="profile_list">
                        <li><a href="details.php">Personal Details</a></li>
                        <li><a href="address_book.php">Address Book</a></li>
                        <li class="active"><a href="orders.php">Orders & Returns</a></li>
                        <li><a href="new_password.php">Password</a></li>
                        <li><a href="#" class="special">Log Out</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-10 col-xl-10">
                    <div class="order_block">
                        <div class="order_inner">
                            <ul>
                                <li>Order Number: 79233787</li>
                                <li>03 Dec 2019, 9:59AM</li>
                                <li>Total: 17,000AMD</li>
                                <li class="completed_block" data-status="Status">Completed</li>
                                <li><a href="" class="details_button icon_arrow_bottom"></a></li>
                            </ul>
                        </div>
                        <div class="content_block">
                            <div class="inner_block">
                                <div class="block_img">
                                    <img src="images/product_3.jpg" alt="" title=""/>
                                </div>
                                <div class="left_block">
                                    <div class="product_name">Nabour Boots</div>
                                    <div class="product_colour" data-colour="Colour:"> Beige</div>
                                    <div class="product_size" data-size="Size:"> 37</div>
                                </div>
                                <div class="right_block">
                                    <div class="product_quantity">Quantity: 1</div>
                                    <div class="product_money" data-oldPrice="19,900AMD">17,900 AMD</div>
                                </div>
                            </div>
                            <div class="inner_block">
                                <div class="block_img">
                                    <img src="images/product_6.jpg" alt="" title=""/>
                                </div>
                                <div class="left_block">
                                    <div class="product_name">Nabour Boots</div>
                                    <div class="product_colour" data-colour="Colour:"> Beige</div>
                                    <div class="product_size" data-size="Size:"> 37</div>
                                </div>
                                <div class="right_block">
                                    <div class="product_quantity">Quantity: 1</div>
                                    <div class="product_money" data-oldPrice="19,900AMD">17,900 AMD</div>
                                </div>
                            </div>
                            <div class="sum_order_block">
                                <div class="sum_inner">
                                    <div class="sub_total">
                                        <span>Subtotal</span>
                                        <span>45,200AMD</span>
                                    </div>
                                    <div class="shipping_block">
                                        <span>Shipping</span>
                                        <span>Free</span>
                                    </div>
                                    <div class="order_total">
                                        <span>Order Total</span>
                                        <span>45,700AMD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="address_block">
                                        <div class="address_inner">Delivery</div>
                                        <div class="address_name">Standard Home</div>
                                        <div class="street_block">Anna Harutyunyan <br/>
                                            5/3 Teryan Street, 4 apartment,<br/>
                                            Yerevan, Armenia <br/>
                                            0011
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="address_block">
                                        <div class="address_inner">Payment Details</div>
                                        <div class="street_block">Visa Card Ending in 9915 <br/>
                                            (expires on 10/20)
                                        </div>
                                    </div>
                                </div>
                                <div class="button_block">
                                    <button type="submit">Cancel / Remove Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_block">
                        <div class="order_inner">
                            <ul>
                                <li>Order Number: 79233787</li>
                                <li>03 Dec 2019, 9:59AM</li>
                                <li>Total: 17,000AMD</li>
                                <li class="canceled_block" data-status="Status">Canceled</li>
                                <li><a href="" class="details_button icon_arrow_bottom"></a></li>
                            </ul>
                        </div>
                        <div class="content_block">
                            <div class="inner_block">
                                <div class="block_img">
                                    <img src="images/product_6.jpg" alt="" title=""/>
                                </div>
                                <div class="left_block">
                                    <div class="product_name">Nabour Boots</div>
                                    <div class="product_colour" data-colour="Colour:"> Beige</div>
                                    <div class="product_size" data-size="Size:"> 37</div>
                                </div>
                                <div class="right_block">
                                    <div class="product_quantity">Quantity: 1</div>
                                    <div class="product_money" data-oldPrice="19,900AMD">17,900 AMD</div>
                                </div>
                            </div>
                            <div class="sum_order_block">
                                <div class="sum_inner">
                                    <div class="sub_total">
                                        <span>Subtotal</span>
                                        <span>45,200AMD</span>
                                    </div>
                                    <div class="shipping_block">
                                        <span>Shipping</span>
                                        <span>Free</span>
                                    </div>
                                    <div class="order_total">
                                        <span>Order Total</span>
                                        <span>45,700AMD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="address_block">
                                        <div class="address_inner">Delivery</div>
                                        <div class="address_name">Standard Home</div>
                                        <div class="street_block">Anna Harutyunyan <br/>
                                            5/3 Teryan Street, 4 apartment,<br/>
                                            Yerevan, Armenia <br/>
                                            0011
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="address_block">
                                        <div class="address_inner">Payment Details</div>
                                        <div class="street_block">Visa Card Ending in 9915 <br/>
                                            (expires on 10/20)
                                        </div>
                                    </div>
                                </div>
                                <div class="button_block">
                                    <button type="submit">Cancel / Remove Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_block">
                        <div class="order_inner">
                            <ul>
                                <li>Order Number: 79233787</li>
                                <li>03 Dec 2019, 9:59AM</li>
                                <li>Total: 17,000AMD</li>
                                <li class="pending_block" data-status="Status">Pending</li>
                                <li><a href="" class="details_button icon_arrow_bottom"></a></li>
                            </ul>
                        </div>
                        <div class="content_block">
                            <div class="inner_block">
                                <div class="block_img">
                                    <img src="images/product_3.jpg" alt="" title=""/>
                                </div>
                                <div class="left_block">
                                    <div class="product_name">Nabour Boots</div>
                                    <div class="product_colour" data-colour="Colour:"> Beige</div>
                                    <div class="product_size" data-size="Size:"> 37</div>
                                </div>
                                <div class="right_block">
                                    <div class="product_quantity">Quantity: 1</div>
                                    <div class="product_money" data-oldPrice="19,900AMD">17,900 AMD</div>
                                </div>
                            </div>
                            <div class="sum_order_block">
                                <div class="sum_inner">
                                    <div class="sub_total">
                                        <span>Subtotal</span>
                                        <span>45,200AMD</span>
                                    </div>
                                    <div class="shipping_block">
                                        <span>Shipping</span>
                                        <span>Free</span>
                                    </div>
                                    <div class="order_total">
                                        <span>Order Total</span>
                                        <span>45,700AMD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="address_block">
                                        <div class="address_inner">Delivery</div>
                                        <div class="address_name">Standard Home</div>
                                        <div class="street_block">Anna Harutyunyan <br/>
                                            5/3 Teryan Street, 4 apartment,<br/>
                                            Yerevan, Armenia <br/>
                                            0011
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="address_block">
                                        <div class="address_inner">Payment Details</div>
                                        <div class="street_block">Visa Card Ending in 9915 <br/>
                                            (expires on 10/20)
                                        </div>
                                    </div>
                                </div>
                                <div class="button_block">
                                    <button type="submit">Cancel / Remove Order</button>
                                </div>
                            </div>
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