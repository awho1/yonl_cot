jQuery(document).ready(function ()  {

    //Маска номера телефона
    $("#phone").mask("+7 (999) 999-99-99");
    $("#second-phone").mask("+7 (999) 999-99-99");
    $('#therd-phone').mask("+7 (999) 999-99-99");


    if(screen.width < '1200'){

        //Прокрутка до блока заявки (телефоны, планшеты)
        $('.technology__btn, .tarifs-item').on('click',function () {

            var mobileForm = $('.mobile-block-form').offset().top;

            $('html, body').animate({scrollTop:mobileForm},'slow');

        });

    }else{

    //Прокрутка на главный экран для десктопов
    $('.technology__btn, .tarifs-item').on('click',function () {

            $('html, body').animate({scrollTop:0},'slow');
            
        });
    };

  
    $('.zone__btn, .open-popup').on('click',function () {

        if(screen.width < '600') {

            $('.popup').css('display', 'flex');

        }else{

            $('.popup').show();
        };

        $('.popup-overlay').show();

        $('body').toggleClass('mobile-menu-opened');
    });



    $('.popup__close, .popup-overlay').on('click',function () {

        $('.popup-overlay').hide();

        $('.popup').hide();

        $('body').toggleClass('mobile-menu-opened');

    });



    $('.header__toggle-menu_open').on('click',function () {

        $('.header__toggle-menu_open').hide();

        $('.mobile-menu').fadeIn(300);

        $('.header__toggle-menu_close').show();

        $('body').toggleClass('mobile-menu-opened');

    });

    

    $('.header__toggle-menu_close').on('click',function () {

        $('.header__toggle-menu_close').hide();

        $('.mobile-menu').fadeOut(300);

        $('.header__toggle-menu_open').show();

        $('body').toggleClass('mobile-menu-opened');

    });



    $('.mobile-menu__nav-link, .mobile-menu__nav-back').on('click',function () {

        $('.header__toggle-menu_close').hide();

        $('.mobile-menu').hide();

        $('.header__toggle-menu_open').show();

        $('body').toggleClass('mobile-menu-opened');

    });
    
    $('.wrapper-form').on('submit', function (e) {
        e.preventDefault();
        //Делаем кнопу не активной после нажатия
        $('.wrapper-form__btn').click(function() {
            $(this).attr('disabled', true);
            //setTimeout(function() {
            //    $("#check-adress-btn").attr('disabled', false);
            //   }, 2000);
          });
        //Делаем запрос
        $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: $('.wrapper-form').serialize(),
            success: function () {
                $('.wrapper-form__msg_seccess').show();
                //После отправки сбрасываем форму
                $('.wrapper-form').trigger('reset');
            },
            error: function () {
                $('.wrapper-form__error-msg').show();
                //После отправки сбрасываем форму
                $('.wrapper-form').trigger('reset');
            }
        });
    });

    $('.mobile-form').on('submit', function (e) {
        e.preventDefault();
        //Делаем кнопу не активной после нажатия
        $('.wrapper-form__btn').click(function() {
            $(this).attr('disabled', true);
            //setTimeout(function() {
            //    $("#check-adress-btn").attr('disabled', false);
            //   }, 2000);
          });
        //Делаем запрос
        $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: $('.mobile-form').serialize(),
            success: function () {
                $('.mobile-form__msg_seccess').show();
                //После отправки сбрасываем форму
                $('.mobile-form').trigger('reset');
            },
            error: function () {
                $('.mobile-form__error-msg').show();
                //После отправки сбрасываем форму
                $('.mobile-form').trigger('reset');
            }
        });
    });

    $('.popup-form').on('submit', function (e) {
        e.preventDefault();
        //Делаем кнопу не активной после нажатия
        $('.popup-form__btn').click(function() {
            $(this).attr('disabled', true);
            //setTimeout(function() {
            //    $("#check-adress-btn").attr('disabled', false);
            //   }, 2000);
          });
        //Делаем запрос
        $.ajax({
            type: 'POST',
            url: 'mail-2.php',
            data: $('.popup-form').serialize(),
            success: function () {
                $('.popup-form__msg_seccess').show();
                //После отправки сбрасываем форму
                $('.popup-form').trigger('reset');
                setTimeout(function() {
                    $('.popup-overlay').hide();
                    $('.popup').hide();
                    $('body').toggleClass('mobile-menu-opened');
                }, 3000);
            },
            error: function () {
                $('.popup-form__error-msg').show();
                //После отправки сбрасываем форму
                $('.popup-form').trigger('reset');
            }
        });
    }); 
    
});