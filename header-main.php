<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>
    <nav class="menu-mob" id="menu">
        <ul>
            <div class="menu-mob__title">Menu</div>
            <?php wp_nav_menu(array('theme_location' => 'header')); ?>
            <a data-fancybox data-src="#popup__form" class="header__btn header__mob-btn">Связаться</a>
        </ul>
    </nav>
    <main class="slideout-panel" id="panel">
        <header class="header-main">
            <div class="header__top main">
                <div class="container">
                    <div class="header__top_left">
                        <a href="" class="header__menu-link">About Us</a>
                        <a href="" class="header__menu-link">Portfolio</a>
                        <a href="" class="header__menu-link">Services</a>
                    </div>
                    <div class="header__center_right">
                        <div class="header__logo">
                            <a href="<?php echo get_permalink(6); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <nav class="header__top_right">
                        <a href="" class="header__menu-link">Stages</a>
                        <a href="" class="header__menu-link">Price</a>
                        <a href="" class="header__menu-link">Contacts</a>
                    </nav>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <div class="header__bottom-content">
                        <h1 class="header__title" data-aos="fade-up" data-aos-duration="400" data-aos-delay="100"><span>ПОБЕДА ТАМ,</span><br>ГДЕ ЕСТЬ ДВИЖЕНИЕ ВПЕРЁД</h1>
                        <p class="header__descr" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200"><span>Sportéco</span> является лидером в создании интерактивных дневников для самоанализа и развития интеллектуальных способностей молодых спортсменов.</p>
                        <a data-fancybox data-src="#popup__form" class="header__btn" data-aos="fade-up" data-aos-duration="400" data-aos-delay="300">Заказать дневник</a>
                    </div>
                </div>

            </div>
        </header>