'use-strict';

$(window).on('load', function() {
    $('input[name="user_phone"]').mask('+7 (999) 999-99-99');

    $(document).on('click', function(e) {
        console.log($(e.target));

        if ($(e.target).is('.open-popup-request')) {
            $('.popup-request').fadeIn();
        }
        if ( $(e.target).is('.popup, .popup__close') ) {
            $('.popup').fadeOut();
        }
    })

    $('.popup-form__close').on('click', function() {
        $('.popup').fadeOut();
    })
})