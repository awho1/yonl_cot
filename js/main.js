jQuery(document).ready(function ()  {

    //Маска номера телефона
    $("#phone").mask("+7 (999) 999-99-99");
    $("#second-phone").mask("+7 (999) 999-99-99");
    $('#therd-phone').mask("+7 (999) 999-99-99");


    if(screen.width < '1200'){

        //Прокрутка до блока заявки (телефоны, планшеты)
        $('.technology__btn').on('click',function () {

            var scrollTop = $('.mobile-block-form').offset().top;

            $('html, body').animate({scrollTop:scrollTop},'slow');

        });

    }else{

    //Прокрутка на главный экран для десктопов
    $('.technology__btn').on('click',function () {

            $('html, body').animate({scrollTop:0},'slow');
            
        });
    };

  
    $('.zone__btn').on('click',function () {

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
    
    
});