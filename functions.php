<?php
/**
 * DivsArena functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DivsArena
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function divsarena_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on DivsArena, use a find and replace
		* to change 'divsarena' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'divsarena', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'divsarena' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'divsarena_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'divsarena_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function divsarena_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'divsarena_content_width', 640 );
}
add_action( 'after_setup_theme', 'divsarena_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function divsarena_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'divsarena' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'divsarena' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'divsarena_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function divsarena_scripts() {
	wp_enqueue_style( 'divsarena-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'divsarena-style', 'rtl', 'replace' );

	wp_enqueue_script( 'divsarena-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'divsarena_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Jquery
wp_enqueue_script("jquery");

//CPT

add_action( 'init', 'register_main_gallery_types' );

function register_main_gallery_types(){

	register_post_type( 'main_gallery', [
		'label'  => null,
		'labels' => [
			'name'               => 'main_gallery', // основное название для типа записи
			'singular_name'      => 'main_gallery', // название для одной записи этого типа
			'add_new'            => 'Добавить фото', // для добавления новой записи
			'add_new_item'       => 'Добавление фото', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование фото', // для редактирования типа записи
			'new_item'           => 'Новое фото', // текст новой записи
			'view_item'          => 'Смотреть фото', // для просмотра записи этого типа.
			'search_items'       => 'Искать фото', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Галлерея на главной', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}


add_action( 'init', 'register_announcements_types' );

function register_announcements_types(){

	register_post_type( 'announcements', [
		'label'  => null,
		'labels' => [
			'name'               => 'announcements', // основное название для типа записи
			'singular_name'      => 'announcements', // название для одной записи этого типа
			'add_new'            => 'Добавить анонс', // для добавления новой записи
			'add_new_item'       => 'Добавление анонса', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование анонса', // для редактирования типа записи
			'new_item'           => 'Новый анонс', // текст новой записи
			'view_item'          => 'Смотреть анонс', // для просмотра записи этого типа.
			'search_items'       => 'Искать анонс', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Анонсы мероприятий', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'excerpt', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['category'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}


add_action( 'init', 'register_managers_types' );

function register_managers_types(){

	register_post_type( 'managers', [
		'label'  => null,
		'labels' => [
			'name'               => 'managers', // основное название для типа записи
			'singular_name'      => 'managers', // название для одной записи этого типа
			'add_new'            => 'Добавить руководителя', // для добавления новой записи
			'add_new_item'       => 'Добавление руководителя', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование руководителя', // для редактирования типа записи
			'new_item'           => 'Новый руководитель', // текст новой записи
			'view_item'          => 'Смотреть руководителя', // для просмотра записи этого типа.
			'search_items'       => 'Искать руководителя', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Руководители', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'excerpt', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}


add_action( 'init', 'register_awards_types' );

function register_awards_types(){

	register_post_type( 'awards', [
		'label'  => null,
		'labels' => [
			'name'               => 'awards', // основное название для типа записи
			'singular_name'      => 'awards', // название для одной записи этого типа
			'add_new'            => 'Добавить награду', // для добавления новой записи
			'add_new_item'       => 'Добавление награды', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование награды', // для редактирования типа записи
			'new_item'           => 'Новая награда', // текст новой записи
			'view_item'          => 'Смотреть награду', // для просмотра записи этого типа.
			'search_items'       => 'Искать награду', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Награды', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

add_action( 'init', 'register_thanks_types' );

function register_thanks_types(){

	register_post_type( 'thanks', [
		'label'  => null,
		'labels' => [
			'name'               => 'thanks', // основное название для типа записи
			'singular_name'      => 'thanks', // название для одной записи этого типа
			'add_new'            => 'Добавить благодарность', // для добавления новой записи
			'add_new_item'       => 'Добавление благодарности', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование благодарности', // для редактирования типа записи
			'new_item'           => 'Новая благодарность', // текст новой записи
			'view_item'          => 'Смотреть благодарности', // для просмотра записи этого типа.
			'search_items'       => 'Искать благодарности', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Благодарности', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}


// AjaxLoadPosts
add_action('wp_ajax_loadmore', 'true_loadmore');
add_action('wp_ajax_nopriv_loadmore', 'true_loadmore');
function true_loadmore()
{
    $paged = !empty($_POST['paged']) ? $_POST['paged'] : 1;
    $paged++;
    $args = array('posts_per_page' => 6, 'paged' => $paged);
    query_posts($args);
 
    while (have_posts()) : the_post();
    ?>
    <li class="grid__item">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <p class="grid__date"><?php echo get_the_date('d F Y'); ?></p>
        <h3 class="grid__title"><?php echo get_the_title(); ?></h3>
        <p class="grid__description"><?php echo get_the_excerpt(); ?></p>
        <a class="grid__button _button-no-fill" href="<?php echo get_the_permalink(); ?>">Узнать подробнее</a>
    </li>
    <?php
    endwhile;
    die;
}


//loadmore Announcements
add_action('wp_ajax_loadmoreAnnouncements', 'true_loadmoreAnnouncements');
add_action('wp_ajax_nopriv_loadmoreAnnouncements', 'true_loadmoreAnnouncements');
function true_loadmoreAnnouncements()
{
    $paged = !empty($_POST['paged']) ? $_POST['paged'] : 1;
    $paged++;

    $cat = $_GET['cat'];


    $params = array(
		'post_type' => 'announcements', // тип постов - записи
		'posts_per_page' => 9,
		'orderby' => 'date', // сортировать по дате
		'order' => 'DESC', // по убыванию (сначала - свежие посты)
		'suppress_filters' => true, // 'posts_*' и 'comment_feed_*' фильтры игнорируются
		'paged' => $paged
	);

	if($cat != 0){
		$params['tax_query'] = array(
	        array(
	            'taxonomy' => 'category', // Замените 'category' на вашу таксономию
	            'field'    => 'id',
	            'terms'    => $cat,
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
    <?php
    endwhile;
    die;
}






//Ajax subscribe
add_action('wp_ajax_subscribe', 'true_subscribe');
add_action('wp_ajax_nopriv_subscribe', 'true_subscribe');
function true_subscribe()
{
	global $wpdb;
    $name = !empty($_POST['name']) ? $_POST['name'] : '';
    $email = $_POST['email'];

    if (!empty($email)) {
    $table_name = $wpdb->prefix . 'subscribes';

    $data = array(
        'name'  => $name,
        'email' => $email,
    );

    $format = array('%s', '%s');

    // Вставляем данные в таблицу
    $wpdb->insert($table_name, $data, $format);

    // Получаем ID вставленной записи
    $inserted_id = $wpdb->insert_id;

	} else {
	    // Выводим сообщение, если переменные $name или $email пусты
	    echo "Ошибка: Переменные name или email пусты.";
	}

    die;
}


//Delta

function create_subscribes_table(){
	global $wpdb;

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';

	$table_name = $wpdb->get_blog_prefix() . 'subscribes';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE {$table_name} (
	id  bigint(20) unsigned NOT NULL auto_increment,
	email varchar(255) NOT NULL,
	name varchar(255) NOT NULL default '',
	created_at dateTime NOT NULL default NOW(),
	PRIMARY KEY  (id)
	)
	{$charset_collate};";

	dbDelta($sql);
}

create_subscribes_table();


// News Subscribes page in admin

// Добавляем страницу в админку
function custom_subscribers_page() {
    add_menu_page(
        'Подписчики на новости',
        'Подписчики на новости',
        'manage_options',
        'subscribers_page',
        'render_subscribers_page',
        'dashicons-admin-users',
        30
    );
}
add_action('admin_menu', 'custom_subscribers_page');

// Рендеринг страницы
function render_subscribers_page() {
    ?>
    <div class="wrap">
        <h2>Subscribers</h2>
        <?php
        // Выводим таблицу данных
        $subscribers_table = new Subscribers_Table();
        $subscribers_table->prepare_items();
        $subscribers_table->display();
        ?>
    </div>
    <?php
}

// Класс для работы с таблицей данных
class Subscribers_Table extends WP_List_Table {
	public function __construct() {
        parent::__construct(array(
            'singular' => 'subscriber',
            'plural'   => 'subscribers',
            'ajax'     => false,
        ));
	}

    public function get_columns() {
        $columns = array(
            'cb'        => '<input type="checkbox" />',
            'id'        => 'ID',
            'email'     => 'Email',
            'name'      => 'Name',
            'created_at'=> 'Created At',
            'actions'   => 'Actions',
        );
        return $columns;
    }

    public function get_sortable_columns() {
        $sortable_columns = array(
            'id' => array('id', false),
            'email' => array('email', false),
            'name' => array('name', false),
            'created_at' => array('created_at', false),
        );
        return $sortable_columns;
    }

    public function usort_reorder($a, $b) {
        // Ваша логика сортировки
        $orderby = (!empty($_REQUEST['orderby'])) ? $_REQUEST['orderby'] : 'id';
        $order = (!empty($_REQUEST['order'])) ? $_REQUEST['order'] : 'asc';
        $result = strcmp($a[$orderby], $b[$orderby]);
        return ($order === 'asc') ? $result : -$result;
    }

    public function prepare_items() {
        global $wpdb;

        $table_name = $wpdb->prefix . 'subscribes';

        $per_page = 10;
        $current_page = $this->get_pagenum();

        $total_items = $wpdb->get_var("SELECT COUNT(id) FROM $table_name");

        $this->set_pagination_args(array(
            'total_items' => $total_items,
            'per_page'    => $per_page,
        ));

        $columns = $this->get_columns();

        $sortable = $this->get_sortable_columns();
        $this->_column_headers = array($columns, array(), $sortable);

        $orderby = isset($_REQUEST['orderby']) ? $_REQUEST['orderby'] : 'id';
        $order = isset($_REQUEST['order']) && in_array(strtoupper($_REQUEST['order']), array('ASC', 'DESC')) ? $_REQUEST['order'] : 'ASC';

        $data = $wpdb->get_results(
            $wpdb->prepare("SELECT * FROM $table_name ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, ($current_page - 1) * $per_page),
            ARRAY_A
        );

        $this->items = $data;
    }

    public function column_default($item, $column_name) {
        return $item[$column_name];
    }

    public function column_actions($item) {
        $actions = array(
            'delete' => sprintf('<a href="?page=%s&action=%s&subscriber=%s">Удалить</a>', $_REQUEST['page'], 'delete', $item['id']),
        );
        return sprintf('%s %s', 'Удалить', $this->row_actions($actions));
    }

    public function column_cb($item) {
        return sprintf(
            '<input type="checkbox" name="subscriber[]" value="%s" />',
            $item['id']
        );
    }
}

// Обработка действий (удаление, редактирование)
function handle_subscribers_actions() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'subscribes';

    if (isset($_GET['action']) && isset($_GET['subscriber'])) {
        $action = $_GET['action'];
        $subscriber_id = absint($_GET['subscriber']);

        switch ($action) {
            case 'edit':
                // Редактирование записи
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Обработка отправленной формы редактирования
                    $email = sanitize_email($_POST['email']);
                    $name = sanitize_text_field($_POST['name']);

                    $wpdb->update(
                        $table_name,
                        array(
                            'email' => $email,
                            'name' => $name,
                        ),
                        array('id' => $subscriber_id),
                        array('%s', '%s'),
                        array('%d')
                    );

                    wp_redirect(admin_url('admin.php?page=subscribers_page'));
                    exit;
                } else {
                    // Вывод формы редактирования
                    $subscriber = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $subscriber_id), ARRAY_A);

                    ?>
                    <div class="wrap">
                        <h2>Edit Subscriber</h2>
                        <form method="post" action="">
                            <label for="email">Email:</label>
                            <input type="text" name="email" value="<?php echo esc_attr($subscriber['email']); ?>" required>
                            <br>
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="<?php echo esc_attr($subscriber['name']); ?>" required>
                            <br>
                            <input type="submit" class="button-primary" value="Save Changes">
                        </form>
                    </div>
                    <?php

                    exit;
                }
                break;

            case 'delete':
                // Удаление записи
                $wpdb->delete($table_name, array('id' => $subscriber_id), array('%d'));
                wp_redirect(admin_url('admin.php?page=subscribers_page'));
                exit;
                break;

            // Добавьте другие действия, если необходимо
        }
    }
}
add_action('admin_init', 'handle_subscribers_actions');
