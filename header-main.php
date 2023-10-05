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
            <div class="header__main-cover">
                <div class="header__cover-circle-1"></div>
                <div class="header__cover-circle-2"></div>
                <div class="header__cover-circle-3"></div>
                <div class="header__cover-circle-4"></div>
                <div class="header__cover-circle-5"></div>
                <div class="header__cover-circle-6"></div>
                <div class="header__cover-circle-7"></div>
                <div class="header__cover-circle-8"></div>
                <div class="header__cover-circle-9"></div>
                <div class="header__cover-circle-10"></div>
                <div class="header__cover-circle-11"></div>
            </div>
            <div class="header__top main">
                <div class="container">
                    <div class="header__top-left">
                        <a href="#" class="header__menu-link">About Us</a>
                        <a href="#" class="header__menu-link">Portfolio</a>
                        <a href="#" class="header__menu-link">Services</a>
                    </div>
                    <div class="header__top-center">
                        <div class="header__logo">
                            <a href="<?php echo get_permalink(6); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <nav class="header__top-right">
                        <a href="#" class="header__menu-link">Stages</a>
                        <a href="#" class="header__menu-link">Price</a>
                        <a href="#" class="header__menu-link">Contacts</a>
                    </nav>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <div class="header__bottom-content">
                        <div class="header__bottom-upper">
                            <div class="header__version">1.0</div>
                            <h1 class="header__title" data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">SITES THAT BRING SALES</h1>
                            <p class="header__descr" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200">turnkey website development</p>
                            <p class="header__descr" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200">design in figma</p>
                            <p class="header__descr" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200">3D modeling and vizualization</p>
                            <a data-fancybox data-src="#popup__form" class="header__btn" data-aos="fade-up" data-aos-duration="400" data-aos-delay="300">contact</a>
                        </div>
                        <div class="header__bottom-lower">
                            <a href="#" class="header__bottom-link link-tg">telegram</a>
                            <a href="mailto:info@aethe.com" class="header__bottom-link link-email">info@aethe.com</a>
                        </div>

                    </div>
                </div>

            </div>
        </header>