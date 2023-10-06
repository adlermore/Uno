var $bigNoteSize = 1440;
var $noteSize = 1366;
var $smalldSize = 1200;
var $tabletSize = 1024;
var $middleTSize = 992;
var $smallTSize = 768;
var $landMSize = 640;
var $largestMSize = 576;
var $largeMSize = 480;
var $middleMSize = 400;
var $smallMSize = 360;

function changeBigImage(e) {
    e.preventDefault();
    var imageButton = $(this);
    var imageBlock = imageButton.parent();
    var imagesSlider = $(this).parents('.images_slider');
    var activeNum = parseInt(imageBlock.index());
    if (!imageButton.hasClass('selected')) {
        imagesSlider.find('.selected').removeClass('selected');
        imageButton.addClass('selected');
        $('.big_images .images_slider').slick('slickGoTo', activeNum);
    }
}

function isTouchDevice() {
    return 'ontouchstart' in document.documentElement;
};

function detectDevice() {
    if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
        $('body').addClass('ios_device');
    }
    ;
}

function closeAllMenues(evt) {
    detectDevice();
    $('.lg_list').removeClass('opened');
    $('.sublist_content').removeClass('opened');
    if (isTouchDevice() && !$('body').hasClass('menu_opened')) {
        $('.catalog_menu .menu_list > li').removeClass('opened');
        $('.catalog_menu .submenu_list').fadeOut(300);
    }
}

function ignorBodyClick(evt) {
    evt.stopPropagation();
}

function ignorMobileBodyClick(evt) {
    if (window.innerWidth < 992) {
        evt.stopPropagation();
    }
}

function mobMenuTrigger(e) {
    e.preventDefault();
    if ($('body').hasClass('menu_opened')) {
        $('body').removeClass('menu_opened');
        $('.sublist_content').removeClass('opened');
    } else {
        $('.menu_list li').removeClass('opened');
        $('.submenu_list').hide();
        $('.header_menu_inner').removeClass('not_scroll').animate({ scrollTop: 0 }, 0);
        $('.submenu_list').animate({ scrollTop: 0 }, 0);
        $('body').addClass('menu_opened');
    }
}

function detectContentHeight() {
    var freeSpace = window.innerHeight - $('.header').height() - $('.footer').height();
    if (freeSpace > 0) {
        $('.content').css('min-height', freeSpace);
    } else {
        $('.content').css('min-height', 0);
    }
    ;
    $('.footer').css('opacity', 1);
}

function checkFields() {
    $('form input').change(function () {
        if ($(this).val().length > 0) {
            $(this).parent().find('.individual_hint').show();
            $(this).parent().find('.standard_hint').hide();
        } else {
            $(this).parent().find('.individual_hint').hide();
            $(this).parent().find('.standard_hint').show();
        }
    });
}

function checkForm() {
    $.validate({
        scrollToTopOnError: false,
    });
};

function openLanguages(evt) {
    evt.preventDefault();
    if (!$('.language_block').hasClass('opened')) {
        closeAllMenues(evt);
        evt.stopPropagation();
        $('.language_block').addClass('opened');
        $('.language_list').stop(true, true).slideDown();
    }
    ;
}

var dropToggle = function (e) {
    e.preventDefault();
    if ($(this).parent().hasClass('opened')) {
        $(this).parent().removeClass('opened').find('.drop_element').slideUp(300);
    } else {
        if (!$('.support_block').hasClass('custom_section')) {
            $('.drops_list li').removeClass('opened');
            $('.drop_element').slideUp(300);
        }
        $(this).parent().addClass('opened').find('.drop_element').stop(true, true).slideDown(300);
        setTimeout(function () {
            if ($('.drops_list li.opened').offset().top < $(document).scrollTop()) {
                $('body,html').animate({ scrollTop: $('.drops_list li.opened').offset().top }, 300);
            }
        }, 300)
    }

    if ($(this).parent().hasClass('opened')) {
        if (!$('.support_block').hasClass('custom_section')) {
            $('.drop_button').removeClass('opened_link');
        }
        $(this).parent().find('.drop_button').addClass('opened_link');
        // $('.close_button').text('CLOSE');
    } else {
        $(this).parent().find('.drop_button').removeClass('opened_link')
        // $('.close_button').text('VIEW');

    }
};

var openSubWithClick = function (evt) {
    if (isTouchDevice() || $('body').hasClass('menu_opened')) {
        evt.preventDefault();
    }
    if (isTouchDevice() && !$('body').hasClass('menu_opened') && !$(this).parents('li').hasClass('opened')) {
        closeAllMenues(evt);
        evt.stopPropagation();
        $(this).parents('li').addClass('opened').find('.submenu_list').stop(true, true).slideDown(300);
    } else if ($('body').hasClass('menu_opened')) {
        if ($(this).parents('li').hasClass('opened')) {
            $(this).parents('li').removeClass('opened');
            $('.header_menu_inner').removeClass('not_scroll');
        } else {
            $('.header_menu_inner').addClass('not_scroll');
            $('.menu_list > li.opened').removeClass('opened');
            $(this).parents('li').addClass('opened');
        }
    }
}
var delayTime = null;

function openSubWithHover() {
    if (!isTouchDevice() && !$('body').hasClass('menu_opened')) {
        var $item = $(this).parents('li');
        $item.addClass('hovered');
        if (delayTime) {
            clearTimeout(delayTime);
        }
        ;
        delayTime = setTimeout(function () {
            if ($item.hasClass('hovered')) {
                $item.addClass('opened').find('.submenu_list').stop(true, true).slideDown(500);
            }
        }, 300)
    }
}

function mouseLeaveItem() {
    $(this).parents('li').removeClass('hovered');
}

function closeSubWithHover() {
    if (!isTouchDevice() && !$('body').hasClass('menu_opened')) {
        $(this).removeClass('opened').find('.submenu_list').fadeOut(300);
    }
}

var slider_web_arrow = function () {
    if (!isTouchDevice() && window.innerWidth > 768) {
        $('.main_slider').addClass('slider_web_arrow');
        $('.arrivals_slider').addClass('slider_web_arrow');
        $('.recently_slider').addClass('slider_web_arrow');
        $('.add_to_wish').addClass('add_to_wish_web');
    }
    ;
}

var addToWishList = function (e) {
    e.preventDefault()
    $(this).parents('.product_block').toggleClass('add_wish');

    if ($(this).hasClass('add_wish') && !$(this).parent().parent().parent().hasClass('popup_inner_container')) {
        var flyerClone = $(this).clone();
        flyerClone.addClass('heart_clone');
        flyToElement($(this), $('.favorite_block'));
        function flyToElement(flyer, flyingTo) {
            var $func = $(this);
            var divider = 3;
            $(flyerClone).css({
                position: 'absolute',
                top: $(flyer).offset().top + "px",
                left: $(flyer).offset().left + "px",
                opacity: 1,
                'z-index': 100
            });
            $('body').append($(flyerClone));
            var gotoX = $(flyingTo).offset().left;
            var gotoY = $(flyingTo).offset().top;
            $(flyerClone).animate({
                opacity: 0.5,
                left: gotoX,
                top: gotoY,
                'font-size': '90%',
            }, 700,
                function () {
                    $(flyingTo).fadeOut('fast', function () {
                        $(flyingTo).fadeIn('fast', function () {
                            $(flyerClone).fadeOut('fast', function () {
                                $(flyerClone).remove();
                            });
                        });
                    });
                });
        }
    }
}


function comboHover() {
    $(this).parents('.combo_hover').addClass('hovered');
}

function comboUnHover() {
    $(this).parents('.combo_hover').removeClass('hovered');
}

function tabSwitch(e) {
    e.preventDefault();
    if (!$(this).hasClass('selected')) {
        $(this).parents('.tab_buttons').find('a').removeClass('selected');
        $(this).parents('.tab_section').find('.tab_block').removeClass('selected');
        $(this).addClass('selected');
        $('.tab_block.' + $(this).data('tab')).addClass('selected');
    }
}

var toggleLanguages = function (evt) {
    evt.preventDefault();
    if (!$('.lg_list').hasClass('opened') && window.innerWidth < $middleTSize) {
        closeAllMenues(evt);
        evt.stopPropagation();
        $('.lg_list').addClass('opened');
    }
    ;
}

function initSlider(sliderEl, sliderOpts) {
    sliderEl.slick(sliderOpts);
}

var smallImagesOpts = {
    centerPadding: 0,
    infinite: false,
    vertical: true,
    slidesToShow: 5,
    verticalSwiping: true,
    responsive: [
        {
            breakpoint: 1441,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                vertical: false,
            }
        },
        {
            breakpoint: 768,
            settings: {
                vertical: false,

                slidesToShow: 3,
            }
        },
        {
            breakpoint: 576,
            settings: {
                vertical: false,
                verticalSwiping: false,
                slidesToShow: 1,
                dots: true,
                arrows: false,
            }
        }
    ]
};
var bigImagesOpts = {
    centerPadding: 0,
    infinite: false,
    touchMove: false,
    draggable: false,
    swipe: false,
    arrows: false,
    fade: true
};
var mainSliderOpts = {
    centerPadding: 0,
    infinite: false,
    dots: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                dots: false,
                // autoplay: true,
                autoplaySpeed: 3000,
            }
        }
    ]
};

var arrivalsSliderOpts = {
    centerPadding: 0,
    slidesToShow: 4,
    infinite: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3.5,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2.5,
            }
        },
        {
            breakpoint: 520,
            settings: {
                slidesToShow: 1.5,
            }
        }
    ]
};
var recentlySliderOpts = {
    centerPadding: 0,
    slidesToShow: 6,
    infinite: false,
    responsive: [
        {
            breakpoint: 1130,
            settings: {
                slidesToShow: 5.5,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4.5,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3.5,
            }
        },
        {
            breakpoint: 567,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 360,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
};


function initRangeSlider() {
    var minValue = $('.lineslider').data('min');
    var maxValue = $('.lineslider').data('max');
    var rangeStep = $('.lineslider').data('step') ? $('.lineslider').data('step') : 100;
    $('.lineslider').slider({
        from: minValue,
        to: maxValue,
        step: rangeStep,
        onstatechange: function (value) {
            var startVal = value.split(';')[0];
            var endVal = value.split(';')[1];
            $('input[name="range_from"]').val(startVal);
            $('input[name="range_to"]').val(endVal);
            $(".range_from").html(startVal);
            $(".range_to").html(endVal);
        }
    });

    $('.range_input').on('keyup', function () {
        var startVal = $('input[name="range_from"]').val();
        var endVal = $('input[name="range_to"]').val();
        if (startVal >= minValue && endVal >= minValue && startVal <= maxValue && endVal <= maxValue) {
            $('.lineslider').slider('value', startVal, endVal);
        }
    });

    $('.range_input').on('change', function () {
        if ($(this).val() < minValue) {
            $(this).val(minValue)
        } else if ($(this).val() > maxValue) {
            $(this).val(maxValue);
        }
        var startVal = $('input[name="range_from"]').val();
        var endVal = $('input[name="range_to"]').val();
        $('.lineslider').slider('value', startVal, endVal);
    })
};

function toggleFilterBlock(e) {
    e.preventDefault();
    if ($(this).parent().hasClass('opened')) {
        $(this).parent().removeClass('opened').find('.filter_fields').slideUp(300)
    } else {
        $(this).parent().addClass('opened').find('.filter_fields').stop(true, true).slideDown(300)
    }
}

function toggleFilterBlocksort_btn(e) {
    e.preventDefault();
    if ($(this).parent().hasClass('opened')) {
        $(this).parent().removeClass('opened').find('.show_filter').slideUp(300)
    } else {
        $(this).parent().addClass('opened').find('.show_filter').stop(true, true).slideDown(300)
    }
}

if ($(window).width() < $middleTSize) {
    $(".favorite_page .show_filter").appendTo(".promos_page .sort_block");
}

function checkFields() {
    $('form input').change(function () {
        if ($(this).val().length > 0) {
            $(this).parent().find('.individual_hint').show();
            $(this).parent().find('.standard_hint').hide();
        } else {
            $(this).parent().find('.individual_hint').hide();
            $(this).parent().find('.standard_hint').show();
        }
    });
}

function checkForm() {
    var password = $(".newPassword").val();
    var confirmPassword = $(".repeatPassword").val();
    if ($('.cont_select').length > 0) {
        if ($('.cont_select').hasClass('dropup')) {
            $('.cont_select').parent().removeClass('has-error')
        } else {
            $('.cont_select').parent().addClass('has-error')
        }
    }
    if (confirmPassword != password) {
        $(".newPassword").parent().addClass('has-error');
        $(".repeatPassword").parent().addClass('has-error');
        return false
    } else {
        $(".newPassword").parent().removeClass('has-error');
        $(".repeatPassword").parent().removeClass('has-error');
    }

    $.validate({
        scrollToTopOnError: false,
    });
};


function toggleFilter(e) {
    e.preventDefault();
    $('.filter_section').toggleClass('opened');
}

function toggleFiltersort_btn(e) {
    e.preventDefault();
    $('.show_filter').toggleClass('opened');
}

$('.checkbox_list > li').on('click', function (e) {
    var checkBox = $('.checkbox');
    $(this).toggleClass('is-selected');
    $(this).find(checkBox).toggleClass('checkmark');
    var color = $.trim($(this).text());
    if ($(this).find(checkBox).hasClass('checkmark')) {
        var filteBlock = '<div class="filters_element"><span>' + $(this).text() + '</span><span class="filter-close">X</span></div>';
        $('.block_filters').show().append(filteBlock);

    } else {
        $(".filters_element span:contains('" + color + "')").parent().remove();
    }

    if ($(".block_filters .filters_element").length <= 0) {
        $(".block_filters").hide();
    }

    onGridChangeRequest();
});
$('.radio_list li .radio_button').on('click', function () {
    $('.radio_btn').remove();
    var radioname = $(this).text();
    var filteBlock = '<div class="filters_element radio_btn"><span>' + radioname + '</span><span class="filter-close">X</span></div>';
    $('.block_filters').show().append(filteBlock);

})
$('body').on('click', '.filter-close', function () {
    if (!$(this).parent().hasClass('radio_btn')) {
        $(this).parent().remove();
    }
    var color = $.trim($(this).siblings('span').text());
    $('.checkbox_list > li .checkbox_button:contains("' + color + '")').trigger('click');
    onGridChangeRequest();
});

function onGridChangeRequest() {
    var selected = [];

    $('.checkbox_list').find('.is-selected').each(function (i, el) {
        selected.push($(this).attr('data-filter'));
    })
}

if ($('.sort_select').length > 0) {
    $('.sort_select').selectpicker({
        //liveSearch: true,
    });
}

var shoppingListScroll = function (elem) {
    var scrollSize = $('.product_block').innerHeight();

    if (elem.className.search('arrow_bottom_button') == 0) {

    } else if (elem.className.search('arrow_top_button') == 0) {

    }
}

var slider_inner_slick = function (e) {
    var $status = $('.pagingInfo');
    var $slickElement = $('.location_block .slider_inner');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + ' / ' + slick.slideCount);
    });

    $('.location_block .slider_inner').slick({
        centerMode: true,
        slidesToShow: 3,
        draggable: true,
        focusOnSelect: true,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 730,
                settings: {
                    slidesToShow: 1.5,
                }
            },
            {
                breakpoint: 467,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
}

$(function () {
    $('.search_form input').keyup(function () {
        var val = $(this).val().toLowerCase();
        $(".menu_store ul li").hide();
        $(".menu_store ul li").each(function () {
            var text = $(this).text().toLowerCase();
            if (text.indexOf(val) != -1) {
                $(this).show();
            }
        });
    });
});

$(".branch").click(function (e) {
    e.preventDefault();
    e.stopPropagation;
    $('.clicked:not(:hover)').removeClass('clicked');
    $(this).addClass('clicked');
});

var myMap = null;
var mapInit = function () {

    ymaps.ready(function () {
        myMap = new ymaps.Map("map-canvas", {
            center: [40.177200, 44.503490],
            zoom: 7,
            controls: ['zoomControl']
        });

        var placemark;
        var placeMarks = [];

        function createMarker($branch) {

            var _coords = $branch.data('coords').split(',');
            var _center = [_coords[0] * 1, _coords[1] * 1];
            var _title = $branch.data('title');

            var contentString = "<div class=" + "iw_content" + ">" +
                '<div class="iw_branch_name">' + _title + '</div>' +
                '</div>';

            placemark = new ymaps.Placemark(_center, {
                balloonContent: contentString,
            }, {
                iconLayout: 'default#image',
                iconImageHref: './css/images/location.svg',
                iconImageSize: [47, 47],
            });

            myMap.geoObjects.add(placemark);
            myMap.setBounds(myMap.geoObjects.getBounds());
            placeMarks.push(placemark);

        }

        function showAllMarkers() {
            $('.branch').each(function () {
                createMarker($(this));
            })
        };

        $('.branch').click(function (e) {
            e.preventDefault();
            window.location.hash = '';
            var activeBranch = $(this).parent().index();
            if ($(this).hasClass('selected')) {
                myMap.setBounds(myMap.geoObjects.getBounds());
                for (var i = 0; i < placeMarks.length; i++) {
                    placeMarks[i].balloon.close();
                }
            } else {
                $('.branch').removeClass("active");
                var _coords = $(this).data('coords');
                var positions = _coords.split(",");
                var _center = [positions[0] * 1, positions[1] * 1];
                myMap.setCenter(_center);
                myMap.setZoom(16);
                placeMarks[activeBranch].balloon.open();
            }
            if ($(window).width() < $middleTSize) {
                $('html, body').animate({
                    scrollTop: $(".map_block").offset().top
                }, 1000)
            }
        });

        showAllMarkers();
    })
};

detectActiveTab = function () {
    if (window.location.hash) {
        setTimeout(function () {
            var $selected = window.location.hash.substring(1);
            console.log('$selected', $selected);
            $('.menu_store a[data-tab="' + $selected + '"]').trigger('click');
            $(".clicked").trigger('click');
        }, 500);
    }
}

function togglePromoDetails(e) {
    e.preventDefault();
    if ($(this).parents('.order_block').hasClass('opened')) {
        $(this).parents('.order_block').removeClass('opened').find('.content_block').slideUp(300);
    } else {
        $('.order_block').removeClass('opened');
        $('.content_block').slideUp(300);
        $(this).parents('.order_block').addClass('opened').find('.content_block').stop(true, true).slideDown(300);
    }
}

var detectCall = function () {
    if (/Android|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
        $('.phone_block').addClass('clickable');
    }
}



$(document).ready(function () {

    $('.write_message_close').click(function (e) {
        e.preventDefault()
        $('body').removeClass('write_message_opened')
    })

    $('.message_btn').click(function (e) {
        e.preventDefault();
        $('body').addClass('write_message_opened')
    })

    $('.icon_sign_in_lock').click(function (e) {
        e.preventDefault();
        $('body').addClass('account_opened')
    })

    $('.review_close').click(function (e) {
        e.preventDefault();
        $('body').removeClass('checkout_review_opened')
    })

    $('.review_btn').click(function (e) {
        e.preventDefault();
        $('body').addClass('checkout_review_opened')
    })

    $('.continue_btn').click(function (e) {
        e.preventDefault();
        // $('body').removeClass('success_opened')
    })

    $('.success_close').click(function (e) {
        e.preventDefault();
        $('body').removeClass('success_opened')
    })

    if ($('.profile_list').length > 0) {
        if (window.innerWidth < $smallTSize) {
            if ($('.profile_list .active').offset().left < 0 || $('.profile_list .active').offset().left + $('.profile_list .active').width() > window.innerWidth) {
                $('.profile_list').animate({ scrollLeft: $('.profile_list .active').offset().left }, 500);
            }
        }
    }

    if ($('.checkout_section').length > 0) {
        $('.checkout_btn').click(function () {
            setTimeout(function (e) {
                if ($('.checkount_inner_section').find('.field_block').hasClass('has-error')) {
                    $('html, body').animate({
                        scrollTop: $('.header').offset().top
                    }, 500);
                }
            }, 100)
        })
    }

    if (isTouchDevice()) {
        $('html').addClass('touch');
        $('.submenu_button').each(function () {
            var btnUrl = $(this).attr('href') ? $(this).attr('href') : '';
            var viewAllText = $(this).data('viewall')
            if (btnUrl.length > 2) {
                $(this).parent().find('.sublist_block').append('<div class="view_all_link"><a href="' + btnUrl + '">' + viewAllText + '</a></div>');
                $(this).attr('href', '');
            }
        })
    } else {
        $('html').addClass('web');
    }

    $('.tab_list a').click(function (e) {
        e.preventDefault();
        $('.tab_list li').removeClass('active');
        $(this).parent().addClass('active');
        var num = $(this).parent().index();
        $('.category_block').removeClass('active');
        $('.tab_blocks .category_block').eq(num).addClass('active');
    })

    $('.sizes_popup_button').click(function (e) {
        e.preventDefault();
        $('body').addClass('sizes_opened');
    })

    $('.sizes_close').click(function (e) {
        e.preventDefault();
        $('body').removeClass('sizes_opened');
    })

    $('.add_to_wish').click(function () {
        $(this).toggleClass('add_wish')
        if (!$('body').hasClass('favorite_opened') && $(this).hasClass('add_wish') && !$(this).parent().parent().parent().hasClass('popup_inner_container')) {
            $('body').addClass('favorite_opened')
            setTimeout(function () {
                $('body').removeClass('favorite_opened')
            }, 2000)
        }
    })

    $('.account_block').click(function (e) {
        e.preventDefault();
        $('body').addClass('account_opened');
    })

    if ($('.menu_store').length > 0) {
        detectActiveTab();
    }
    if ($('#map-canvas').length > 0) {
        mapInit();
        if ($(window).width() > $middleTSize) {
            $('.block_all').scrollbar();
        }
    }
    ;

    if ($('.location_block .slider_inner').length > 0) {
        slider_inner_slick();
    }

    $('.account_close').click(function (e) {
        e.preventDefault();
        $('body').removeClass('account_opened');
    })
    $('.register_button').click(function (e) {
        e.preventDefault();
        $('.sign_in_container').addClass('hide');
        setTimeout(function () {
            $('.sign_in_container').addClass('none');
            $('.sign_up_container').removeClass('none');
            $('.sign_up_container').removeClass('hide');
            $('.sign_in_container').removeClass('show');
            $('.sign_up_container').addClass('show');
        }, 300)
    })
    $('.login_button').click(function (e) {
        e.preventDefault();
        $('.sign_up_container').addClass('hide');
        setTimeout(function () {
            $('.sign_up_container').addClass('none');
            $('.sign_in_container').removeClass('none');
            $('.sign_in_container').removeClass('hide');
            $('.sign_up_container').removeClass('show');
            $('.sign_in_container').addClass('show');
        }, 300)
    })

    /*--------product count   --- max  500 */
    var maxNumber = 500;

    $('.right_arrow').click(function (e) {
        e.preventDefault();
        var number = $(this).parent().find('.prod_number');
        if (number.val() < maxNumber) {
            number.val(parseInt(number.val()) + 1);
        }
    })
    $('.prod_number').change(function () {
        if ($(this).val() > maxNumber) {
            $(this).val(maxNumber);
        }
        if ($(this).val() == 0) {
            $(this).val(1);
        }
    })
    $('.left_arrow').click(function (e) {
        e.preventDefault();
        var number = $(this).parent().find('.prod_number');
        if (number.val() > 1) {
            number.val(parseInt(number.val()) - 1);
        }
    })

    if ($('.sort_select').length > 0) {
        $('.sort_select').selectpicker({
            liveSearch: true,
        });
    }

    $('.cart_block ').click(function (e) {
        e.preventDefault();
        $('body').addClass('shopping_opened');
        if ($('.shoping_list_inner').innerHeight() > $('.shoping_bag_list').height()) {
            $('.shoping_inner_block').addClass('scrolling');
        } else {
            $('.shoping_inner_block').removeClass('scrolling');
        }
    })
    $('.icon_trash').click(function (e) {
        e.preventDefault();
        if ($('.shoping_list_inner').innerHeight() <= $('.shoping_bag_list').height()) {
            $('.shoping_inner_block').removeClass('scrolling');
        }
    })
    $('.bag_button').click(function (e) {
        e.preventDefault();
        if ($('.shoping_inner_block').hasClass('scrolling')) {
            shoppingListScroll(this);
        }
    })

    if ($('.shoping_list_inner').length > 0) {
        $('.shoping_list_inner').scrollbar({
            "showArrows": true,
            "scrollx": "advanced",
            "scrolly": "advanced",
        });
    }

    $('.modal_link').click(function (e) {
        e.preventDefault();
        $('body').addClass('checkout_opened');
        $('.small_images .images_slider').slick('unslick');
        $('.big_images .images_slider').slick('unslick');
        initSlider($('.small_images .images_slider'), smallImagesOpts);
        initSlider($('.big_images .images_slider'), bigImagesOpts);

    })
    $('.checkout_close').click(function (e) {
        e.preventDefault();
        $('body').removeClass('checkout_opened');
    })
    $('.shopping_close').click(function (e) {
        e.preventDefault();
        $('body').removeClass('shopping_opened');
    })

    if ($('.product_images').length > 0) {
        initSlider($('.small_images .images_slider'), smallImagesOpts);
        initSlider($('.big_images .images_slider'), bigImagesOpts);
        $('.small_images .slide_block a').click(changeBigImage);
        $('.big_images .slide_block a').zoom();
        $('.big_images .slide_block a').click(function (e) {
            e.preventDefault()
        });
    }

    //validate
    if ($('.validate_button').length > 0) {
        checkFields();
        $('.validate_button').click(checkForm);
    }
    //detect device type
    detectDevice();

    //Phone
    if ($('.phone_block').length > 0) {
        detectCall();
    }

    //detect device type arrow
    slider_web_arrow();
    //close dropdowns with outside click

    $('body').click(closeAllMenues);

    //opening/closing mobile menu
    $('.menu_button').click(mobMenuTrigger);

    $('.add_to_wish').click(addToWishList);

    // form front validation
    if ($('.validate_button').length > 0) {
        checkFields();
    }
    ;
    if ($('.sort_block').length > 0) {
        $('.sort_block').click(toggleFilterBlocksort_btn);
        initRangeSlider();
        $('.sort_btn').click(toggleFiltersort_btn);
    }
    if ($('.filter_section').length > 0) {
        $('.filter_type').click(toggleFilterBlock);
        initRangeSlider();
        $('.filter_button').click(toggleFilter);
    }
    //open close dropdown lists
    $('.drop_button').click(dropToggle);

    if ($('.main_slider').length > 0) {
        initSlider($('.main_slider'), mainSliderOpts);
    }
    ;

    if ($('.location_slide .slider_inner').length > 0) {
        slider_inner_slick();
    }

    if ($('.arrivals_slider').length > 0) {
        initSlider($('.arrivals_slider'), arrivalsSliderOpts);
    }
    ;

    if ($('.section_recently').length > 0) {
        initSlider($('.recently_slider'), recentlySliderOpts);
    }
    ;

    //order
    $('.order_block .details_button').click(togglePromoDetails);

    //hover effect with multiple links hover
    $('.combo_link').hover(comboHover, comboUnHover);

    //tab switch
    $('.tab_buttons a').click(tabSwitch);

    $('.submenu_button').hover(openSubWithHover, mouseLeaveItem);
    $('.submenu_button').click(openSubWithClick);
    $('.catalog_menu .menu_list > li').hover(function () {
    }, closeSubWithHover);
    $('.submenu_list').click(ignorBodyClick);
    $('.sub_close').click(function () {
        $('.catalog_menu .menu_list > li').removeClass('opened');
        $('.header_menu_inner').removeClass('not_scroll');
    })
});

if (!isTouchDevice()) {
    $('.pr_inner_link').hover(
        function () {
            $(this).parents('.product_block').addClass('hovered');
        },
        function () {
            $(this).parents('.product_block').removeClass('hovered');
        });

}

$(window).on('load', function () {
    $(window).resize(function () {
        //detect content min height and show footer
        detectContentHeight();


    }).trigger('resize');
})