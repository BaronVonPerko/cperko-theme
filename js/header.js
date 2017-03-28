(function($) {

    var el = $('.fade-in');

    setTimeout(function() {
        el.removeClass('fade-in');
    }, 1000);

    $('.nav-menu-mobile-button').on('click', function() {
        $('.mobile-nav').toggleClass('open');
    });

    $('.mobile-nav .close').on('click', function() {
        $('.mobile-nav').toggleClass('open');        
    });

})(jQuery);