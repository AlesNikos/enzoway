$(document).ready(function () {

    new WOW({
        mobile: false,
        offset: 100 
    }).init();

    $('[data-mask="phone"]').mask("+7 (999) 999-99-99");

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
    };

    openModalSolution = function () {
        $('.popup').jqmHide();
        $('body').removeClass('overflow');
        jqmPopup("solution-popup", 'html/solution-popup.php', true);
    };
    openModalSubmit = function () {
        $('.popup').jqmHide();
        $('body').removeClass('overflow');
        jqmPopup("submit-popup", 'html/submit-popup.php', true);
    };
    openModalContacts = function () {
        $('.popup').jqmHide();
        $('body').removeClass('overflow');
        jqmPopup("solution-popup", 'html/contacts-popup.php', true);
    };
});