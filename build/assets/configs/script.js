'use-strict';

$(window).on('load', function() {
    $('input[name="user_phone"]').mask('+7 (999) 999-99-99');

    $('form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: './assets/configs/mail.php',
            method: 'POST',
            data: {
                user_name: $(this).find('input[name="user_name"]').val(),
                user_phone: $(this).find('input[name="user_phone"]').val(),
                user_device: $(this).find('select[name="user_device"]').val(),
                user_location: $(this).find('input[name="user_location"]').val(),
                user_message: $(this).find('textarea[name="user_message"]').val()
            },
            success() {
                $('.popup-thanks').fadeIn();
            }
        })
    });

    $(document).on('click', function(e) {
        console.log($(e.target));

        if ($(e.target).is('.open-popup-request')) {
            $('.popup-request').fadeIn();
        }
        if ( $(e.target).is('.popup, .popup__close, .popup-form-thanks__button') ) {
            $('.popup').fadeOut();
        }
    })

    $('.popup-form__close').on('click', function() {
        $('.popup').fadeOut();
    })
})