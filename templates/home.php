<?php
/*
Template Name: Главная

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>

<section class="sporteco__section" id="sporteco-section">
    <div class="container">
        <div class="sporteco__inner">
            <div class="sporteco__block-left">
                <h2 class="section-title sporteco__title" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">Почему <span>Sportéco</span>?</h2>
                <p class="section-descr sporteco__descr" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">Ведение спортивного дневника является хорошо известным подходом к улучшению психического благополучия и спортивного прогресса. Его эффективность была продемонстрирована многократно, с поддержкой психологов, терапевтов и других специалистов в этой области.</p>
                <p class="section-descr sporteco__descr" data-aos="fade-right" data-aos-duration="500" data-aos-delay="250">Приоритетное внимание методам самосовершенствования, таким как ведение спортивных дневников, может быть чрезвычайно полезным.</p>
                <p class="section-descr sporteco__descr" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">Подробнее о нашем исследовании:</p>
                <a class="sporteco__btn default-btn" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400" data-fancybox data-src="#popup__research">Читать подробнее</a>
            </div>
            <div class="sporteco__block-right">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sporteco-img-1.jpg" alt="" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300">
            </div>
        </div>
    </div>
</section>

<section class="stats__section">
    <div class="container">
        <div class="stats__inner">
            <div class="stats__item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div class="stats__number">7</div>
                <div class="stats__descr"> 7лет работы в этой области</div>
            </div>
            <div class="stats__item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="stats__number">14</div>
                <div class="stats__descr">Опыт работы с 14 видами спорта и 3 танцевальных направления</div>
            </div>
            <div class="stats__item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                <div class="stats__number">6</div>
                <div class="stats__descr">Перевод на 6 языков</div>
            </div>
            <div class="stats__item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                <div class="stats__number">10</div>
                <div class="stats__descr">Присутствие в более чем 10 странах</div>
            </div>
            <div class="stats__item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <div class="stats__number">50</div>
                <div class="stats__descr">Более 50 000 спортсменов используют наши дневники</div>
            </div>
        </div>
    </div>
</section>

<section class="advantages__section">
    <div class="container">
        <h2 class="section-title-white advantages__title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Преимущества перед ровесниками</h2>
        <h3 class="section-subtitle advantages__subtitle" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">У детей, которые ведут дневник</h3>
        <div class="advantages__items">
            <div class="advantages__item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250">
                <div class="advantages__circle">
                    <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/adv-img-1.svg" alt="emoji"> -->
                    <div class="advantages__number">1</div>
                </div>
                <div class="advantages__description">
                    Более упорны и решительны в достижении любых целей. Результаты у этих детей выше не только в спорте, но и в других сферах
                </div>
            </div>
            <div class="advantages__item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                <div class="advantages__circle">
                    <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/adv-img-2.svg" alt="emoji"> -->
                    <div class="advantages__number">2</div>
                </div>
                <div class="advantages__description">
                    Более организованные, самостоятельные, дисциплинированные. У них вырабатывается привычка составлять план и придерживаться его, полезная для взрослой жизни.
                </div>
            </div>
            <div class="advantages__item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="350">
                <div class="advantages__circle">
                    <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/adv-img-3.svg" alt="emoji"> -->
                    <div class="advantages__number">3</div>
                </div>
                <div class="advantages__description">
                    Лучше знают себя, свои возможности, желания, привычки. Это помогает детям эффективнее работать над собой и сохранять позитивный настрой.
                </div>
            </div>
        </div>
        <a href="<?php echo get_permalink(12); ?>" class="advantages__btn default-btn" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">Узнать больше</a>
    </div>
</section>

<section class="club-adv__section">
    <div class="container">
        <div class="club-adv__inner">
            <div class="club-adv__text">
                <h2 class="section-title club-adv__title" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">Что мы предлагаем <span>клубам и ассоциациям</span>:</h2>
                <p class="section-descr club-adv__descr" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">Sportéco - специализируется в создании персонализированных интерактивных дневников для клубов, ассоциаций и других организаций уже более пяти лет. Мы сможем обогатить и усилить вашу программу.</p>
                <p class="section-descr club-adv__descr" data-aos="fade-right" data-aos-duration="500" data-aos-delay="250">Преимущества для клуба/ассоциации включают:</p>
            </div>
            <div class="club-adv__block">
                <ul class="club-adv__list">
                    <li class="club-adv__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">Профессиональный подход к развитию талантов</li>
                    <li class="club-adv__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="350">Брендирование дневников</li>
                    <li class="club-adv__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400">Мотивированные и дисциплинированные спортсмены</li>
                    <li class="club-adv__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="450">Память атлетов, запечатленная в дневнике</li>
                    <li class="club-adv__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500">Увеличение бюджета от продажи дневников</li>
                </ul>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/club-adv-img.png" alt="" class="club-adv__block-img" data-aos="fade-left" data-aos-duration="500" data-aos-delay="350">
            </div>
            <div class="club-adv__text">
                <p class="section-descr club-adv__descr" data-aos="fade-right" data-aos-duration="500" data-aos-delay="150">Преимущества для клуба/ассоциации включают:</p>
                <a href="<?php echo get_permalink(10); ?>" class="club-adv__btn default-btn" data-aos="fade-right" data-aos-duration="500" data-aos-delay="450">подробнее</a>
            </div>
        </div>
    </div>
</section>


<section class="clients__section">
    <div class="container">
        <div class="clients__inner">
            <h2 class="section-title clients__title" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">Наши <span>клиенты</span>:</h2>
            <div class="clients__items" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="clients__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-1.png" alt="Фото клиента">
                    <p class="clients__item-description">Баскетбол Канада и NBA</p>
                </div>
                <div class="clients__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-2.png" alt="Фото клиента">
                    <p class="clients__item-description">Футбол Казахстан</p>
                </div>
                <div class="clients__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-3.png" alt="Фото клиента">
                    <p class="clients__item-description">Русские бальные танцы</p>
                </div>
                <div class="clients__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-4.png" alt="Фото клиента">
                    <p class="clients__item-description">Русская акробатика</p>
                </div>
                <div class="clients__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-5.png" alt="Фото клиента">
                    <p class="clients__item-description">Английский спринт</p>
                </div>
            </div>
            <a data-fancybox data-src="#popup__form" class="clients__btn default-btn" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">заказать дневник</a>
        </div>
    </div>
</section>


<section class="good-moments__section">
    <div class="container">
        <h2 class="section-title-white good-moments__title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">ТРАМПЛИН ДЛЯ РОСТА</h2>
        <h3 class="section-subtitle good-moments__subtitle" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">ЖИЗНЬ РЕБЕНКА, ВЕДУЩЕГО ДНЕВНИК, БУДЕТ ПОЛНОЙ ПОЗИТИВНЫХ МОМЕНТОВ:</h3>
        <div class="good-moments__items">
            <div class="good-moments__item first" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                <div class="good-moments__circle">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/good-moments-img-1.svg" alt="Счастливый ребенок">
                </div>
                <div class="good-moments__description">
                    УСПЕХ, РАЗВИТИЕ, ПЕРСПЕКТИВЫ, ДОСТИЖЕНИЕ, ПОБЕДА, ПРИЗНАНИЕ, ВЫИГРЫШ, ЗНАНИЕ
                </div>
            </div>
            <div class="good-moments__item second" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                <div class="good-moments__circle">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/good-moments-img-2.svg" alt="Счастливый ребенок">
                </div>
                <div class="good-moments__description">
                    ХОРОШЕЕ НАСТРОЕНИЕ, СТРЕМЛЕНИЕ, ИНТЕРЕС, СЧАСТЬЕ, ВОСТОРГ, УВЛЕЧЕННОСТЬ
                </div>
            </div>
            <div class="good-moments__item third" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <div class="good-moments__circle">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/good-moments-img-3.svg" alt="Счастливый ребенок">
                </div>
                <div class="good-moments__description">
                    УДАЧА, ЛЕГКОСТЬ, СВОБОДА ВЫБОРА, ПРОЦВЕТАНИЕ, ПОДЪЕМ, СВЕРШЕНИЕ, ПРИЗНАНИЕ
                </div>
            </div>
        </div>
    </div>
</section>

<section class="digital-diaries__section">
    <div class="container">
        <div class="digital-diaries__inner">
            <h2 class="section-title digital-diaries__title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Спортивные дневники теперь доступны <span>в цифровом формате</span>.</h2>
            <p class="section-descr digital-diaries__description" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">MySportLink - уникальное приложение, созданное профессионалами и специалистами в области спорта, для поддержки молодых спортсменов в их развитии и достижения лучших результатов. Ведение дневника в бумажном и цифровом варианте даст огромный рост для спортсменов.</p>
            <p class="section-descr digital-diaries__description" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250">Узнайте больше о цифровой версии наших спортивных дневников.</p>
            <a href="https://mysportlink.com/" target="_blank" class="digital-diaries__btn default-btn" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">узнать больше</a>
            <div class="digital-diaries__download-block">
                <div class="digital-diaries__download-info" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <h3 class="digital-diaries__block-title">Скачайте приложение</h3>
                    <p class="digital-diaries__block-description">Скачайте приложение сейчас и начните улучшать свои спортивные навыки уже сегодня!</p>
                    <div class="digital-diaries__download-btns">
                        <a target="_blank" href="https://apps.apple.com/ru/app/mysportlink-sport-journaling/id1598380344" class="digital-diaries__download-btn digital-diaries__appstore-btn">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/appstore-btn.svg" alt="Значок App Store">
                        </a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.f12.sporteco&hl=ru&gl=US" class="digital-diaries__download-btn digital-diaries__googleplay-btn">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/googleplay-btn.png" alt="Значок Google Play">
                        </a>
                    </div>
                </div>
                <div class="digital-diaries__phone-images">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/digital-diaries-phone-1.svg" alt="Изображение телефона" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/digital-diaries-phone-2.svg" alt="Изображение телефона" data-aos="fade-right" data-aos-duration="500" data-aos-delay="250">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/digital-diaries-phone-3.svg" alt="Изображение телефона" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="reviews__section">
    <div class="container">
        <div class="reviews__inner">
            <h2 class="section-title reviews__title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Наши <span>отзывы</span>:</h2>
            <p class="section-descr reviews__descr" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Что говорят о нас спортсмены, тренера, родители и спортивные ассоциации?</p>
            <div class="reviews__items">
                <div class="reviews__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="250">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-star.svg">
                    <p class="reviews__item-title">Спортсмен:</p>
                    <p class="reviews__item-description">"Будучи молодым атлетом, я обнаружил, что эта программа - настоящий прорыв. Важно не только физическое тренировка; фокус на ментальном и эмоциональном развитии сделало меня более сильным, более универсальным спортсменом. Я узнал так много о себе, не только как об атлете, но и как о человеке. Могу уверенно сказать, что Sportéco помог мне раскрыть весь свой потенциал!"</p>
                </div>

                <div class="reviews__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="350">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-star.svg">
                    <p class="reviews__item-title">Тренер:</p>
                    <p class="reviews__item-description">"За десятилетия тренерской работы я еще не встречал программы, настолько всеобъемлющей, как эта. Она затрагивает часто пренебрегаемые аспекты ментального и эмоционального развития спортсменов, улучшая не только их производительность, но и общее благополучие. Изменения, которые я видел в своей команде, были просто необыкновенными. Это обязательный ресурс для всех тренеров."</p>
                </div>

                <div class="reviews__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="450">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-star.svg">
                    <p class="reviews__item-title">Родитель:</p>
                    <p class="reviews__item-description">"Уверенность и устойчивость моих детей заметно улучшились с работой с спортивными дневниками. Они научились управлять своими эмоциями, эффективно работать в команде и, что самое главное, получать удовольствие от процесса. Видеть, как они развивают эти жизненные навыки, улучшая свои спортивные достижения, действительно радует. Я настоятельно рекомендую эту программу другим родителям спортсменов."</p>
                </div>

                <div class="reviews__item" data-aos="fade-right" data-aos-duration="500" data-aos-delay="550">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-img-star.svg">
                    <p class="reviews__item-title">Спортивная Ассоциация:</p>
                    <p class="reviews__item-description">"Сотрудничество с Sportéco превзошло все наши ожидания. Спортивные дневники были прекрасно адаптированы под наши нужды, предоставляя нашим атлетам инструменты для гармоничного физического и ментального развития. Отмечаем улучшение результатов, усиление командного духа и значительное повышение уровня удовлетворенности атлетов. Программа идеально сочетается с нашей миссией развития спорта и академических успехов. С нетерпением ожидаем дальнейшего сотрудничества!"</p>
                </div>

            </div>
        </div>
    </div>
</section>





<div id="popup__research" class="popup__block" style="display: none">
    <section class="research__section" id="form-section">
        <div class="container">
            <div class="research__inner">
                <div class="research__block">
                    <div class="research__block-inner">
                        <div class="research__block-title">Наши исследовательские результаты из Китайского университета Гонконга</div>

                        <div class="research__block-descr">Целью этого исследования было изучение влияния спортивного журнала на когнитивные функции студентов-спортсменов и восприятие физической грамотности.</div>

                        <a href="https://www.spe.cuhk.edu.hk/eng/people.asp?pageid=16" target="_blank" class="research__img-link">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/research-img-1.webp" alt="">
                        </a>
                        <div class="research__block-sign">Профессор Раймонд Ким-Вай Сум, узнайте больше, нажав на изображение.</div>


                        <div class="research__block-descr">Доктор Раймонд Сум провел более 20 лет в качестве исследователя, главным образом изучая физическую грамотность и ее применение к разным группам населения. Его беспокоит влияние телефонов и других экранов на позвоночник и осанку, называя это "бедствием для нашего здоровья", и надеется, что использование этих дневников приведет к положительным результатам для здоровья.</div>
                        
                        <div class="research__block-cols col-2">
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/research-img-2.webp" alt="">
                            <div class="research__block-col">
                                <div class="research__block-descr">В январе 2021 года мы начали исследование с 300 студентами в Гонконге, которые будут использовать дневники.</div>
                                <div class="research__block-descr">"Дневник - лишь средство, но ключевое - мы хотим изучить физическую грамотность студентов. Мы хотим понять, как они воспринимают физическую грамотность и объективные показатели для отслеживания их когнитивных функций. После восьми недель занятий и тренировок с использованием этого дневника мы проведем тесты, чтобы сравнить их прогресс до и после использования дневника".</div>
                            </div>
                        </div>

                        <div class="research__block-cols col-2">
                            <div class="research__block-col">
                                <div class="research__block-descr bold">Результаты</div>
                                <div class="research__block-descr">Это недавнее исследование показало положительную динамику во всех ключевых областях, которые были протестированы с использованием PPLI (инструмент восприятия физической грамотности), теста Фланкера для проверки внимания и теста Стернберга для проверки рабочей памяти.</div>
                                <div class="research__block-descr">Исследование проводилось до и после использования My Sport Journals, и все тренды производительности были зафиксированы положительными.</div>
                            </div>
                            <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/research-img-3.webp" alt="">
                        </div>

                        <img class="fancybox-open-img" src="<?php bloginfo('template_url'); ?>/assets/img/research-img-4.webp" alt="">

                        <div class="research__block-descr bold">Инструменты</div>
                        <div class="research__block-descr">Выборка</div>
                        <div class="research__block-descr italic bold">Рукописный спортивный дневник</div>
                        <div class="research__block-descr">Рукописный спортивный дневник - это дневник тренировок для каждого участника, разделенный на шесть частей. Первая часть касается информации о фоне участника и установки целей. Вторая часть посвящена уголку поощрения от сверстников и родителей. Третья часть касается записи и размышления о тренировочной практике, включая практикуемые элементы, эмоции во время практики, силу и улучшение, и позволяет участникам осознать процесс тренировки. Четвертая часть посвящена домашним упражнениям, требующим от участников ввода выполненной работы, включая базовые физические упражнения и обучающие видео известных спортсменов. Пятая часть - это запись соревнований, где тренер оценивает техническую и тактическую производительность участника. Последняя часть посвящена самоанализу после соревнований. От участников требуется заполнять запись и размышления после каждой тренировки и выполнять домашние задания в конце недели.</div>
                        <div class="research__block-descr italic bold">Тест когнитивной функции</div>
                        <div class="research__block-descr">Тест когнитивной функции включает 2 компьютерных теста: тест Фланкера и тест Стернберга. Перед реальным тестом участникам предлагается 6 пробных тестов. Во время пробного теста участники получают обратную связь, во время реального теста ответы не даются. В реальном тесте измеряются точность задачи и скорость реакции.</div>
                        <div class="research__block-descr">Тест Фланкера содержит 60 вопросов и проверяет способность участника к концентрации внимания, определяя согласованные и несогласованные элементы. От участников требуется как можно быстрее нажать правую или левую стрелку на клавиатуре для указания согласованности или несогласованности центральной стрелки. Если ответ не дан в течение 400 мс, программа автоматически переходит к следующему вопросу, и это считается пропуском (Eriksen & Eriksen, 1974; Ridderinkhof et al., 1995). Многие исследования использовали тест Фланкера для оценки способности к концентрации внимания (Ridderinkhof et al., 1997; Rueda et al. 2004; Ridderinkhof et al., 2005; Wylie et al., 2009; Servant et al.,2015; Servant & Logan, 2019).</div>
                        <div class="research__block-descr">Тест Стернберга содержит 3 уровня и проверяет рабочую память участников, путем запоминания определенных чисел. На первом уровне предоставляется одно число, и включено шестнадцать вопросов. На уровнях 2 и 3 предоставляются три и пять случайных чисел, и каждый уровень состоит из тридцати двух вопросов соответственно. Участникам даются инструкции, что тестовое число верно или неверно соответствует заданным числам, и они должны нажать левую или правую стрелку на клавиатуре соответственно (Barch et al. 2011). Исследование Корбина и Маркера (2013) показало, что рабочая память может быть широко проверена с использованием теста Стернберга (Atkinson et al. 1969; Wingfield & Branca, 1970; Townsend & Roos, 1973; Harris & Fleer, 1974).</div>

                        <div class="research__block-descr italic bold">Тест когнитивной функции</div>
                        <div class="research__block-descr">PPLI (Sum et al., 2018) признан подходящим инструментом для измерения различных групп населения, особенно подростков и молодежи. Это 9-пунктный и 5-балльный опросник (Таблица 1). "Знание и понимание", "Самовыражение и общение с другими" и "Чувство себя и уверенность в себе" являются основными атрибутами восприятия физической грамотности (Sum et al., 2016). "Знание и понимание" относятся к PL2, 3 и 9; "Самовыражение и общение с другими" определены как PL6, 7 и 8; "Чувство себя и уверенность в себе" включает PL1, 4 и 5.</div>


                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>