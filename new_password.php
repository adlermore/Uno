<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <title>Password</title>
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
        <div class="newPassword_page">
            <div class="top_block">
                <h1 class="page_title">account</h1>
                <div class="user_name">Welcome, Anna Simonyan!</div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-2 col-xl-2">
                    <ul class="profile_list">
                        <li><a href="details.php">Personal Details</a></li>
                        <li><a href="address_book.php">Address Book</a></li>
                        <li><a href="orders.php">Orders & Returns</a></li>
                        <li class="active"><a href="new_password.php">Password</a></li>
                        <li><a href="#" class="special">Log Out</a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-lg-10 col-xl-10">
                    <div class="form_container">
                        <form>
                            <div class="row">
                                <div class="field_block col-6">
                                    <span class="label_text">Current Password</span>
                                    <input type="password" placeholder="Current Password" name="current_password"
                                           data-validation="required"/>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="field_block col-6">
                                    <span class="label_text">New Password</span>
                                    <input type="password" class="newPassword" placeholder="New Password"
                                           name="new_password" data-validation="required"/>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                                <div class="field_block col-6">
                                    <span class="label_text">Repeat New Password</span>
                                    <input type="password" class="repeatPassword" placeholder="Repeat New Password"
                                           name="repeat_password" data-validation="required"/>
                                    <span class="error_hint">mandatory field</span>
                                </div>
                            </div>
                            <div class="button_block">
                                <span>Your password must be between 8 and 30 characters & at least one uppercase, or capital, letter.</span>
                                <button type="submit" class="validate_button asd">Change Password</button>
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