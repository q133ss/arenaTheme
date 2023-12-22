<?php
/* Template Name: Рекламодателям */
get_header();
?>
<main class="main" id="main">
            <section class="advertisers-section">
    <div class="_container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/index.html" class="breadcrumbs__link">Главная</a>
            </li>
            <li class="breadcrumbs__item">
                <a class="breadcrumbs__link">Рекламодателям</a>
            </li>
        </ul>
        <div class="advertisers-section__inner">
            <p class="advertisers-section__head _sub-title">В ДИ<span>ВСЕ ПРИЛОЖЕНИЯ!</span></p>
            <h1 class="advertisers-section__title _title">РЕКЛАМОДАТЕЛЯМ</h1>
            <ul class="advertisers-section__items _grid">
                <?php
					$params = array(
						'post_type' => 'adv', // тип постов - записи
						'numberposts' => -1, // получить 5 постов, можно также использовать posts_per_page
						'orderby' => 'date', // сортировать по дате
						'order' => 'DESC', // по убыванию (сначала - свежие посты)
						'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
					);

					$news = get_posts($params);
					foreach ($news as $post):
				?>
                <li class="advertisers-section__item grid__item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <p class="grid__date"><?php echo get_the_date('d F Y'); ?></p>
                    <h3 class="grid__title"><?php echo get_the_title(); ?></h3>
                    <p class="grid__description"><?php echo get_the_excerpt(); ?></p>
                    <a class="grid__button _button-no-fill" href="<?php echo get_the_permalink(); ?>">Узнать подробнее</a>
                </li>
                <?php endforeach; ?>
            </ul>
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