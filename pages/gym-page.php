<?php
/* Template Name: Тренировочные залы */
get_header();
?>
<main class="main" id="main">
            <section class="career page-divs--gyms-main">
    <div class="_container">
        <div class="career__inner">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link">Тренировочные залы</a>
                </li>
            </ul>
            <h1 class="career__title gyms-main-title">Тренировочные залы</h1>
            <p class="career__description arena-main-description">
                Самый большой зал в Урало-Сибирском регионе, его площадь - 1720 м²
            </p>
        </div>
    </div>
</section>
            <section class="gyms-workout">
    <img class="gyms-workout__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <ul class="gyms-workout__list _category-list">
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#big">Большой и малый залы</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#ofp">Зал ОФП</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#choreography">Зал хореографии</a>
            </li>
        </ul>

        <a name="big"></a>
        <div class="gyms-workout__inner">
            <p class="gyms-workout__head _title-description _text-center">В ДИ<span>ВСЕ НА ТРЕНИРОВКУ</span></p>
            <h1 class="arena-events__title _title _text-center">Большой и малый залы</h1>
            <p class="gyms-workout__description _text-center">Большой и малый залы располагаются на 2-м этаже тренировочного комплекса. Тренировочные площадки подходят для занятий 
                игровыми видами спорта: волейбол, баскетбол, мини- футбол. На малой площадке смонтирован современный скалодром «Вертикаль ДИВСа» высотой 15 метров.</p>
            <div class="gyms-workout__content">
                <img class="gym-photo" src="<?php echo get_template_directory_uri(); ?>/img/gyms-workout-photo.png" alt="">
                <div class="gyms-workout__features">
                    <div class="gyms-workout__statistic">
                        <span>1 500 м²</span>
                        <p>общая площадь</p>
                    </div>
                    <div class="mini-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mini-bg.png" alt="">
                        <p class="mini-bg__text">ОСНАЩЕНИЕ</p>
                    </div>
                    <ul class="info">
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Судейская система</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Информационное табло</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Спортивное оборудование для игровых видов спорта: баскетбол, волейбол, мини-футбол</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Звуковое оборудование</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">8 командных раздевалок и тренерских комнат</p>
                        </li>
                    </ul>
                    <div class="mini-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mini-bg.png" alt="">
                        <p class="mini-bg__text">ФОРМАТ</p>
                    </div>
                    <ul class="info">
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Звуковое оборудование</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">8 командных раздевалок и тренерских комнат</p>
                        </li>
                    </ul>
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
            <div class="question">
                <div class="question__info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.svg" alt="main-icon">
                    <p class="question__text _title-description">
                        По вопросам арены главной спортивной арены 
                        обращайтесь по электронной почете – <a href="mail:yaneustroeva@yandex.ru">yaneustroeva@yandex.ru</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<a name="ofp"></a>
            <section class="gyms-physical">
    <div class="_container">
        <div class="gyms-physical__inner">
            <div class="gyms-physical__content">
                <img class="gyms-physical__bg" src="<?php echo get_template_directory_uri(); ?>/img/main-arena-bg.png" alt="gyms-physical-bg">
                <div class="gyms-physical__features">
                    <p class="head _title-description">В ДИ<span>ВСЕ НА ОФП!</span></p>
                    <h1 class="gyms-physical__title _title">Залы общей физической подготовки</h1>
                    <div class="gyms-workout__statistic">
                        <span>60 м² / 120 м²</span>
                        <p>общая площадь</p>
                    </div>
                    <p class="description">Залы общей физической подготовки расположены на 1- м этаже тренировочного комплекса. Подойдут для занятий фехтованием, гимнастикой.</p>
                    <div class="mini-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mini-bg.png" alt="">
                        <p class="mini-bg__text">ОСНАЩЕНИЕ</p>
                    </div>
                    <ul class="info">
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Гардероб</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Раздевалки</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Спортивное напольное покрытие</p>
                        </li>
                    </ul>
                    <div class="mini-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mini-bg.png" alt="">
                        <p class="mini-bg__text">ФОРМАТ</p>
                    </div>
                    <ul class="info">
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Звуковое оборудование</p>
                        </li>
                    </ul>
                </div>
                <img class="gym-photo" src="<?php echo get_template_directory_uri(); ?>/img/gyms-physical-photo.png" alt="">
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
            <div class="question">
                <div class="question__info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.svg" alt="main-icon">
                    <p class="question__text _title-description">
                        По вопросам арены главной спортивной арены 
                        обращайтесь по электронной почете – <a href="mail:yaneustroeva@yandex.ru">yaneustroeva@yandex.ru</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<a name="choreography"></a>
            <section class="gyms-dance">
    <div class="_container">
        <div class="gyms-workout__inner">
            <p class="gyms-workout__head _title-description _text-center">В ДИ<span>ВСЕ ТАНЦЫ!</span></p>
            <h1 class="arena-events__title _title _text-center">Зал хореографии</h1>
            <div class="gyms-workout__content">
                <img class="gym-photo" src="<?php echo get_template_directory_uri(); ?>/img/gyms-dance-photo.png" alt="">
                <div class="gyms-workout__features">
                    <p class="gyms-dance__description">Зал хореографии располагается на 5- м этаже тренировочного комплекса. Подходит для занятий художественной гимнастикой, хореографией, фитнесом..</p>
                    <div class="gyms-workout__statistic">
                        <span>110 м²</span>
                        <p>общая площадь</p>
                    </div>
                    <div class="mini-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mini-bg.png" alt="">
                        <p class="mini-bg__text">ОСНАЩЕНИЕ</p>
                    </div>
                    <ul class="info">
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Спортивное напольное покрытие</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Гимнастическое оборудование</p>
                        </li>
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Раздевалки</p>
                        </li>
                    </ul>
                    <div class="mini-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mini-bg.png" alt="">
                        <p class="mini-bg__text">ФОРМАТ</p>
                    </div>
                    <ul class="info">
                        <li class="info__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mark-icon.svg" alt="mark-icon">
                            <p class="info__text">Тренировочные занятия</p>
                        </li>
                    </ul>
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
            <div class="question">
                <div class="question__info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.svg" alt="main-icon">
                    <p class="question__text _title-description">
                        По вопросам арены главной спортивной арены 
                        обращайтесь по электронной почете – <a href="mailto:yaneustroeva@yandex.ru">zav_fitness@divsport.ru</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php
get_footer();
?>