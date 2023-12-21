<?php
/* Template Name: ForStuffPage */
get_header();
?>
                        <main class="main" id="main">
            <section class="cooperator-main page-divs--cooperator">
    <div class="_container">
        <div class="cooperator-main__inner">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="/index.html" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link">Для сотрудников</a>
                </li>
            </ul>
            <h1 class="cooperator-main__title">ДЛЯ СОТРУДНИКОВ</h1>
        </div>
    </div>
</section>
            <section class="cooperator-documents">
    <img class="cooperator-documents__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <ul class="cooperator-documents__list _category-list">
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Все события</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Спорт</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Концерты</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Выставки</a>
            </li>
        </ul>
        <div class="cooperator-documents__inner">
            <h1 class="cooperator-documents__title _title-description">ОБЩИЕ ДОКУМЕНТЫ ДЛЯ СОТРУДНИКОВ</h1>
            <div class="cooperator-documents__content">
                <ul class="cooperator-documents-list">
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Правила внутреннего трудового распорядка</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Памятка 1</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Телефонный справочник</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Памятка 1</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Решения совета трудового коллектива</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Памятка 1</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
            <section class="important-documents">
    <div class="_container">
        <div class="important-documents__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/corruption-bg.png" alt="">
            <h1 class="corruption__title">ПРОТИВОДЕЙСТВИЕ КОРРУПЦИИ</h1>
            <ul class="important-documents__items">
                <li class="important-documents__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="important-documents-icon">
                    <p class="important-documents__text">Приказы о составе совета</p>
                </li>
                <li class="important-documents__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="important-documents-icon">
                    <p class="important-documents__text">Решение совета 1</p>
                </li>
                <li class="important-documents__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="important-documents-icon">
                    <p class="important-documents__text">Регламент работы совета</p>
                </li>
                <li class="important-documents__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="important-documents-icon">
                    <p class="important-documents__text">Решение совета 1</p>
                </li>
            </ul>
        </div>
    </div>
</section>
        </main>
<?php get_footer(); ?>