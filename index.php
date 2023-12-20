<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DivsArena
 */

get_header();
?>

<main class="main" id="main">
            <section class="concert page-divs--concert">
    <div class="concert-slider">
        <button class="concert__prev">
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-prev.svg" alt="" />
        </button>
        <button class="concert__next">
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-next.svg" alt="" />
        </button>
        <div class="_container">
            <div class="concert__inner">
                <span class="concert__date">8 июля 2023</span>
                <h1 class="concert__title">Концерт группы КняZz</h1>
                <p class="concert__description">
                    Долгожданный концерт группы КняZz во Дворце игровых видов
                    спорта ДИВС
                </p>
                <a class="concert__button _button">
                    Узнать подробнее
                </a>
            </div>
            <ul class="concert-category">
                <li class="concert-category__item">
                    <a href="#" class="concert-category__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/concert-photo-1.png" alt="">
                        <p class="concert-category__name">Главная арена</p>
                        <div class="category-inner">
                            <a href="#" class="category-inner__button _button">Узнать подробнее</a>
                            <p class="category-inner__title">Фитнес- арена</p>
                        </div>
                    </a>
                </li>
                <a href="#" class="concert-category__link">
                    <li class="concert-category__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/concert-photo-2.png" alt="">
                        <p class="concert-category__name">Залы</p>
                        <div class="category-inner">
                            <a href="#" class="category-inner__button _button">Узнать подробнее</a>
                            <p class="category-inner__title">Залы</p>
                        </div>
                    </li>
                </a>
                <a href="#" class="concert-category__link">
                    <li class="concert-category__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/concert-photo-3.png" alt="">
                        <p class="concert-category__name">Фитнес- арена</p>
                        <div class="category-inner">
                            <a href="#" class="category-inner__button _button">Узнать подробнее</a>
                            <p class="category-inner__title">Фитнес- арена</p>
                        </div>
                    </li>
                </a>
                <a href="#" class="concert-category__link">
                    <li class="concert-category__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/concert-photo-4.png" alt="">
                        <p class="concert-category__name">DIVS-отель</p>
                        <div class="category-inner">
                            <a href="#" class="category-inner__button _button">Узнать подробнее</a>
                            <p class="category-inner__title _text-center">DIVS-отель</p>
                        </div>
                    </li>
                </a>
                <a href="#" class="concert-category__link">
                    <li class="concert-category__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/concert-photo-5.png" alt="">
                        <p class="concert-category__name">DIVS-кафе</p>
                        <div class="category-inner">
                            <a href="#" class="category-inner__button _button">Узнать подробнее</a>
                            <p class="category-inner__title">DIVS-кафе</p>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <!-- <div class="concert__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    </div> -->
</section>

            <section class="about-us">
    <img class="about-us__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <div class="about-us__inner">
            <img class="about-us__swab" src="<?php echo get_template_directory_uri(); ?>/img/swab.svg" alt="swab">
            <div class="about-us__photos">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-1.jpg" alt="" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-2.jpg" alt="" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-3.jpg" alt="" />
            </div>
            <div class="about-us__content">
                <p class="about-us__head">В ДИ<span>ВСЕ НА СПОРТЕ</span></p>
                <h1 class="about-us__title">Дворец ДИВС</h1>
                <p class="about-us__description">
                    Дворец игровых видов спорта впервые принял посетителей 11
                    июня 2003 года на приуроченном к открытию турнире по
                    волейболу на Кубок Первого Президента России Бориса Ельцина.
                    Дворец игровых видов спорта, во многом, уникальная арена,
                    построенная по оригинальному проекту австрийской компании
                    «Э. Фурман Баугезельшафт МБХ» всего за два года, стал
                    настоящей достопримечательностью центра города и прекрасно
                    вписался в ландшафт набережной реки Исеть.
                </p>
                <ul class="statistics">
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
                    <li class="statistics__item">
                        <span>35</span>
                        достижений и наград
                    </li>
                </ul>
                <a class="about-us__button _button" href="#" >
                    Узнать подробнее
                </a>
            </div>
        </div>
    </div>
</section>

            <section class="news">
    <img src="<?php echo get_template_directory_uri(); ?>/img/news-bg.webp" alt="news-bg" class="news__bg">
    <div class="_container">
        <div class="news__inner">
            <p class="news__head">В ДИ<span>ВСЕ НА СПОРТЕ</span></p>
            <div class="news__caption">
                <h1 class="news-name">Последние новости</h1>
                <a class="news__button _button" href="#">Смотреть все новости</a>
            </div>

            <ul class="slider">

				<?php
					$params = array(
						'post_type' => 'post', // тип постов - записи
						'numberposts' => 3, // получить 5 постов, можно также использовать posts_per_page
						'orderby' => 'date', // сортировать по дате
						'order' => 'DESC', // по убыванию (сначала - свежие посты)
						'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
					);

					$news = get_posts($params);
					foreach ($news as $post):
				?>
	                <li class="slider__item">
	                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
	                    <p class="slider__date"><?php echo get_the_date('d F Y'); ?></p>
	                    <h3 class="slider__title"><?php the_title(); ?></h3>
	                    <p class="slider__description"><?php echo get_the_excerpt(); ?></p>
	                    <a class="slider__button _button-no-fill" href="<?php echo get_the_permalink(); ?>">Узнать подробнее</a>
	                </li>
	            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
            <section class="main-arena">
    <div class="_container">
        <div class="main-arena__inner">
            <div class="main-arena__content">
                <div class="main-arena__info">
                    <p class="main-arena__head">В ДИ<span>ВСЕ НА СПОРТЕ</span></p>
                    <h1 class="main-arena__title">Главная спортивная арена</h1>
                    <ul class="statistics">
                        <li class="statistics__item">
                            <span>2 000</span>
                            вместимость танцпола
                        </li>
                        <li class="statistics__item">
                            <span>1 000 м²</span>
                            площадь игрового поля 
                        </li>
                        <li class="statistics__item">
                            <span>3 350</span>
                            посадочных мест
                        </li>
                    </ul>
                    <a class="main-arena__button _button" href="#" >
                        Узнать подробнее
                    </a>
                </div>
                <div class="video-player">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/main-arena-video.png" alt="">
                </div>
            </div>
            <div class="swiper main-arena__slider">

                <div class="swiper-wrapper">
                    <?php
						$params = array(
							'post_type' => 'main_gallery', // тип постов - записи
							'orderby' => 'date', // сортировать по дате
							'order' => 'DESC', // по убыванию (сначала - свежие посты)
							'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
						);

						$news = get_posts($params);
						foreach ($news as $post):
                    ?>
                    <div class="swiper-slide main-arena__item">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="main-arena-slider">
                    </div>
                    <?php endforeach; ?>
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



            <section class="rooms">
    <div class="_container">
        <div class="rooms__inner">
            <p class="rooms__head">В ДИ<span>ВСЕ НА ТРЕНИРОВКУ!</span></p>
            <div class="rooms__caption">
                <h1 class="rooms-name">Тренировочные залы</h1>
                <a class="rooms__button _button" href="#">Узнать подробнее</a>
            </div>

            <ul class="rooms-list">
                <li class="rooms-list__item">
                    <img class="rooms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/rooms-photo-1.jpg" alt="">
                    <h2 class="rooms-list__title _title-description">Большой и малый тренировочные залы</h2>
                    <a href="" class="rooms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
                <li class="rooms-list__item">
                    <img class="rooms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/rooms-photo-2.jpg" alt="">
                    <h2 class="rooms-list__title _title-description">Залы общей физической подготовки</h2>
                    <a href="" class="rooms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
                <li class="rooms-list__item">
                    <img class="rooms-list__image" src="<?php echo get_template_directory_uri(); ?>/img/rooms-photo-3.jpg" alt="">
                    <h2 class="rooms-list__title _title-description">Зал хореографии</h2>
                    <a href="" class="rooms-list__button _button-no-fill">Узнать подробнее</a>
                </li>
            </ul>
        </div>
    </div>
</section>
            <section class="gyms">
    <div class="_container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/arena-bg.webp" alt="gyms-bg" class="gyms__bg">
        <div class="gyms__inner">
            <div class="gyms__caption">
                <a class="gyms__button _button" href="#">Узнать подробнее</a>
                <div class="gyms__info">
                    <p class="gyms__head">В ДИ<span>ВСЕ НА ФИТНЕС!</span></p>
                    <h1 class="gyms-name">Фитнес-арена</h1>
                </div>
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
            </ul>
        </div>
    </div>
</section>
            <section class="hotel">
    <div class="_container">
        <div class="hotel__inner">
        <img class="hotel__swab" src="<?php echo get_template_directory_uri(); ?>/img/swab.svg" alt="swab">
            <div class="hotel__content">
                <div class="hotel__photos">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hotel-1.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hotel-2.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hotel-3.png" alt="" />
                </div>
                <div class="hotel__info">
                    <p class="hotel__head">В ДИ<span>ВСЕ ОТДЫХАТЬ!</span></p>
                    <h1 class="hotel__title">DIVS-Hotel</h1>
                    <p class="hotel__description">
                        Номерной фонд гостиницы "ДИВС" включает 27 гостевых номеров категорий Эконом, Стандарт (с балконом и без)и Апартаменты "ЛЮКС" с панорамным видом на набережную р. Исеть и центр города и собственной террасой.DIVS Hotel расположен в историческом центре Екатеринбурга, в шаговой доступности от деловых, культурных, развлекательных объектов, достопримечательностей и музеев. Номера предназначены как для индивидуальных путешественников, семейного отдыха, так и для деловых туристов.
                    </p>
                    <ul class="statistics">
                        <li class="statistics__item">
                            <span>24/7</span>
                            обслуживание в отеле
                        </li>
                        <li class="statistics__item">
                            <span>27</span>
                            гостевых номеров
                        </li>
                        <li class="statistics__item">
                            <span>25</span>
                            основных мест
                        </li>
                        <li class="statistics__item">
                            <span>35</span>
                            дополнительных мест
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="hotel-slider">
                <li class="hotel-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hotel-slider-1.png" alt="">
                    <h2 class="hotel-slider__title _description">Номер “Эконом”</h2>
                    <button class="hotel-slider__button _button-no-fill">Узнать подробнее</button>
                </li>
                <li class="hotel-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hotel-slider-2.png" alt="">
                    <h2 class="hotel-slider__title _description">Номер “Эконом+”</h2>
                    <button class="hotel-slider__button _button-no-fill">Узнать подробнее</button>
                </li>
                <li class="hotel-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hotel-slider-3.png" alt="">
                    <h2 class="hotel-slider__title _description">Номер “Стандарт”</h2>
                    <button class="hotel-slider__button _button-no-fill">Узнать подробнее</button>
                </li>
                <li class="hotel-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hotel-slider-4.png" alt="">
                    <h2 class="hotel-slider__title _description">Номер “Люкс”</h2>
                    <button class="hotel-slider__button _button-no-fill">Узнать подробнее</button>
                </li>
            </ul>
        </div>
    </div>
</section>
            <section class="events">
    <div class="_container">
        <div class="events__inner">
            <p class="events__head">В ДИ<span>ВСЕ ХИТЫ!</span></p>
            <div class="events__caption">
                <h1 class="events-name _title">Анонсы мероприятий</h1>
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

<?php
get_footer();
