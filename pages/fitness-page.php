<?php
/* Template Name: Фитнес арена */
get_header();
?>
<main class="main" id="main">
            <section class="fitness-main page-divs--fitness-main">
    <div class="_container">
        <div class="career__inner">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link">Fitness-Arena</a>
                </li>
            </ul>
            <h1 class="fitness-main__title _main-page__title">Fitness-Arena</h1>
            <p class="fitness-main__description _main-page__description">Современный фитнес в самом сердце города</p>
            <div class="fitness-main__question">
                <p>Ответим на все ваши вопросы –</p>
                <a href="tel:+73433593773">+7 (343) 359-37-73</a>
            </div>
        </div>
    </div>
</section>
            <section class="fitness-about">
    <img class="fitness-about__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <ul class="fitness-about__list _category-list">
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Купить абонемент</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Хочу гостевой визит</a>
            </li>
        </ul>

        <div class="fitness-about__inner">
            <div class="fitness-about__wrapper">
                <img class="fitness-about__swab" src="<?php echo get_template_directory_uri(); ?>/img/swab.svg" alt="swab">
                <div class="fitness-about__photos">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-1.jpg" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-2.jpg" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-3.jpg" alt="" />
                </div>
                <div class="fitness-about__content">
                    <p class="fitness-about__head">В ДИ<span>ВСЕ на ФИТНЕС!</span></p>
                    <h1 class="fitness-about__title">Фитнес-арена</h1>
                    <p class="fitness-about__description">
                        Введена в эксплуатацию в начале января 2019 года. На площадке проходят тренировки профессиональных команд, таких как БК «УГМК», ВК «Уралочка», Центр Паралимпийской и Сурдлимпийской подготовки сборных команд Свердловской области «Родник».В III квартале 2020 года была пересмотрена концепция фитнес-центра. В процессе реновации — базовый тренажёрный зал и дополнительные помещения свободного назначения зонированы и оснащены профессиональным оборудованием премиум-класса линейки Life fitness для создания комплексного подхода, создающего мотивирующую среду как для гостей центра, так и для профессиональных спортсменов с их динамичным образом жизни. ДИВС Fitness-Arena — отличное фитнес-пространство в самом центре города!    
                    </p>
                    <ul class="statistics">
                        <li class="statistics__item">
                            <span>516 м²</span>
                            тренажерный зал
                        </li>
                        <li class="statistics__item">
                            <span>75 м²</span>
                            зона тренинга
                        </li>
                        <li class="statistics__item">
                            <span>36 м²</span>
                            студия сайкла
                        </li>
                        <li class="statistics__item">
                            <span>220 м²</span>
                            зона единоборств
                        </li>
                    </ul>
                </div>
            </div>
            <div class="fitness-about__video">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fitness-about-video.png" alt="">
            </div>
        </div>
    </div>
</section>
            <section class="fitnes-drive">
    <div class="_container">
        <div class="advantage__inner">
            <p class="advantage__head">В ДИ<span>ВСЕ НА ДРАЙВЕ!</span></p>
            <div class="advantage__caption">
                <h1 class="advantage-name">Выбери свою клубную карту</h1>
            </div>
            <div class="advantage__items">
                <img src="<?php echo get_template_directory_uri(); ?>/img/advantage-block.png" alt="">
                <ul class="advantage__list">
                    <li class="advantage__item">
                        <div class="advantage__content">
                            <span class="fitness-drive__number">7</span>
                            <h5 class="advantage__title">Бесплатный фитнес</h5>
                            <p class="advantage__text">Для всех сотрудников сети</p>
                        </div>
                    </li>
                    <li class="advantage__item">
                        <div class="advantage__content">
                            <span class="fitness-drive__number">60</span>
                            <h5 class="advantage__title">Молодая команда</h5>
                            <p class="advantage__text">Средний возраст сотрудников 24-27 лет</p>
                        </div>
                    </li>
                    <li class="advantage__item">
                        <div class="advantage__content">
                            <span class="fitness-drive__number">150</span>
                            <h5 class="advantage__title">Карьерный рост</h5>
                            <p class="advantage__text">Мы поможем тебе добиться многого</p>
                        </div>
                    </li>
                    <li class="advantage__item">
                        <div class="advantage__content">
                            <span class="fitness-drive__number">50000</span>
                            <h5 class="advantage__title">Стабильная зарплата</h5>
                            <p class="advantage__text">У нас счастливые сотрудники</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="format-block">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fitness-drive-photo.png" alt="">
                <div >
                    <h4 class="format-block__title">ВЫБЕРИ СВОЙ ФОРМАТ</h4>
                    <p>Каждый абонемент включает количество дней и визитов на спортивную площадку «Фитнес-Арены».</p>
                    <p>Каким будет твой фитнес — решаешь ты. Мы приготовили комфортный фитнес-тариф для каждого</p>
                    <a class="format-block__button _button" href="#">Выбрать карту</a>
                </div>
            </div>
        </div>
    </div>
</section>
            <section class="fitness-gyms">
    <img src="<?php echo get_template_directory_uri(); ?>/img/fitness-gyms-bg.webp" alt="gyms-bg" class="fitness-gyms__bg">
    <div class="_container">
        <div class="fitness-gyms__inner">
            <div class="fitness-gyms__caption">
                <div class="fitness-gyms__info">
                    <p class="fitness-gyms__head _sub-title">В ДИ<span>ВСЕ ЗАЛЫ</span></p>
                    <a class="fitness-gyms__button _button-no-fill" href="#">Посмотреть расписание</a>
                </div>
                <h1 class="fitness-gyms__name gyms-name _title">Лучший день для фитнеса – сегодня!</h1>
            </div>

            <ul class="gyms-list">
                <li class="gyms-list__item">
                    <img class="gyms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/arena-photo-1.jpg" alt="">
                    <h2 class="gyms-list__title _title-description">Тренажерный зал</h2>
                    <a href="" class="gyms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
                <li class="gyms-list__item">
                    <img class="gyms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/arena-photo-2.jpg" alt="">
                    <h2 class="gyms-list__title _title-description">Зона функционального тренинга</h2>
                    <a href="" class="gyms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
                <li class="gyms-list__item">
                    <img class="gyms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/arena-photo-3.jpg" alt="">
                    <h2 class="gyms-list__title _title-description">Студия сайкла</h2>
                    <a href="" class="gyms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
                <li class="gyms-list__item">
                    <img class="gyms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/arena-photo-4.jpg" alt="">
                    <h2 class="gyms-list__title _title-description">Залы групповых программ и единоборств</h2>
                    <a href="" class="gyms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
                <li class="gyms-list__item">
                    <img class="gyms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/arena-photo-3.jpg" alt="">
                    <h2 class="gyms-list__title _title-description">Студия сайкла</h2>
                    <a href="" class="gyms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
                <li class="gyms-list__item">
                    <img class="gyms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/arena-photo-4.jpg" alt="">
                    <h2 class="gyms-list__title _title-description">Залы групповых программ и единоборств</h2>
                    <a href="" class="gyms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
            </ul>
        </div>
    </div>
</section>
            <section class="fitness-test">
    <img class="fitness-test__bg" src="<?php echo get_template_directory_uri(); ?>/img/fitness-test-bg.png" alt="">
    <div class="_container">
        <div class="fitness-test__inner">
            <p class="fitness-test__head _sub-title">В ДИ<span>ВСЕ ТЕСТ-ДРАЙВ</span></p>
            <h1 class="fitness-test__title _title">Запишись на бесплатный тест-драйв</h1>
            <p class="fitness-test__description">
                Бесплатная полноценная тренировка, тур по клубу с  менеджером 
                и знакомство с атмосферой ДИВС
            </p>
            <a class="fitness-test__button _button" href="#">Записаться</a>
        </div>
    </div>
</section>
            <section class="fitness-reviews">
    <div class="_container">
        <p class="fitness-reviews__head _sub-title">В ДИ<span>ВСЕ ТЕСТ-ДРАЙВ</span></p>
        <h1 class="fitness-reviews__title _title">Запишись на бесплатный тест-драйв</h1>

        <div class="reviews">
            <div class="swiper reviews__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide main-arena__item reviews-item">
                        <div class="reviews-item__content">
                            <div class="reviews-item__top">
                                <div class="reviews-item__about">
                                    <img class="review-logo" src="<?php echo get_template_directory_uri(); ?>/img/review-logo.png" alt="reviews-logo">
                                    <div class="reviews-item__stars">
                                        <p>Олеся Ливанова</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                    </div>
                                </div>
                                <img class="review-quote" src="<?php echo get_template_directory_uri(); ?>/img/review-quote.svg" alt="review-quote">
                            </div>
                            <p class="reviews-item__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="swiper-slide main-arena__item reviews-item">
                        <div class="reviews-item__content">
                            <div class="reviews-item__top">
                                <div class="reviews-item__about">
                                    <img class="review-logo" src="<?php echo get_template_directory_uri(); ?>/img/review-logo.png" alt="reviews-logo">
                                    <div class="reviews-item__stars">
                                        <p>Олеся Ливанова</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg" alt="review-star">
                                    </div>
                                </div>
                                <img class="review-quote" src="<?php echo get_template_directory_uri(); ?>/img/review-quote.svg" alt="review-quote">
                            </div>
                            <p class="reviews-item__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="main-arena__button">
                    <button class="fitness-reviews__prev main-arena__prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider-arrow-prev.svg" alt="">
                    </button>

                    <button class="fitness-reviews__next main-arena__next">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider-arrow-next.svg" alt="">
                    </button>
                </div>
                <div class="main-arena__pagination"></div>
            </div>
        </div>
    </div>
</section>
</main>
<?php
get_footer();
?>