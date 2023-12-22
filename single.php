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
            <div class="ticket">
    <div class="_container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__link">Главная</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="<?php echo get_permalink(59); ?>" class="breadcrumbs__link">Новости</a>
            </li>
            <li class="breadcrumbs__item">
                <a class="breadcrumbs__link"><?php echo get_the_title(); ?></a>
            </li>
        </ul>
        <?php
        while ( have_posts() ) :
			the_post();
        ?>
        <p class="ticket__head"><?php echo get_the_date('d F Y'); ?></p>
        <h1 class="ticket__title"><?php echo get_the_title(); ?></h1>
        <div class="ticket__inner">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="ticket-photo" />
            <div class="ticket__content">
                <p class="ticket__description">
                    <?php echo get_the_content(); ?>
                </p>
            </div>
        </div>
    	<?php endwhile; ?>
    <div class="ticket__link">
            <a href="#">Правила поведения для зрителей</a>
        </div>
    </div>
</div>
</main>
<?php
get_footer();
