$(document).ready(function () {

    $('.menu-icon').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.menu').toggleClass('open');
        $('body').toggleClass('mobile-menu-open').toggleClass('overflow');
    });
    $('.menu-list-mobile .menu-link').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('mobile-menu-open').removeClass('overflow');
        $('.header').find('.menu').removeClass('open');
    });
    window.onresize = function (e) {
        $('body').removeClass('mobile-menu-open').removeClass('overflow');
        $('.header').find('.menu').removeClass('open');
    }

});