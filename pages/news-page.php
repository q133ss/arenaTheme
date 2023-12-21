<?php
/* Template Name: NewsPage */
get_header();
?>
        <main class="main" id="main">
            <section class="news-main page-divs--news-main">
    <div class="_container">
        <div class="news-main__inner">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link">Новости</a>
                </li>
            </ul>
            <h1 class="facts__title"><span>В ДИ</span>ВСЕ НОВОСТИ</h1>
        </div>
    </div>
</section>

            <section class="all-news">
    <img class="all-news__bg" src="<?php echo get_template_directory_uri(); ?>/img/concert-botttom-bg.png" alt="">
    <div class="_container">
        <div class="all-news__box">
            <div class="box-text">
                <p>Будьте в курсе всего!</p>
                <p>Подпишитесь на новости ДИВС</p>
            </div>
            <form class="all-news__form" action="#">
                <input type="text" id="sub_name" name="name" placeholder="Ваше имя">
                <input type="email" id="sub_email" name="email" placeholder="Ваш email">
                <button type="button" class="advantage__button _button" onclick="sub()">Подписаться</button>
            </form>
        </div>
        <div class="all-news__content">
            <ul class="_grid" id="newsWrap">
                <?php
                query_posts('posts_per_page=6');
                while (have_posts()) : the_post();
                ?>
                <li class="grid__item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <p class="grid__date"><?php echo get_the_date('d F Y'); ?></p>
                    <h3 class="grid__title"><?php echo get_the_title(); ?></h3>
                    <p class="grid__description"><?php echo get_the_excerpt(); ?></p>
                    <a class="grid__button _button-no-fill" href="<?php echo get_the_permalink(); ?>">Узнать подробнее</a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $max_pages = $wp_query->max_num_pages;
                if ($paged < $max_pages) {
            ?>
            <button onclick="loadMore('<?php echo $max_pages; ?>', '<?php echo $paged; ?>')" id="loadBtn" class="all-news__button _button">Загрузить еще</button>
            <?php 
                }
                wp_reset_query();
            ?>
        </div>
    </div>
</section>

        </main>

<script>
    function loadMore(maxPages, paged){
            let button = jQuery('#loadBtn');
            jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    paged: paged,
                    action: 'loadmore'
                },
                beforeSend: function (xhr) {
                    button.text('Загрузка...');
                },
                success: function (data) {
                    button.removeClass('border_none');
                    paged++;
                    jQuery('#newsWrap').append(data);
                    button.text('Загрузить ещё');
                    if (paged == maxPages) {
                        button.remove();
                    }
                }
            });
    }

function sub(){
    let name = jQuery('#sub_name').val();
    let email = jQuery('#sub_email').val();
    let errors = '';
    if(name === ''){
        errors = 'Введите имя';
        alert(errors)
    }
    if(email === ''){
        errors = 'Введите Email';
        alert(errors)
    }

    if(errors == ''){
        jQuery.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: {
                name: name,
                email: email,
                action: 'subscribe'
            },
            success: function (data) {
                jQuery('.all-news__form').html("<p style='color:#fff'>Вы успешно подписаны!</p>")
            }
        });
    }
}
</script>

<?php get_footer(); ?>