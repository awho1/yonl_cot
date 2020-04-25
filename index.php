<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ю Онлайн | Интернет и телевидение для частных домов и коттеджей">
    <meta property="og:title" content="Интернет и телевидение для частных домов и коттеджей">
    <meta property="og:description" content="Интернет провайдер Санкт-Петербурга и Ленинградской области. Инетрнет по оптике и цифровое телевидение в частный дом от 890 рублей в месяц.  
    Интернет провайдер СНТ Орбита-3, Малое Карлино, Нагорный, Николаевское, Электронмаш, Надежда ВМА, Ветеран и другие в Ломоносовском районе.">
    <meta property="og:url" content="http://cottage.yonl.ru/">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="/img/wrappers/og_cover.png">
    <!--<meta property="og:image:width" content="968">-->
    <!--<meta property="og:image:height" content="504">-->
    <title>Ю Онлайн | Интернет и телевидение для частных домов и коттеджей</title>
    <meta name="description" content="Интернет провайдер Санкт-Петербурга и Ленинградской области. Инетрнет по оптике и цифровое телевидение в частный дом от 890 рублей в месяц.  
    Интернет провайдер СНТ Орбита-3, Малое Карлино, Нагорный, Николаевское, Электронмаш, Надежда ВМА, Ветеран и другие в Ломоносовском районе.">
    <meta name="keywords" content="Интернет, частный дом, коттедж, интернет провайдер, оператор связи, Орбита-3, Малое Карлино, Нагорый, Николаевское, Электронмаш, Надежда ВМА, Ветеран, Ломоновоский район">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <main class="page-contaier">
        <section class="wrapper">
            <header class="header">
                <div class="header__logo">
                    <a class="header__logo-link" href="https://yonl.ru" target="_blank">
                        <img src="/img/logo.svg" alt="logo">
                    </a>
                </div>
                <nav class="header__nav">
                    <a class="header__nav-link" href="#tarifs">Тарифы</a>
                    <a class="header__nav-link" href="#zone">Зона покрытия</a>
                    <a class="header__nav-link" href="#technology">Технология</a>
                </nav>
                <div class="header__btn">
                    <a class="header__btn-link" href="tel:+7(812)670-43-43">
                        <img src="/img/icon/phone.svg" alt="phone">
                        <span>+7 (812) 670-43-43</span>
                    </a>
                </div>
                <div class="header__toggle-menu">
                    <img class="header__toggle-menu_open" src="img/icon/menu.svg" alt="menu">
                    <img class="header__toggle-menu_close" src="img/icon/close.svg" alt="close">
                </div>
            </header>

            <div class="wrapper-title">
                <p class="wrapper__subtitle">Интернет и телевидение</p>
                <h1 class="wrapper__title">Для частных домов и коттеджей</h1>
            </div>
            <div class="wrapper__btn">
                <a class="wrapper__btn-link" href="tel:+7(812)670-43-43">
                    <img src="/img/icon/phone.svg" alt="phone">
                    <span>+7 (812) 670-43-43</span>
                </a>
            </div>
            <form class="wrapper-form" method="POST">
                <p class="wrapper-form__msg wrapper-form__msg_seccess">Спасибо! Ваша заявка отправлена!</p>
                <p class="wrapper-form__msg wrapper-form__msg_error">Упс! Произошла ошибка, попробуйте еще раз</p>
                <select class="wrapper-form__select" name="tarif" required>
                    <option class="wrapper-form__select-option" value="" hidden disabled selected >Выберите тариф</option>
                    <option class="wrapper-form__select-option">Интернет 50</option>
                    <option class="wrapper-form__select-option">Интернет 75 + ТВ</option>
                    <option class="wrapper-form__select-option">Интернет 100 + ТВ</option>
                </select>
                <select class="wrapper-form__select" name="area" required>
                    <option class="wrapper-form__select-option" value="" hidden disabled selected>Выберите СНТ или посёлок</option>
                    <option class="wrapper-form__select-option">СНТ "Орбита-3"</option>
                    <option class="wrapper-form__select-option">СНТ "Малое Карлино"</option>
                    <option class="wrapper-form__select-option">СНТ "Николаевское"</option>
                    <option class="wrapper-form__select-option">СНТ "Электронмаш"</option>
                    <option class="wrapper-form__select-option">СНТ "Можайское"</option>
                    <option class="wrapper-form__select-option">СНТ "Надежда ВМА"</option>
                    <option class="wrapper-form__select-option">СНТ "Ветеран"</option>
                    <option class="wrapper-form__select-option">СНТ "Нагорный"</option>
                </select>
                <input class="wrapper-form__input" type="tel" name="phone" id="phone" placeholder="Ваш номер телефона" required>
                <button class="wrapper-form__btn" type="submit" name="main-form">Отправить заявку</button>
                <p class="wrapper-form__text">Нажимая кнопку “Отправить заявку”, Вы соглашатесь с <a href="#">политикой обработки персональных данных</a></p>
                <p class="wrapper-form__text">Не нашли своё СНТ в списке? <a class="open-popup">Оставте заявку на подключение СНТ</a></p>
            </form>
        </section>
        <div class="glass"></div>
        <section class="mobile-block-form">
            <h2 class="mobile-form__title">Заявка <br>на подключение</h2>
            <form class="mobile-form" method="POST">
                <p class="mobile-form__msg mobile-form__msg_seccess">Спасибо! Ваша заявка отправлена!</p>
                <p class="mobile-form__msg mobile-form__msg_error">Произошла ошибка!</p>
                <select class="mobile-form__select" name="tarif">
                    <option class="mobile-form__select-option" hidden disabled selected>Выберите тариф</option>
                    <option class="mobile-form__select-option">Интернет 50</option>
                    <option class="mobile-form__select-option">Интернет 75 + ТВ</option>
                    <option class="mobile-form__select-option">Интернет 100 + ТВ</option>
                </select>
                <select class="mobile-form__select" name="area" >
                    <option class="mobile-form__select-option" hidden disabled selected>Выберите СНТ или посёлок</option>
                    <option class="mobile-form__select-option">СНТ "Орбита-3"</option>
                    <option class="mobile-form__select-option">СНТ "Малое Карлино"</option>
                    <option class="mobile-form__select-option">СНТ "Николаевское"</option>
                    <option class="mobile-form__select-option">СНТ "Электронмаш"</option>
                    <option class="mobile-form__select-option">СНТ "Ветеран"</option>
                    <option class="mobile-form__select-option">СНТ "Надежда ВМА"</option>
                    <option class="mobile-form__select-option">СНТ "Можайское"</option>
                    <option class="mobile-form__select-option">СНТ "Нагорный"</option>
                </select>
                <input class="mobile-form__input" type="tel" name="phone" id="second-phone" placeholder="Ваш номер телефона">
                <button class="mobile-form__btn" type="submit">Отправить заявку</button>
                <p class="mobile-form__text">Нажимая кнопку “Отправить заявку”, Вы соглашатесь с <a href="#">политикой обработки персональных данных</a></p>
            </form>
        </section>
        <section class="tarifs" id="tarifs">
            <div class="tarifs-container">
                <h2 class="tarifs__title">Тарифы и стоимость подключения</h2>
                <div class="tarifs-box">
                <div class="tarifs-items">
                    <!--Тариф 1-->
                    <div class="tarifs-item">
                        <div class="tarifs-item-header">
                            <p class="tarifs-item__subtitle">Тариф</p>
                            <h3 class="tarifs-item__title">Интернет 50</h3>
                        </div>
                        <div class="tarifs-item-cost">
                            <p class="tarifs-item__cost-subtitle">Ежемесячный платеж</p>
                            <p class="tarifs-item__cost">990</p>
                            <span class="tarifs-item__cost-description">руб<br>мес</span>
                        </div>
                        <div class="tarifs-item-footer">
                            <ul class="tarifs-item__list">
                                <li class="tarifs-item__list-item">Скорость до 50 Мбит/c</li>
                                <li class="tarifs-item__list-item">При оплате за год  890 р/мес</li>
                                <li class="tarifs-item__list-item">Внешний IP-адрес - 99 р/мес</li>
                            </ul>
                        </div>
                    </div>
                    <!--Тариф 2-->
                    <div class="tarifs-item">
                        <img class="tarifs-item__img" src="/img/icon/hit-flag.svg" alt="Хит">
                        <div class="tarifs-item-header">
                            <p class="tarifs-item__subtitle">Тариф</p>
                            <h3 class="tarifs-item__title">Интернет 75</h3>
                        </div>
                        <div class="tarifs-item-cost">
                            <p class="tarifs-item__cost-subtitle">Ежемесячный платеж</p>
                            <p class="tarifs-item__cost">1490</p>
                            <span class="tarifs-item__cost-description">руб<br>мес</span>
                        </div>
                        <div class="tarifs-item-footer">
                            <ul class="tarifs-item__list">
                                <li class="tarifs-item__list-item">Скорость до 75 Мбит/c</li>
                                <li class="tarifs-item__list-item">При оплате за год 1340 р/мес</li>
                                <li class="tarifs-item__list-item">Телевидение 200+ каналов</li>
                                <li class="tarifs-item__list-item">Внешний IP-адрес - 99 руб/мес</li>
                            </ul>
                        </div>
                    </div>
                    <!--Тариф 3-->
                    <div class="tarifs-item">
                        <div class="tarifs-item-header">
                            <p class="tarifs-item__subtitle">Тариф</p>
                            <h3 class="tarifs-item__title">Интернет 100</h3>
                        </div>
                        <div class="tarifs-item-cost">
                            <p class="tarifs-item__cost-subtitle">Ежемесячный платеж</p>
                            <p class="tarifs-item__cost">1990</p>
                            <span class="tarifs-item__cost-description">руб<br>мес</span>
                        </div>
                        <div class="tarifs-item-footer">
                            <ul class="tarifs-item__list">
                                <li class="tarifs-item__list-item">Скорость до 100 Мбит/c</li>
                                <li class="tarifs-item__list-item">При оплате за год  1790 р/мес</li>
                                <li class="tarifs-item__list-item">Телевидение 200+ каналов</li>
                                <li class="tarifs-item__list-item">Внешний IP-адрес - бесплатно</li>
                            </ul>
                        </div>
                    </div>
                    <span class="padding"> </span>
                </div>
                <div class="tarifs-price">
                    <h3 class="tarifs-price__cost">Подключение - 5990 &#8381;</h3>
                    <p class="tarifs-price__subtitle">В стоимость входит:</p>
                    <ul class="tarifs-price__list">
                        <li class="tarifs-price__list-item">Работы монтажника и инженера;</li>
                        <li class="tarifs-price__list-item">Расходные материалы;</li>
                        <li class="tarifs-price__list-item">Сварка оптического кабеля;</li>
                        <li class="tarifs-price__list-item">Заведение оптического кабеля<br> в дом;</li>
                    </ul>
                </div>
            </div>
            </div>
        </section>
        <section class="zone" id="zone">
            <div class="zone-container">
                <div class="zone-box">
                    <h2 class="zone__title">Зона покрытия</h2>
                    <p class="zone__text">Наша сеть покрывает садоводческие некоммерческие товарищества 
                        в Ломоносовском районе Ленинградской области</p>
                    <p class="zone__subtitle">Садоводства, подключенные к нашей сети:</p>
                    <div class="zone-links">
                        <a class="zone-links__link" href="https://yandex.ru/maps/-/CKRJZVmh" target="_blank">
                            <h3 class="zone-links__title">СНТ “Орбита-3”</h3>
                        </a>
                        <a class="zone-links__link" href="https://yandex.ru/maps/-/CKRJfGNv" target="_blank">
                            <h3 class="zone-links__title">СНТ “Электронмаш”</h3>
                        </a>
                        <a class="zone-links__link" href="https://yandex.ru/maps/-/CKRJvIom" target="_blank">
                            <h3 class="zone-links__title">СНТ “Малое Карлино”</h3>
                        </a>
                        <a class="zone-links__link" href="https://yandex.ru/maps/-/CKRNAIjc" target="_blank">
                            <h3 class="zone-links__title">СНТ “Николаевское”</h3>
                        </a>
                        <a class="zone-links__link" href="https://yandex.ru/maps/-/CKRNM01Z" target="_blank">
                            <h3 class="zone-links__title">СНТ “Можайское”</h3>
                        </a>
                        <a class="zone-links__link" href="https://yandex.ru/maps/-/CKRN42ik" target="_blank">
                            <h3 class="zone-links__title">СНТ “Ветеран”</h3>
                        </a>
                        <a class="zone-links__link" href="https://yandex.ru/maps/-/CKRNqRPk" target="_blank">
                            <h3 class="zone-links__title">СНТ “Надежда ВМА”</h3>
                        </a>
                        <a class="zone-links__link" href="https://yandex.ru/maps/-/CKRNyW1L" target="_blank">
                            <h3 class="zone-links__title">СНТ “Нагорный”</h3>
                        </a>
                    </div>
                    <div class="zone__btn"><img src="/img/icon/plus.svg" alt="подключить">Подключить моё СНТ</div>
                </div>
                <img class="zone__img" src="/img/wrappers/map.png" alt="Карта">  
            </div>
        </section>
        <section class="technology" id="technology">
            <div class="technology-container">
                <h2 class="technology__title">Технология подключения PON</h2>
                <p class="technology__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    <div class="technology__btn" id="top">Оставить заявку</div>
                <div class="technology-schema">
                    <div class="technology-schema-box-one">
                        <div class="technology-schema-item">
                            <img src="/img/icon/internet.svg" alt="Интернет">
                            <p>Интернет</p>
                        </div>
                        <hr class="line line_one">
                        <div class="technology-schema-item">
                            <img src="/img/icon/operator.svg" alt="Оборудвание оператора">
                            <p>Оборудование<br>оператора</p>
                        </div>
                        <div class="cabel">
                        <p class="cabel__text">Оптический кабель</p>
                        <hr class="line line_two">
                        </div>
                        <div class="technology-schema-item">
                            <img src="/img/icon/abonent.svg" alt="Оборудование абонента">
                            <p>Оборудование<br>абонента</p>
                        </div>
                        <hr class="line line_three">
                    </div>
                    <div class="technology-schema-box-two">
                        <div class="technology-schema-item">
                            <img src="/img/icon/nootebook.svg" alt="Ноутбук">
                            <p>Компьютер<br>Ноутбук</p>
                        </div>
                        <div class="technology-schema-item">
                            <img src="/img/icon/console.svg" alt="Консоль">
                            <p>Игровая<br>консоль</p>
                        </div>
                        <div class="technology-schema-item">
                            <img src="/img/icon/tv.svg" alt="Телевизор">
                            <p>Телевизор<br>ТВ-приставка</p>
                        </div>
                        <div class="technology-schema-item">
                            <img src="/img/icon/home.svg" alt="Умный дом">
                            <p>Умный<br>дом</p>
                        </div>
                        <div class="technology-schema-item">
                            <img src="/img/icon/camera.svg" alt="Камера">
                            <p>Видеонаблюдение</p>
                        </div>
                        <div class="technology-schema-item">
                            <img src="/img/icon/security.svg" alt="Системы безопасности">
                            <p>Система<br>безопасности</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="footer__logo">
                        <a class="footer__logo-link" href="https://yonl.ru" target="_blank">
                            <img src="/img/logo.svg" alt="logo">
                        </a>
                    </div>
                    <nav class="footer__nav">
                        <a class="footer__nav-link" href="#tarifs">Тарифы</a>
                        <a class="footer__nav-link" href="#zone">Зоны покрытия</a>
                        <a class="footer__nav-link" href="#technology">Технология</a>
                    </nav>
                    <div class="footer__btn">
                        <a class="footer__btn-link" href="tel:+7(812)670-43-43">
                            <img src="/img/icon/phone.svg" alt="phone">
                            <span>+7 (812) 670-43-43</span>
                        </a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p class="footer__copyright">ООО “Ю Онлайн” © 2020 </p>
                    <p class="footer__info">Данная страница носит исключительно информационный характер. Не является публичной офертой.</p>
                    <div class="footer-social">
                        <a class="footer__link" href="https://vk.com/youonlinespb" target="_blank"><img src="/img/icon/vk.svg" alt="vk"></a>
                        <a class="footer__link" href="https://www.instagram.com/uonline_business/" target="_blank"><img src="/img/icon/inst.svg" alt="instagram"></a>
                        <a class="footer__link" href="https://www.instagram.com/uonline_business/" target="_blank"><img src="/img/icon/tg.svg" alt="tg"></a>
                    </div>
                </div>
            </div>

        </footer>
        <div class="mobile-menu">
            <div class="mobile-menu__nav">
                <a class="mobile-menu__nav-link" href="#tarifs">Тарифы</a>
                <a class="mobile-menu__nav-link" href="#zone">Зоны покрытия</a>
                <a class="mobile-menu__nav-link" href="#technology">Технология</a>
                <a class="mobile-menu__nav-back" href="/">Вернуться Назад</a>
                <div class="footer-social">
                    <a class="footer__link" href="https://vk.com/youonlinespb" target="_blank"><img src="/img/icon/vk.svg" alt="vk"></a>
                    <a class="footer__link" href="https://www.instagram.com/uonline_business/" target="_blank"><img src="/img/icon/inst.svg" alt="instagram"></a>
                    <a class="footer__link" href="https://www.instagram.com/uonline_business/" target="_blank"><img src="/img/icon/tg.svg" alt="tg"></a>
                </div>
            </div>
        </div>
    </main>
    <div class="popup">
        <div class="popup-container">
        <h3 class="popup__title">Заявка на подключение СНТ</h3>
        <img class="popup__close" src="/img/icon/close_blue.svg" alt="Закрыть">
        <img class="popup__img" src="/img/wrappers/popup_cover.svg" alt="cover">
        <p class="popup__text">При согласовании с правлением, мы подключим Ваше 
        садоводство на взаимовыгодных условиях.<br><br>
        Наличие в СНТ оптического интернета сопоставимо с наличием газопровода, повышает статус и развивает инфраструктуру садоводства<br><br>
        Для СНТ предоставляем услуги:
        </p>
        <ul class="popup__list">
            <li class="popup__list-item">Стройка сети PON на территории СНТ;</li>
            <li class="popup__list-item">Организация видеонаблюдения на территори СНТ;</li>
            <li class="popup__list-item">Предоставление сети в пользование для целей СНТ;</li>
        </ul>
        <form class="popup-form">
            <p class="popup-form__msg popup-form__msg_seccess">Ваша заявка отправлена</p>
            <p class="popup-form__msg popup-form__msg_error">Произошла ошибка</p>
            <input class="popup-form__input" type="text" name="region" placeholder="Название СНТ" required>
            <input class="popup-form__input" type="text" name="name" placeholder="Контактное лицо" required>
            <input class="popup-form__input" type="tel" name="phone" id="therd-phone" placeholder="Номер телефона" required>
            <button class="popup-form__btn" type="submit">Отправить заявку</button>
            <p class="popup-form__text">Нажимая кнопку “Отправить заявку” Вы соглашатесь с <a href="#">политикой обработки персональных данных</a></p>
        </form>
    </div>
    </div>
    <div class="popup-overlay"></div>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/jquery.maskedinput.js"></script>
<script src="/js/main.js"></script>

</body>
</html>