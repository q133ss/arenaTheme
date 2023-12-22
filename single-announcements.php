<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DivsArena
 */

get_header();
?>
<main class="main" id="main">
            <section class="news-discount">
    <div class="_container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__link">Главная</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="<?php echo get_permalink(65); ?>" class="breadcrumbs__link">Анонсы мероприятий</a>
            </li>
            <li class="breadcrumbs__item">
                <a class="breadcrumbs__link"><?php echo get_the_title(); ?></a>
            </li>
        </ul>
        <?php
        while ( have_posts() ) :
			the_post();
        ?>
        <div class="news-discount__inner">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_id(),'full'); ?>" alt="new-discount" />
            <div class="news-discount__content">
                <p class="news-discount__head"><?php echo get_the_date('d F Y'); ?></p>
                <h1 class="news-discount__title"><?php echo get_the_title(); ?></h1>
                <p class="news-discount__description">
                    <?php echo get_the_content(); ?>
                </p>
                <p class="news-discount__phone">
                    Подробности по телефону:
                    <a href="tel:+73433593773">+7 (343) 359-37-73.</a>
                </p>
            </div>
        </div>
    	<?php endwhile; ?>
    </div>
</section>
            <div class="news-events">
    <div class="_container">
        <div class="events__inner">
            <p class="events__head">В ДИ<span>ВСЕ ХИТЫ!</span></p>
            <div class="events__caption">
                <h1 class="events__name _title">Анонсы мероприятий</h1>
                <a class="events__button _button" href="#">Смотреть все анонсы</a>
            </div>
            <div class="events__content">
            	<?php
					$params = array(
						'post_type' => 'announcements', // тип постов - записи
						'posts_per_page' => 1,
						'orderby' => 'date', // сортировать по дате
						'order' => 'DESC', // по убыванию (сначала - свежие посты)
						'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
					);

					$announcements = get_posts($params);
					foreach ($announcements as $post):
                ?>
                <div class="preview">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <p class="preview__date"><?php echo get_the_date('d F Y, H:i'); ?></p>
                    <h3 class="preview__title _title-description"><?php echo get_the_title(); ?></h3>
                    <p class="preview__description"><?php echo get_the_excerpt(); ?></p>
                    <a class="preview__button _button-no-fill" href="<?php echo get_the_permalink(); ?>">Узнать подробнее</a>
                </div>
                <?php endforeach; ?>
                <ul class="preview-list">
                	<?php
						$params = array(
							'post_type' => 'announcements', // тип постов - записи
							'posts_per_page' => 4,
							'orderby' => 'date', // сортировать по дате
							'order' => 'DESC', // по убыванию (сначала - свежие посты)
							'offset'         => 1,
							'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
						);

						$announcements = get_posts($params);
						foreach ($announcements as $post):
	                ?>
                    <li class="preview-list__item">
                        <img src="<?php echo get_the_post_thumbnail_url($post, 'thumbnail'); ?>" alt="">
                        <div class="preview-list__info">
                            <p class="preview-list__date"><?php echo get_the_date('d F Y, H:i'); ?></p>
                            <h3 class="preview-list__title"><?php echo get_the_title(); ?></h3>
                            <p class="preview-list__description">
                                <?php echo get_the_excerpt(); ?> 
                            </p>
                            <a class="preview-list__button" href="<?php echo get_the_permalink(); ?>">Узнать подробнее</a>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
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
<?php
get_footer();
