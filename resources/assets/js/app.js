
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



$(function () {

    console.log('test');
    let resize = function () {
        let height = $(document).height();
        console.log('test2');
        $('.admin-content').height(height);
        $('.sidebar-admin').height(height);
    };
    $(document).resize(resize);
    $('.sidebar-admin').height();
    $('.admin-content').height();
});

$(document).ready(function () {

    $('.alert-flash').slideDown(function () {
        setTimeout(function () {
            $('.alert-flash').slideUp('fast');
        }, 5000);
    });

    let animationOut = function () {
        $('.alert-admin').addClass('bounceOutRight');
    };

    setTimeout(animationOut, 5000);

    let hoverIn = function () {
        $('.admin-pic').css('width', '35%');
        $('.sidebar-admin .fa').css('font-size', '1.5rem');
        $('.admin-info').show();
        $('.show-sidebar').show(250);

        if($(window).width() <= 400) {
            $('.sidebar-admin').animate({width: '60%'}, 250);
            $('.admin-main-content').width('40%');
        }

        if($(window).width() > 400 && $(window).width() <= 550 ) {
            $('.sidebar-admin').animate({width: '50%'}, 250);
            $('.admin-main-content').width('50%');
        }

        if($(window).width() > 550 && $(window).width() <= 768 ) {
            $('.sidebar-admin').animate({width: '50%'}, 250);
            $('.admin-main-content').width('50%');
        }

        if( $(window).width() > 768 && $(window).width() <= 992 ) {
            $('.sidebar-admin').animate({width: '30%'}, 250);
            $('.admin-main-content').width('70%');
        }

        if($(window).width() > 992 && $(window).width() <= 1200 ) {
            $('.sidebar-admin').animate({width: '20%'}, 250);
            $('.admin-main-content').width('80%');
        }

        if($(window).width() > 1200 && $(window).width() <= 1599 ) {
            $('.sidebar-admin').animate({width: '20%'}, 250);
            $('.admin-main-content').width('80%');
        }

        if($(window).width() >= 1600) {
            $('.sidebar-admin').animate({width: '20%'}, 250);
            $('.admin-main-content').width('80%');
        }

    };

    let hoverOut = function () {
        $('.sidebar-admin .fa').css('font-size', '2rem');
        $('.admin-info').hide();
        $('.show-sidebar').hide();
        $('.admin-pic').width('100%');

        if($(window).width() <= 400) {
            $('.sidebar-admin').width('21%');
            $('.admin-main-content').width('79%');
        }

        if($(window).width() <= 550 && $(window).width() > 400) {
            $('.sidebar-admin').width('16%');
            $('.admin-main-content').width('84%');
        }

        if($(window).width() <= 768 && $(window).width() > 550) {
            $('.sidebar-admin').width('10%');
            $('.admin-main-content').width('90%');
        }

        if($(window).width() <= 992 && $(window).width() > 768) {
            $('.sidebar-admin').width('8%');
            $('.admin-main-content').width('92%');
        }

        if($(window).width() > 992 && $(window).width() <= 1200 ) {
            $('.sidebar-admin').width('6%');
            $('.admin-main-content').width('94%');
        }

        if($(window).width() > 1200 && $(window).width() <= 1599 ) {
            $('.sidebar-admin').width('6%');
            $('.admin-main-content').width('94%');
        }


        if($(window).width() >= 1600) {
            $('.sidebar-admin').width('4%');
            $('.admin-main-content').width('96%');
        }
    };

    $('.sidebar-admin').hover(hoverIn, hoverOut);

    console.log($(window).width());

    let $animationElements = $('.animated'),
        $window = $(window);

    let scroll = {
        checkView : function () {
            let windowHeight = $window.height();
            let windowTopPosition = $window.scrollTop();
            let windowBottomPosition = (windowTopPosition + windowHeight);

            $.each($animationElements, function() {
                let $element = $('.service');
                let elementHeight = $element.outerHeight();
                let elementTopPosition = $element.offset().top;
                let elementBottomPosition = (elementTopPosition + elementHeight);

                //check to see if this current container is within viewport
                if ((elementBottomPosition >= windowTopPosition) &&
                    (elementTopPosition <= windowBottomPosition)) {
                    $element.addClass('fadeInUp');
                } else {

                }
            });
        } // attribut checkView
    }; // objet scroll

    $(window).on('scroll resize', scroll.checkView);
    $(window).trigger('scroll');

});