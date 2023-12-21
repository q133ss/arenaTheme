<?php
/* Template Name: ObserversPage */
get_header();
?>

        <main class="main" id="main">
            <section class="council-main page-divs--council">
    <div class="_container">
        <div class="council-main__inner">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="/index.html" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link">Для членов наблюдательного совета</a>
                </li>
            </ul>
            <h1 class="council-main__title">ДЛЯ ЧЛЕНОВ НАБЛЮДАТЕЛЬНОГО СОВЕТА</h1>
        </div>
    </div>
</section>
            <section class="cooperator-documents">
    <img class="cooperator-documents__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <div class="cooperator-documents__box _category-list">
            <a class="cooperator-documents__item _button-no-fill" href="#">Общие документы</a>
            <a class="cooperator-documents__item _button-no-fill" href="#">Другие документы</a>
        </div>
        <div class="cooperator-documents__inner">
            <h1 class="cooperator-documents__title _title-description">ОБЩИЕ ДОКУМЕНТЫ</h1>
            <div class="cooperator-documents__content">
                <ul class="cooperator-documents-list">
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Какой-то документ 1</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Памятка 1</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Какой-то документ 2</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Памятка 1</p>
                    </li>
                    <li class="cooperator-documents-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/documents-org-icon.svg" alt="cooperator-documents-icon">
                        <p class="cooperator-documents-list__text">Какой-то документ 3</p>
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