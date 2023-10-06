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
    <link rel="stylesheet" href="css/privacy_policy.css">
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
        <div class="privacyPolicy_page">
            <h1 class="page_title">Privacy Policy</h1>
            <div class="row">
                <div class="col-md-12 col-lg-2 col-xl-2">
                    <ul class="profile_list">
                        <li class="active"><a href="#">Return & Exchange</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Payment & Security</a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-lg-8 col-xl-8">
                    <div class="info_block">
                        <div class="info_title">Returns</div>
                        <div class="description_info">
                            A privacy policy is a statement or a legal document (in privacy law) that discloses some or
                            all of the ways a party gathers, uses, discloses, and manages a customer or client's data.
                            It fulfils a legal requirement to protect a customer or client's privacy. Personal
                            information can be anything that can be used to identify an individual, not limited to the
                            person's name, address, date of birth, marital status, contact information, ID issue, and
                            expiry date, financial records, credit information, medical history, where one travels, and
                            intentions to acquire goods and services. In the case of a business it is often a statement
                            that declares a party's policy on how it collects, stores, and releases personal information
                            it collects. It informs the client what specific information is collected, and whether it is
                            kept confidential, shared with partners, or sold to other firms or enterprises. Privacy
                            policies typically represent a broader, more generalized treatment, as opposed to data use
                            statements, which tend to be more detailed and specific.
                            <br/>
                            <br/>
                            The exact contents of a certain privacy policy will depend upon the applicable law and may
                            need to address requirements across geographical boundaries and legal jurisdictions. Most
                            countries have their own legislation and guidelines of who is covered, what information can
                            be collected, and what it can be used for. In general, data protection laws in Europe cover
                            the private sector as well as the public sector. Their privacy laws apply not only to
                            government operations but also to private enterprises and commercial transactions.
                            California Business and Professions Code, Internet Privacy Requirements (CalOPPA) mandate
                            that websites collecting Personally Identifiable Information (PII) from California residents
                            must conspicuously post their privacy policy. (See also Online Privacy Protection Act)
                        </div>
                        <div class="info_title">Exchanges</div>
                        <div class="description_info">
                            The exact contents of a certain privacy policy will depend upon the applicable law and may
                            need to address requirements across geographical boundaries and legal jurisdictions. Most
                            countries have their own legislation and guidelines of who is covered, what information can
                            be collected, and what it can be used for. In general, data protection laws in Europe cover
                            the private sector as well as the public sector. Their privacy laws apply not only to
                            government operations but also to private enterprises and commercial transactions.
                            <br/>
                            <br/>
                            California Business and Professions Code, Internet Privacy Requirements (CalOPPA) mandate
                            that websites collecting Personally Identifiable Information (PII) from California residents
                            must conspicuously post their privacy policy. (See also Online Privacy Protection Act)
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2">
                    <div class="contacts_list">
                        <div class="list_title">Note</div>
                        <div class="list_description">Please note that due to the holidays, the delivery of orders
                            consisting of several parcels may take 2-3 days longer than announced.
                        </div>
                        <div class="phone_block">
                            <a href="tel:+37410250250" class="icon_phone">00-374 10 250 250</a>
                        </div>
                        <div class="working_house">From Mon to Fri from 9:00 to 21:00</div>
                        <a href="" class="message_btn">Write Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="write_message_popup">
        <div class="popup_inner">
            <div class="popup_container">
                <a href="" class="icon_menu_close write_message_close"></a>
                <div class="popup_title">WRITE A MESSAGE</div>
                <div class="popup_description">You can send your message anytime info@unoshoes.am</div>
                <div class="form_fields">
                    <form action="">
                        <div class="first_line">
                            <div class="field_block">
                                <span class="label_text">Name</span>
                                <input type="text" placeholder="Name" name="full_name" data-validation="required"/>
                                <span class="error_hint">mandatory field</span>
                            </div>
                            <div class="field_block">
                                <span class="label_text">Surname</span>
                                <input type="text" placeholder="Surname" name="surname" data-validation="required"/>
                                <span class="error_hint">mandatory field</span>
                            </div>
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
                            <span class="label_text">Subject</span>
                            <input type="text" placeholder="Subject" name="subject" data-validation="required"/>
                            <span class="error_hint">mandatory field</span>
                        </div>
                        <div class="field_block ">
                            <span class="label_text">Messages</span>
                            <textarea placeholder="Full name" name="full_name" data-validation="required"> </textarea>
                            <span class="error_hint">mandatory field</span>
                        </div>
                        <div class="button_block">
                            <button type="submit" class="validate_button">Send Message</button>
                        </div>
                    </form>
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