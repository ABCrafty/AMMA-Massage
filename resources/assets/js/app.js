
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


// javascript on the page load for the urgent stuff
$(function () {

    let $sidebarAdmin = $('.sidebar-admin');

    // resize the height of the backoffice sidebar to make the full height of the page
    let resize = function () {
        let height = $(document).height();
        $('.admin-main-content').height(height);
    };
    $(document).resize(resize);
    $sidebarAdmin.height();
    $('.admin-content').height();
});

// javascript after the page load
$(document).ready(function () {

    // animate the notifications
    let animationOut = function () {
        $('.alert-admin').addClass('bounceOutRight').delay(10).fadeOut();
    };

    setTimeout(animationOut, 5000);

    // resize the widths of the sidebar and the main content during and after the hover
    let hoverIn = function () {

        $('.show-sidebar').delay(100).fadeIn();
        $('.sidebar-admin').css('transition', 'all 0.3s ');
        if ($(window).width() <= 400) {
            $('.sidebar-admin').width('70%');
            $('.admin-main-content').width('30%');
        }

        if ($(window).width() > 400 && $(window).width() <= 550) {
            $('.sidebar-admin').width('70%');
            $('.admin-main-content').width('30%');
        }

        if ($(window).width() > 550 && $(window).width() <= 768) {
            $('.sidebar-admin').width('40%');
            $('.admin-main-content').width('60%');
        }

        if ($(window).width() > 768 && $(window).width() <= 999) {
            $('.sidebar-admin').width('35%');
            $('.admin-main-content').width('65%');
        }

        if ($(window).width() > 999 && $(window).width() <= 1200) {
            $('.sidebar-admin').width('25%');
            $('.admin-main-content').width('75%');
        }

        if ($(window).width() > 1200 && $(window).width() <= 1599) {
            $('.sidebar-admin').width('20%');
            $('.admin-main-content').width('80%');
        }

        if ($(window).width() >= 1600) {
            $('.sidebar-admin').width('15%');
            $('.admin-main-content').width('85%');
        }

    };

    // behaviour when we leave the hover in the sidebar
    let hoverOut = function () {

        $('.show-sidebar').hide();
        $('.sidebar-admin').css('transition', 'all 0s ');
        if ($(window).width() <= 400) {
            $('.sidebar-admin').width('22%');
            $('.admin-main-content').width('78%');
        }

        if ($(window).width() > 400 && $(window).width() <= 550) {
            $('.sidebar-admin').width('22%');
            $('.admin-main-content').width('78%');
        }

        if ($(window).width() > 550 && $(window).width() <= 768) {
            $('.sidebar-admin').width('12%');
            $('.admin-main-content').width('88%');
        }

        if ($(window).width() > 768 && $(window).width() <= 999) {
            $('.sidebar-admin').width('10%');
            $('.admin-main-content').width('90%');
        }

        if ($(window).width() > 999 && $(window).width() <= 1200) {
            $('.sidebar-admin').width('7%');
            $('.admin-main-content').width('93%');
        }

        if ($(window).width() > 1200 && $(window).width() <= 1599) {
            $('.sidebar-admin').width('5%');
            $('.admin-main-content').width('95%');
        }


        if ($(window).width() >= 1600) {
            $('.sidebar-admin').width('4%');
            $('.admin-main-content').width('96%');
        }
    };

    // execution of the hover functions
    $('.sidebar-admin').hover(hoverIn, hoverOut);

    let $animationElements = $('.custom-animated'),
        $window = $(window);

    // all scroll behaviours
    let scroll = {
        // checkView allows to add classes when the targeted element gets scrolled into the view
        checkView: function () {
            let windowHeight = $window.height();
            let windowTopPosition = $window.scrollTop();
            let windowBottomPosition = (windowTopPosition + windowHeight);

            $.each($animationElements, function () {
                let $element = $(this);
                let elementHeight = $element.outerHeight();
                let elementTopPosition = $element.offset().top;
                let elementBottomPosition = (elementTopPosition + elementHeight);

                //check to see if this current container is within viewport
                if ((elementBottomPosition >= windowTopPosition) &&
                    (elementTopPosition <= windowBottomPosition)) {
                    $element.addClass('in-view');
                } else {

                }
            });
        }, // attribute checkView

    }; // object scroll

    // animate the link to scroll every 5 seconds
    setInterval(function () {
        $('.js-scrollTo').toggleClass('bounce');
    }, 5000);

    // execution of the scroll functions
    $(window).on('scroll resize', scroll.checkView);
    $(window).trigger('scroll');
    $('.js-scrollTo').on('click', scroll.scrollTo);
});