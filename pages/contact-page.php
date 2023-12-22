<?php
/* Template Name: Контакты */
get_header();
?>
<main class="main" id="main">
            <section class="contacts-section">
    <img class="contacts-section__bg" src="<?php echo get_template_directory_uri(); ?>/img/contacts-section-bg.svg" alt="contacts-section-bg">
    <div class="_container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/index.html" class="breadcrumbs__link">Главная</a>
            </li>
            <li class="breadcrumbs__item">
                <a class="breadcrumbs__link">Контакты</a>
            </li>
        </ul>
    </div>

    <div class="contacts-section__inner">
        <div class="_container">
            <h2>Администрация</h2>
            <div class="info">
                <div class="info-box">
                    <div class="info-box__item">
                        <img class="info-icon" src="<?php echo get_template_directory_uri(); ?>/img/contacts-phone-icon.svg" alt="contacts-phone-icon">
                        <p>+7 (343) 359-37-77</p>
                    </div>
                    <div class="info-box__item">
                        <img class="info-icon" src="<?php echo get_template_directory_uri(); ?>/img/contacts-mail-icon.svg" alt="contacts-mail-icon">
                        <p>divs@egov66.ru</p>
                    </div>
                </div>
                <div class="info__text">
                    <p>Генеральный директор Константинов Сергей Сергеевич, действует на основании Устава</p>
                </div>
            </div>
            <h2>Организационно-массовый отдел</h2>
            <div class="info">
                <img class="info-icon" src="<?php echo get_template_directory_uri(); ?>/img/contacts-phone-icon.svg" alt="contacts-phone-icon">
                <div class="info-box">
                    <div class="info-box__item">
                        <p>+7 (343) 359-37-77</p>
                    </div>
                    <div class="info-box__item">
                        <p>divs@egov66.ru</p>
                    </div>
                </div>
                <div class="info__social">
                    <img class="info-icon" src="<?php echo get_template_directory_uri(); ?>/img/contacts-mail-icon.svg" alt="contacts-mail-icon">
                    <p>orgotdel@divsport.ru</p>
                </div>
            </div>
            <h2>Фитнес-Арена</h2>
            <div class="info">
                <img class="info-icon" src="<?php echo get_template_directory_uri(); ?>/img/contacts-phone-icon.svg" alt="contacts-phone-icon">
                <div class="info-box">
                    <div class="info-box__item">
                        <p>+7 (343) 359-37-77</p>
                    </div>
                    <div class="info-box__item">
                        <p>divs@egov66.ru</p>
                    </div>
                </div>
                <div class="info__social">
                    <img class="info-icon" src="<?php echo get_template_directory_uri(); ?>/img/contacts-mail-icon.svg" alt="contacts-mail-icon">
                    <p>fitness@divsport.ru</p>
                </div>
            </div>
            <h2>ДИВС-Отель</h2>
            <div class="info">
                <img class="info-icon" src="<?php echo get_template_directory_uri(); ?>/img/contacts-phone-icon.svg" alt="contacts-phone-icon">
                <div class="info-box">
                    <div class="info-box__item">
                        <p>+7 (343) 359-37-77</p>
                    </div>
                    <div class="info-box__item">
                        <p>divs@egov66.ru</p>
                    </div>
                    (для связи в мессенджерах)
                </div>
                <div class="info__social">
                    <img class="info-icon" src="<?php echo get_template_directory_uri(); ?>/img/contacts-mail-icon.svg" alt="contacts-mail-icon">
                    <p>hotel@divsport.ru</p>
                </div>
            </div>
        </div>
    </div>
</section>
            <section class="map">
    <img class="map__bg" src="<?php echo get_template_directory_uri(); ?>/img/map-bg.png" alt="map-bg">
    <div class="_container">
        <div class="map-block">
            <h1 class="_text-center">Наши<span>контакты</span></h1>
            <div class="map-list">
                <div class="map-list__item">
                    <span>Телефон</span>
                    <div class="map-list__info">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-phone-icon.svg" alt="" />
                        <a href="tel:+73433593777">+7 (343) 359-37-77</a>
                    </div>
                </div>
                <div class="map-list__item">
                    <span>Адрес</span>
                    <div class="map-list__info">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-map-icon.svg" alt="" />
                        <a class="map-list__mail">г. Екатеринбург, Олимпийская набережная, д. 3</a>
                    </div>
                </div>
                <div class="map-list__item">
                    <span>Email</span>
                    <div class="map-list__info">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-mail-icon.svg" alt="" />
                        <a href="mailto:+73433593777">divs@egov66.ru</a>
                    </div>
                </div>
                <div class="map-list__item">
                    <span>Соц.сети</span>
                    <div class="map-list__info">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-vk-icon.svg" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-tg-icon.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>