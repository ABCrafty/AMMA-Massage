
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



$(function () {

    console.log('test');
    let resize = function () {
        let height = $(window).height();
        console.log('test2');
        $('.admin-content').height(height);
        $('.sidebar-admin').height(height);
    };
    $(window).resize(resize);
    $('.sidebar-admin').height();
    $('.admin-content').height();
});

$(document).ready(function () {

    $('.alert-flash').slideDown(function () {
        setTimeout(function () {
            $('.alert-flash').slideUp('fast');
        }, 5000);
    });

    $('.alert-admin').removeClass('bounceInRight');

    let animationOut = function () {
        $('.alert-admin').addClass('bounceOutRight');
    };

    setTimeout(animationOut, 5000);


});