<?php
/* Template Name: Анонсы мероприятий */
get_header(); ?>
        <main class="main" id="main">
            <section class="poster-main page-divs--poster-main">
    <!-- <img class="poster-main__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt=""> -->
    <div class="poster-main-slider">
        <button class="concert__prev">
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-prev.svg" alt="" />
        </button>
        <button class="concert__next">
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-next.svg" alt="" />
        </button>
        <div class="_container">
            <div class="poster-main__inner">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="/index.html" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__link">Афиша</a>
                    </li>
                </ul>
                <h1 class="poster-main__title">КОНЦЕРТ ГРУППЫ КНЯZZ</h1>
                <p class="poster-main__description">
                    Долгожданный концерт группы КняZz во Дворце игровых видов
                    спорта ДИВС
                </p>
                <a class="poster-main__button _button">
                    Узнать подробнее
                </a>
            </div>

        </div>

    </div>
    <!-- <div class="concert__bg">
    </div> -->
</section>

            <section class="poster-events">
    <img class="poster-events__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <ul class="poster-events__list _category-list">
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="<?php echo get_permalink(); ?>">Все события</a>
            </li>
            <?php
            	$taxonomy = 'category'; // Замените 'category' на название вашей таксономии

				$terms = get_terms(array(
				    'taxonomy' => $taxonomy,
				    'hide_empty' => false, // true, чтобы скрыть категории без записей
				    'exclude'    => [1],
				    'orderby'    => 'id'
				));

				if (!empty($terms) && !is_wp_error($terms)) {
			    foreach ($terms as $term) {
            ?>
            <li class="category-list__item">
                <a class="category-list__link _button-no-fill" href="<?php echo add_query_arg('cat', $term->term_id, get_permalink()); ?>"><?php echo $term->name; ?></a>
            </li>
            <?php }} ?>
        </ul>
        <p class="poster-events__head _title-description">В ДИ<span>ВСЕ ХИТЫ!</span></p>
        <h1 class="poster-events__title _title">Анонсы мероприятий</h1>
        <div class="poster-events__content">
            <ul class="poster-events__items _grid" id="announceWrap">
            	<?php
						$params = array(
							'post_type' => 'announcements', // тип постов - записи
							'posts_per_page' => 9,
							'orderby' => 'date', // сортировать по дате
							'order' => 'DESC', // по убыванию (сначала - свежие посты)
							'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
						);

						if(isset($_GET['cat'])){
							$params['tax_query'] = array(
						        array(
						            'taxonomy' => 'category', // Замените 'category' на вашу таксономию
						            'field'    => 'id',
						            'terms'    => $_GET['cat'],
						        ),
						    );
						}
						query_posts($params);
                		while (have_posts()) : the_post();
	                ?>
                <li class="poster-events__item grid__item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <p class="grid__date"><?php echo get_the_date('d F Y'); ?></p>
                    <h3 class="grid__title"><?php echo get_the_title(); ?></h3>
                    <p class="grid__description"><?php echo get_the_content(); ?></p>
                    <a class="grid__button _button-no-fill" href="<?php echo get_the_permalink(); ?>">Узнать подробнее</a>
                </li>
                <?php endwhile;?>
            </ul>
            <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $max_pages = $wp_query->max_num_pages;
                if ($paged < $max_pages) {
            ?>
            <button id="loadBtn" class="all-news__button _button" onclick="loadMore('<?php echo $max_pages; ?>')">Загрузить еще</button>
            <?php 
                }
                wp_reset_query();
            ?>
        </div>
    </div>
</section>
        </main>

<script>

	let paged = <?php echo $paged; ?>
	
	function loadMore(maxPages){
            let button = jQuery('#loadBtn');
            let cat = <?php $cat = isset($_GET['cat']) ? $_GET['cat'] : 0; echo $cat; ?>;


            jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    paged: paged,
                    cat: cat,
                    action: 'loadmoreAnnouncements'
                },
                beforeSend: function (xhr) {
                    button.text('Загрузка...');
                },
                success: function (data) {
                    button.removeClass('border_none');
                    paged++;
                    jQuery('#announceWrap').append(data);
                    button.text('Загрузить ещё');
                    if (paged == maxPages) {
                        button.remove();
                    }
                }
            });
    }

</script>

<?php get_footer(); ?>