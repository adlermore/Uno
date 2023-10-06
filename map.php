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

    <link rel="stylesheet" href="css/map.css">
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
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>
</head>
<body>
<?php
include 'header.php'
?>
<div class="content">
    <div class="branches_container">
        <div class="list_container">
            <h1 class="page_title">Store Locator</h1>
            <div class="search_block">
                <form class="search_form">
                    <input type="text" class="search_input" placeholder="Search">
                    <button class="icon_search" type="submit"></button>
                </form>
            </div>
            <div class="container_inner">
                <a href="" class="icon_mail message_btn"></a>
                <div class="block_all">

                    <div class="menu_store">
                        <ul>
                            <li>
                                <a href="" data-tab="azatutyun" class="branch" data-coords="40.156225, 44.481066" data-title="Ազատության 12" data-address="Ազատության 12" data-region="Երևան">
                                    <div class="city_block icon_pin">"Abovyan" shop</div>
                                    <div class="street_block">Armenia, 0009, Yerevan <br/>
                                        Abovyan St., 35 Building, Area 17<br/>
                                        (Kentron adm. district)
                                    </div>
                                    <div class="week_days">"Mon Tue Wed Thu Fri Sat Sun 10:00-20:00</div>
                                </a>
                            </li>
                            <li>
                                <a href="" data-tab="koryun"  class="branch"  data-coords="40.2028012, 44.5235610" data-title="Կորյունի"
                                   data-address="Կորյունի 58" data-region="Երևան">
                                    <div class="city_block icon_pin">"Abovyan" shop</div>
                                    <div class="street_block">Armenia, 0009, Yerevan <br/>
                                        Abovyan St., 35 Building, Area 17<br/>
                                        (Kentron adm. district)
                                    </div>
                                    <div class="week_days">"Mon Tue Wed Thu Fri Sat Sun 10:00-20:00</div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="branch"  data-tab="komitas" data-coords="40.2062006,44.5197661" data-title="Կոմիտաս"
                                   data-address="Կոմիտաս 58" data-region="Երևան">
                                    <div class="city_block icon_pin">"Abovyan" shop</div>
                                    <div class="street_block">Armenia, 0009, Yerevan <br/>
                                        Abovyan St., 35 Building, Area 17<br/>
                                        (Kentron adm. district)
                                    </div>
                                    <div class="week_days">"Mon Tue Wed Thu Fri Sat Sun 10:00-20:00</div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="branch"  data-tab="giriboyedovi" data-coords="40.173125,44.5142302" data-title="Գրիբոյեդովի"
                                   data-address="Գրիբոյեդովի 21/9"
                                   data-region="Երևան">
                                    <div class="city_block icon_pin">"Abovyan" shop</div>
                                    <div class="street_block">Armenia, 0009, Yerevan <br/>
                                        Abovyan St., 35 Building, Area 17<br/>
                                        (Kentron adm. district)
                                    </div>
                                    <div class="week_days">"Mon Tue Wed Thu Fri Sat Sun 10:00-20:00</div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="branch"  data-tab="komitas1" data-coords="40.206382, 44.518581" data-title="Կոմիտաս 1"
                                   data-address="Գրիբոյեդովի 21/9"
                                   data-region="Երևան">
                                    <div class="city_block icon_pin">"Abovyan" shop</div>
                                    <div class="street_block">Armenia, 0009, Yerevan <br/>
                                        Abovyan St., 35 Building, Area 17<br/>
                                        (Kentron adm. district)
                                    </div>
                                    <div class="week_days">"Mon Tue Wed Thu Fri Sat Sun 10:00-20:00</div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="branch"  data-tab="giriboyedovi1" data-coords="40.205154, 44.513400" data-title="Գրիբոյեդովի 1"
                                   data-address="Գրիբոյեդովի 21/9"
                                   data-region="Երևան">
                                    <div class="city_block icon_pin">"Abovyan" shop</div>
                                    <div class="street_block">Armenia, 0009, Yerevan <br/>
                                        Abovyan St., 35 Building, Area 17<br/>
                                        (Kentron adm. district)
                                    </div>
                                    <div class="week_days">"Mon Tue Wed Thu Fri Sat Sun 10:00-20:00</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="map_block">
        <div id="map-canvas"></div>
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


<script src="js/main.js"></script>
</body>
</html>