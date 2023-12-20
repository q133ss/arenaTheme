<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DivsArena
 */

?>

<footer class="footer">
    <img class="footer__bg" src="<?php echo get_template_directory_uri(); ?>/img/footer-image.png" alt="" />
    <div class="_container">
        <div class="footer__inner">
            <nav class="footer__menu">
                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="footer-logo" />
                <ul class="footer-list">
                    <li class="footer-list__item">
                        <p class="footer-list__name">Арена</p>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">О нас</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Документы</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Вакансии</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#"
                            >Для сотрудников</a
                        >
                    </li>
                </ul>
                <ul class="footer-list">
                    <li class="footer-list__item">
                        <p class="footer-list__name">Афиша</p>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Новости ДИВС</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#"
                            >Анонсы программ</a
                        >
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#"
                            >Правила поведения для зрителей</a
                        >
                    </li>
                </ul>
                <ul class="footer-list">
                    <li class="footer-list__item">
                        <p class="footer-list__name">Посетителям</p>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Главная арена</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#"
                            >Тренировочные залы</a
                        >
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Фитнес-арена</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Гостиница</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Кафе</a>
                    </li>
                </ul>
                <ul class="footer-list">
                    <li class="footer-list__item">
                        <p class="footer-list__name">Организаторам</p>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Аренда</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#"
                            >Выставочные пространства</a
                        >
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#"
                            >Бизнес пространства</a
                        >
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#"
                            >Спортивные арены</a
                        >
                    </li>
                    <li class="footer-list__item">
                        <a class="footer-list__link" href="#">Рекламодателям</a>
                    </li>
                </ul>
            </nav>
            <div class="footer-info">
                <ul class="footer-policy">
                    <li class="footer-policy__item">
                        <a class="footer-policy__link" href="#"
                            >Противодействие коррупции</a
                        >
                    </li>
                    <li class="footer-policy__item">
                        <a class="footer-policy__link" href="#"
                            >Политика Конфиденциальности</a
                        >
                    </li>
                    <li class="footer-policy__item">
                        <a class="footer-policy__link" href="#"
                            >Информация для потребителей</a
                        >
                    </li>
                </ul>
                <p class="footer-info__description">
                    Вышестоящая организация - Министерство физической культуры и
                    спорта Свердловской области
                </p>
            </div>
        </div>
    </div>
</footer>

    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
