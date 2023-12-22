<?php
/* Template Name: Главная арена */
get_header();
?>
<main class="main" id="main">
            <section class="career page-divs--arena-main">
    <div class="_container">
        <div class="career__inner">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link">Главная арена</a>
                </li>
            </ul>
            <h1 class="career__title arena-main-title">Главная спортивная арена</h1>
            <p class="career__description arena-main-description">
                Самый большой зал в Урало-Сибирском регионе, его площадь - 1720 м²
            </p>
        </div>
    </div>
</section>

            <section class="arena-events">
    <img class="arena-events__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <ul class="arena-events__list _category-list">
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#sport">Спорт</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#concert">Концерт</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#coop">Корпоратив</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#scheme">Схема зала</a>
            </li>
        </ul>

        <div class="arena-events__inner">
            <div class="question">
                <div class="question__info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.svg" alt="main-icon">
                    <p class="question__text _title-description">
                        По вопросам арены главной спортивной арены 
                        обращайтесь по электронной почете – <a href="mail:yaneustroeva@yandex.ru">yaneustroeva@yandex.ru</a>
                    </p>
                </div>
            </div>
            <a name="sport"></a>
            <div class="about-us__content">
                <p class="about-us__head _title-description _text-center">В ДИ<span>ВСЕ НА СПОРТЕ</span></p>
                <h1 class="arena-events__title _title _text-center">Проведение спортивных мероприятий</h1>
                <div class="arena-events__info">
                    <div class="video-player">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-video.png" alt="">
                    </div>
                    <div class="arena-events__features">
                        <ul class="statistics arena-events-statistics">
                            <li class="statistics__item">
                                <span>11 000</span>
                                различных мероприятий
                            </li>
                            <li class="statistics__item">
                                <span>1 000 м²</span>
                                площадь игрового поля
                            </li>
                            <li class="statistics__item">
                                <span>21 000 м²</span>
                                общая площадь
                            </li>
                        </ul>
                        <ul class="info-box">
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">билетно-пропускная система</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">защитное пластиковое покрытие в зале</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">световая и акустическая системы</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">зрительские места на трибунах - <span>3350</span>, танцпол - <span>1500-2000</span> человек, партер - <span>750</span> человек</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="">
                                <p class="info-box__text">гримерные комнаты</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">размещение кейтеринга</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="swiper main-arena__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide main-arena__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-1.png" alt="main-arena-slider">
                    </div>
                    <div class="swiper-slide main-arena__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-2.png" alt="main-arena-slider">
                    </div>
                    <div class="swiper-slide main-arena__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-3.png" alt="main-arena-slider">
                    </div>
                    <div class="swiper-slide main-arena__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-2.png" alt="main-arena-slider">
                    </div>
                </div>
                <div class="main-arena__button">
                    <button class="main-arena__prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider-arrow-prev.svg" alt="">
                    </button>

                    <button class="main-arena__next">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider-arrow-next.svg" alt="">
                    </button>
                </div>
                <div class="main-arena__pagination">
            
                </div>
            </div>
        </div>
    </div>
</section>
<a name="concert"></a>
            <section class="arena-concert">
    <img src="<?php echo get_template_directory_uri(); ?>/img/arena-concert-bg.png" alt="arena-concert-bg" class="arena-concert__bg">
    <div class="_container">
        <div class="arena-concert__inner">
            <div class="about-us__content">
                <p class="about-us__head _title-description _text-center arena-concert__head">В ДИ<span>ВСЕ НА СПОРТЕ</span></p>
                <h1 class="arena-events__title _title arena-concert__title">Проведение спортивных мероприятий</h1>
                <div class="arena-events__info arena-concert__info">
                    <div class="arena-events__features ">
                        <ul class="statistics arena-events-statistics">
                            <li class="statistics__item">
                                <span>11 000</span>
                                различных мероприятий
                            </li>
                            <li class="statistics__item">
                                <span>1 000 м²</span>
                                площадь игрового поля
                            </li>
                            <li class="statistics__item">
                                <span>21 000 м²</span>
                                общая площадь
                            </li>
                        </ul>
                        <ul class="info-box">
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">билетно-пропускная система</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">защитное пластиковое покрытие в зале</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">световая и акустическая системы</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">зрительские места на трибунах - <span>3350</span>, танцпол - <span>1500-2000</span> человек, партер - <span>750</span> человек</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="">
                                <p class="info-box__text">гримерные комнаты</p>
                            </li>
                            <li class="info-box__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                                <p class="info-box__text">размещение кейтеринга</p>
                            </li>
                        </ul>
                    </div>
                    <div class="video-player">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-video.png" alt="">
                    </div>
                </div>
                <div class="swiper main-arena__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide main-arena__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-1.png" alt="main-arena-slider">
                        </div>
                        <div class="swiper-slide main-arena__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-2.png" alt="main-arena-slider">
                        </div>
                        <div class="swiper-slide main-arena__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-3.png" alt="main-arena-slider">
                        </div>
                        <div class="swiper-slide main-arena__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-2.png" alt="main-arena-slider">
                        </div>
                        <div class="swiper-slide main-arena__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-slider-2.png" alt="main-arena-slider">
                        </div>
                    </div>
                    <div class="main-arena__button">
                        <button class="main-arena__prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/slider-arrow-prev.svg" alt="">
                        </button>
    
                        <button class="main-arena__next">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/slider-arrow-next.svg" alt="">
                        </button>
                    </div>
                    <div class="main-arena__pagination">
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<a name="coop"></a>
            <section class="arena-corp">
    <div class="_container">
        <div class="arena-corp__inner">
            <p class="arena-corp__head _title-description _text-center">В ДИ<span>ВСЕ РАЗВЛЕКАТЬСЯ</span></p>
            <h1 class="arena-corp__title _title _text-center">Корпоративные мероприятия</h1>
            <div class="arena-corp__photos">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arena-corp-photo.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arena-corp-photo.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arena-corp-photo.png" alt="">
            </div>
            <div class="info">
                <p class="info__title">Провести юбилей компании, важную презентацию на нашей площадке – легко!</p>
                <div class="info__box">
                    <ul class="info__list">
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="">
                            <p>возможность трансформирования зала под необходимое количество гостей</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="">
                            <p>фуршет – до 1500 человек, банкет – до 800 человек</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="">
                            <p>размещение кейтеринга</p>
                        </li>
                    </ul>
                    <ul class="info__list">
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="">
                            <p>гримерные комнаты</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="">
                            <p>световая и акустические системы</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="">
                            <p>размещение welcome-зоны на 1-м этаже</p>
                        </li>
                    </ul>
                </div>

                <div class="info__bottom">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="">
                    <p>Спортивное и концертное оборудование</p>
                </div>
            </div>
        </div>
    </div>
</section>
<a name="scheme"></a>
            <section class="arena-scheme">
    <img class="arena-scheme__bg" src="<?php echo get_template_directory_uri(); ?>/img/arena-scheme-bg.png" alt="">
    <div class="_container">
        <div class="arena-scheme__inner">
            <h1 class="_title _text-center">Схема зала</h1>
            <img class="arena-scherme__scheme" src="<?php echo get_template_directory_uri(); ?>/img/gym-scheme.png" alt="">
        </div>
    </div>
</section>
            
</main>
<?php get_footer(); ?>