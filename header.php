<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DivsArena
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="wrapper">

        <header class="header">
    <div class="_container">
        <div class="header__inner">
            <div class="header__logo">
                <a class="logo" href="/index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" />
                </a>
            </div>
            <div class="header__contacts">
                <div class="menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <img class="menu__icon" src="<?php echo get_template_directory_uri(); ?>/img/map-icon.svg" alt="" >
                            <a href="#" class="menu__link">г. Екатеринбург, Олимпийская набережная, д. 3</a>
                        </li>
                        <li class="menu__item">
                            <img class="menu__icon" src="<?php echo get_template_directory_uri(); ?>/img/phone-icon.svg" alt="" >
                            <a href="#" class="menu__link">+7 (343) 359-37-77</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Войти</a>
                            <img class="menu__icon" src="<?php echo get_template_directory_uri(); ?>/img/sign-in-icon.svg" alt="" >
                        </li>
                    </ul>
                    <div class="contact">
                        <div class="contact__link">
                            <button class="contact__button _button">Связаться с нами</button>
                        </div>
                        <div>
                            <a class="contact__icon" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/eyes-icon.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link">Арена</a>
                            <img class="nav__arrow"  src="<?php echo get_template_directory_uri(); ?>/img/triangle-down-icon.svg" alt="">
                            <ul class="nav__sub-list">
                                <li>
                                    <a class="nav__sub-link" href="/facts.html">О нас</a>
                                </li>
                                <li>
                                    <a class="nav__sub-link" href="/documents.html">Документы</a>
                                </li>
                                <li>
                                    <a class="nav__sub-link" href="/career.html">Вакансии</a>
                                </li>
                                <li>
                                    <a class="nav__sub-link" href="/cooperator.html">Для сотрудников</a>
                                </li>
                                <li>
                                    <a class="nav__sub-link" href="/council.html">Для ЧНС</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">Наша афиша</a>
                            <img class="nav__arrow" src="<?php echo get_template_directory_uri(); ?>/img/triangle-down-icon.svg" alt="">
                            <ul class="nav__sub-list">
                                <li>
                                    <a class="nav__sub-link" href="/news.html">Новости</a>
                                </li>
                                <li>
                                    <a class="nav__sub-link" href="/poster.html">Афиша</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">Посетителям</a>
                            <img class="nav__arrow" src="<?php echo get_template_directory_uri(); ?>/img/triangle-down-icon.svg" alt="">
                            <ul class="nav__sub-list">
                                <li>
                                    <a class="nav__sub-link" href="/arena.html">Главная арена</a>
                                </li>
                                <li>
                                    <a class="nav__sub-link" href="/gyms.html">Тренировочные залы</a>
                                </li>
                                <li>
                                    <a class="nav__sub-link" href="/fitness-arena.html">Фитнес-арена</a>

                                </li>
                                <li>
                                    <a class="nav__sub-link" href="#">Гостиница</a>

                                </li>
                                <li>
                                    <a class="nav__sub-link" href="#">Кафе</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">Организаторам</a>
                            <img class="nav__arrow" src="<?php echo get_template_directory_uri(); ?>/img/triangle-down-icon.svg" alt="">
                            <ul class="nav__sub-list">
                                <li>
                                    <a class="nav__sub-link" href="">Аренда</a>
                                </li>
                                <li>
                                    <a class="nav__sub-link" href="/advertisers.html">Рекламодателям</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="/contacts.html">Контакты</a>
                        </li>
                    </ul>
                    <div class="user-actions">
                        <div class="user-actions__search">
                            <button class="user-actions__button">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/search-icon.svg" alt="">
                            </button>
                        </div>
                        <div class="user-actions__language">
                            <button class="user-actions__button">EN</button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/triangle-down-icon.svg" alt="">
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>