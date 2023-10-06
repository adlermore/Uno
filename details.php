<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <title>Personal Details</title>
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
        <div class="details_page">
            <div class="top_block">
                <h1 class="page_title">account</h1>
                <div class="user_name">Welcome, Anna Simonyan!</div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-2 col-xl-2">
                    <ul class="profile_list">
                        <li class="active"><a href="#">Personal Details</a></li>
                        <li><a href="address_book.php">Address Book</a></li>
                        <li><a href="orders.php">Orders & Returns</a></li>
                        <li><a href="new_password.php">Password</a></li>
                        <li><a href="#" class="special">Log Out</a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-lg-10 col-xl-10">
                    <div class="form_container">
                        <form>
                            <div class="row">
                                <div class="field_block col-6">
                                    <span class="label_text">Full Name</span>
                                    <input type="text" placeholder="Full name" name="full_name"
                                           data-validation="required"/>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                                <div class="field_block col-6">
                                    <span class="label_text">Phone Number</span>
                                    <input type="text" placeholder="Number"
                                           oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="full_name"
                                           data-validation="required"/>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                                <div class="field_block col-6">
                                    <span class="label_text">Email</span>
                                    <input type="text" name="mail" placeholder="Email" data-validation="email"/>
                                    <span class="error_hint">
                                            <span class="standard_hint">mandatory field</span>
                                            <span class="individual_hint">invalid e-mail</span>
                                         </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="field_block col-6">
                                    <span class="label_text">Country</span>
                                    <input type="text" placeholder="Country" name="full_name"
                                           data-validation="required"/>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                                <div class="field_block col-6">
                                    <span class="label_text">City</span>
                                    <input type="text" placeholder="City" name="full_name"
                                           data-validation="required"/>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                                <div class="field_block col-6">
                                    <span class="label_text">Address</span>
                                    <input type="text" placeholder="Address" name="full_name"
                                           data-validation="required"/>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                            </div>
                            <div class="button_block">
                                <button type="submit" class="validate_button">Save</button>
                            </div>
                        </form>
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