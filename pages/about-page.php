<?php
/* Template Name: AboutPage */
get_header();
?>
        <main class="main" id="main">
            <section class="facts page-divs--facts">
    <div class="_container">
        <div class="facts__inner">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="/index.html" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link">О нас</a>
                </li>
            </ul>
            <h1 class="facts__title"><span>В ДИ</span>ВСЕ ФАКТЫ</h1>
        </div>
    </div>
</section>
            <section class="facts-arena">
    <img class="facts-arena__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <ul class="facts-arena__list _category-list">
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Об арене</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Руководство</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Награды</a>
            </li>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="#">Благодарности</a>
            </li>
        </ul>
        <div class="facts-arena__inner">
            <div class="facts-arena__wrapper">
                <img class="facts-arena__swab" src="<?php echo get_template_directory_uri(); ?>/img/swab.svg" alt="swab">
                <div class="facts-arena__photos">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-1.jpg" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-2.jpg" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-us-3.jpg" alt="" />
                </div>
                <div class="facts-arena__content">
                    <p class="facts-arena__head">В ДИ<span>ВСЕ ФАКТЫ</span></p>
                    <h1 class="facts-arena__title">Арена</h1>
                    <p class="facts-arena__description">
                        <span>Дворец игровых видов спорта – это многофункциональное спортивное сооружение, именно здесь проходят самые яркие и важные спортивные 
                        и политические, музыкальные и деловые события Свердловской области.</span></p>
                    <p class="facts-arena__description">
                        Во Дворце игровых видов спорта возможно <span>проведение соревнований более чем по 60 видам спорта.</span> Имеются также универсальные <span>тренировочные залы, площадью более 1500 кв.м.,</span> Фитнес – Арена, которая включает в себя тренажёрный зал, залы для групповых программ, гостиница <span>«ДИВС-Отель» c номерным фондом на 27 номеров</span> разных категорий: от 2-х уровневых апартаментов «Люкс» до номеров категории «Эконом».    
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

            <div class="facts-list">
                <p class="facts-list__text">Дворец Игровых видов спорта – является одной из крупнейших спортивных площадок Урало-Сибирского региона вместимостью до 5000 зрителей, в качестве основной площадки ДИВС используется следующими спортивными клубами:</p>
                <ul class="facts-list__icons">
                    <li class="facts-list__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/facts-history-icon-1.png" alt="">
                        <p class="facts-list__name">Мини-футбольный клуб «Синара»</p>
                    </li>
                    <li class="facts-list__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/facts-history-icon-2.png" alt="">
                        <p class="facts-list__name">Женский баскетбольный клуб «УГМК»</p>
                    </li>
                    <li class="facts-list__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/facts-history-icon-3.png" alt="">
                        <p class="facts-list__name">Женский волейбольный  клуб «Уралочка-НТМК»</p>
                    </li>
                    <li class="facts-list__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/facts-history-icon-4.png" alt="">
                        <p class="facts-list__name">Баскетбольный клуб «Уралмаш»</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

            <section class="facts-history">
    <div class="_container">
        <div class="facts-history__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/facts-history-bg.png" alt="">
            <h1 class="facts-history__title">НЕМНОГО ИСТОРИИ</h1>
            <p class="facts-history__text">Дворец игровых видов спорта <span>впервые принял посетителей 11 июня 2003</span> года на приуроченном к открытию турнире по волейболу на Кубок Первого Президента России Бориса Ельцина. Дворец игровых видов спорта, во многом, уникальная арена, построенная по оригинальному проекту австрийской компании «Э. Фурман Баугезельшафт МБХ» всего за два года, стал настоящей достопримечательностью центра города и прекрасно вписался в ландшафт набережной реки Исеть.</p>
            <p class="facts-history__text"><span>С момента закладки первого камня в основание будущего дворца (15 июня 2001 года)</span> до завершения строительства прошло всего два года.Здание построено по уникальному проекту, которому нет аналогов в России. Купол дворца представляет собой эллипс с осями 68 и 84 метра, высота всего здания - 29,2 м, высота зрительного зала — 21 м.</p>
            <div class="facts-history__photos">
                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-history-photo-1.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-history-photo-2.png" alt="">
            </div>
            <p class="facts-history__text">Функциональная направленность спортивного комплекса ориентирована на проведение матчей по паркетным видам спорта (волейбол, баскетбол, мини-футбол, индорхоккей и др.), а также соревнований в личных и командных первенствах (бокс, единоборства, спортивная и художественная гимнастика, спортивные танцы и др.). Кроме того, ДИВС успешно проводит на своих площадках и прилегающей территории культурно-массовые мероприятия (концерты, шоу, фестивали, выставки, ярмарки и др.).</p>
            <p class="facts-history__text"><span>В июле 2006 года была введена в эксплуатацию вторая очередь ДИВСа (блок «Б»),</span> в которой расположились тренировочные залы, гостиница, тренажерный зал, кафе, административный корпус. На одной из стен тренировочного зала был установлен современный скалодром «Вертикаль ДИВСа» высотой 15 метров.</p>
        </div>
    </div>
</section>
            <section class="facts-events">
    <div class="_container">
        <div class="facts-events__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/facts-events-bg.png" alt="">
            <h1 class="facts-events__title">ПРОВЕДЕННЫЕ МЕРОПРИЯТИЯ</h1>
            <p class="facts-events__text">За прошедшие годы ДИВС приобрел колоссальный опыт в проведении всевозможных мероприятий: от детских соревнований до Чемпионатов мирового уровня, от корпоративных мероприятий до крупномасштабных выставок. Возможности трансформации площадки поражают воображение, а список проведенных мероприятий огромен, вот лишь малая часть из прошедших в ДИВСе спортивных и культурных событий:</p>
            <div class="facts-blocks">
                <div class="facts-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-photo.png" alt="facts-block-photo">
                    <div class="facts-block__content">
                        <h3 class="facts-block__name">Спортивные события</h3>
                        <ul class="facts-block__list">
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">Финал Кубка УЕФА по мини-футболу</p>
                            </li>
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">Международные турниры по волейболу среди женских команд на Кубок Первого Президента России Б.Н. Ельцина</p>
                            </li>
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">Международные турниры по профессиональному боксу и ММА, организуемые промоутерской компанией «RCC Boxing Promotions»</p>
                            </li>
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">Международные турниры по спортивным бальным танцам «Кубок ЕВРОПА-АЗИЯ»</p>
                            </li>
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">«Финал восьми» женской Евролиги по баскетболу</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="facts-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-photo-2.png" alt="facts-block-photo">
                    <div class="facts-block__content">
                        <h3 class="facts-block__name">Культурно-массовые мероприятия</h3>
                        <ul class="facts-block__list">
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">Музыкальный фестиваль «Уральская Ночь Музыки»</p>
                            </li>
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">Молодежный экстрим-фест «Все реально!»</p>
                            </li>
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">Шоу «Цирк дю Солей Рус»</p>
                            </li>
                            <li class="facts-block__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/facts-block-mark.svg" alt="mark">
                                <p class="facts-block__text">Концерты звезд мировой и отечественной эстрады (Мирей Матье, Супердискотека 90-х, BLUE MAN GROUP, шоу «Песни», HURTS, БИ-2)</p>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <section class="facts-admins">
    <div class="_container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/facts-admins-bg.png" alt="facts-admins-bg" class="facts-admins__bg">
        <div class="facts-admins__inner">
            <div class="facts-admins__caption">
                <div class="facts-admins__info">
                    <p class="facts-admins__head">В ДИ<span>ВСЕ РУКОВОДИТЕЛИ</span></p>
                    <h1 class="facts-admins-name">Администрация арены</h1>
                </div>
            </div>
            <ul class="admins-list">
                <?php
                    $params = array(
                        'post_type' => 'managers', // тип постов - записи
                        'posts_per_page' => 6,
                        'orderby' => 'date', // сортировать по дате
                        'order' => 'DESC', // по убыванию (сначала - свежие посты)
                        'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
                    );

                    $managers = get_posts($params);
                    foreach ($managers as $post):
                ?>
                <li class="admins-list__item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="facts-admins-photo">
                    <h2 class="admins-list__title"><?php echo get_the_title(); ?></h2>
                    <p class="admins-list__rang"><?php echo get_the_excerpt(); ?></p>
                    <a class="admins-list__button _button-no-fill" href="#">Связаться с директором</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
            <section class="facts-awards">
    <div class="_container">
        <div class="facts-awards__inner">
            <p class="facts-awards__head">В ДИ<span>ВСЕ ДОСТИЖЕНИЯ</span></p>
            <div class="facts-awards__caption">
                <h1 class="facts-awards-name">Награды</h1>
                <p class="facts-awards__description">Дворец игровых видов спорта «Уралочка» является членом Ассоциации предприятий спортивной индустрии России. Лауреат всероссийской премии SportsFacilities в номинации «Лучший многофункциональный спортивный объект».</p>
            </div>
            <ul class="facts-awards__list">
                <?php
                    $params = array(
                        'post_type' => 'awards', // тип постов - записи
                        'posts_per_page' => -1,
                        'orderby' => 'date', // сортировать по дате
                        'order' => 'DESC', // по убыванию (сначала - свежие посты)
                        'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
                    );

                    $awards = get_posts($params);
                    foreach ($awards as $post):
                ?>
                <li class="facts-awards__item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="facts-awards-photo">
                    <p class="facts-awards__text"><?php echo get_the_title(); ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
            <section class="facts-letters">
    <div class="_container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/facts-letters-bg.png" alt="facts-letters-bg" class="facts-letters__bg">
        <div class="facts-letters__inner">
            <div class="facts-letters__caption">
                <div class="facts-letters__info">
                    <p class="facts-letters__head">В ДИ<span>ВСЕ БЛАГОДАРОНОСТИ</span></p>
                    <h1 class="facts-letters-name">Благодарности</h1>
                </div>
            </div>
            <ul class="letters-slider">
                <?php
                    $params = array(
                        'post_type' => 'thanks', // тип постов - записи
                        'posts_per_page' => -1,
                        'orderby' => 'date', // сортировать по дате
                        'order' => 'DESC', // по убыванию (сначала - свежие посты)
                        'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
                    );

                    $thanks = get_posts($params);
                    foreach ($thanks as $post):
                ?>
                <li class="letters-slider__item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <h3 class="letters-slider__title"><?php echo get_the_title(); ?> </h3>
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