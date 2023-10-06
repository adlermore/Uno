<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <title>Address Book</title>
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
        <div class="addressBook_page">
            <div class="top_block">
                <h1 class="page_title">account</h1>
                <div class="user_name">Welcome, Anna Simonyan!</div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-2 col-xl-2">
                    <ul class="profile_list">
                        <li><a href="details.php">Personal Details</a></li>
                        <li class="active"><a href="address_book.php">Address Book</a></li>
                        <li><a href="orders.php">Orders & Returns</a></li>
                        <li><a href="new_password.php">Password</a></li>
                        <li><a href="#" class="special">Log Out</a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-lg-10 col-xl-10">
                    <div class="row book_inner">
                        <div class="col-md-12 col-lg-6">
                            <div class="section_block">
                                <div class="block_title">
                                    <span>Default</span>
                                    <a href="" class="icon_trash"></a>
                                </div>
                                <div class="userName_block">Anna Harutyunyan</div>
                                <div class="address_block">5/3 Teryan Street, 4 apartment, <br/> Yerevan, Armenia, 0011
                                </div>
                                <div class="phone_number">(00 374 77) 20 50 50</div>
                                <a href="" class="section_link">Edit Address</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <a href="#" class="add_block"></a>
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