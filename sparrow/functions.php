<?php
add_action( 'wp_enqueue_scripts', 'theme_styles' );
function theme_styles() {
	wp_enqueue_style( 'styles', get_stylesheet_uri());  // присоединение файла style.css, который находится в корне шаблона
wp_enqueue_style('defaultcss', get_template_directory_uri().'/css/default.css');
wp_enqueue_style('layoutcss', get_template_directory_uri().'/css/layout.css');
wp_enqueue_style('mediaqueriescss', get_template_directory_uri().'/css/media-queries.css');
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function theme_scripts() {
wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery-1.10.2.min.js' );
wp_enqueue_script( 'jquery' );
wp_register_script( 'jquerymigrate', get_template_directory_uri().'/js/jquery-migrate-1.2.1.min.js', array('jquery'), null, true);
wp_enqueue_script( 'jquerymigrate' );
wp_register_script( 'jqueryflexsliderjs', get_template_directory_uri().'/js/jquery.flexslider.js', array('jquery'), null, true);
wp_enqueue_script( 'jqueryflexsliderjs' );
wp_register_script( 'doubletaptogojs', get_template_directory_uri().'/js/doubletaptogo.js', array('jquery'), null, true);
wp_enqueue_script( 'doubletaptogojs' );
wp_register_script( 'initjs', get_template_directory_uri().'/js/init.js', array('jquery'), null, true);
wp_enqueue_script( 'initjs' );
wp_register_script( 'modernizrjs', get_template_directory_uri().'/js/modernizr.js', null, false);
wp_enqueue_script( 'modernizrjs' );
}

// регистрация верхнего меню на сайте
add_action('after_setup_theme', 'theme_top_nav_menu');
function theme_top_nav_menu() {
register_nav_menu( 'top', 'Верхнее меню в шапке' );
add_theme_support( 'title-tag' ); //вывод title страниц
add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );
//зарегить добавление миниатюр в постах и в своем типе записи - портфолио, которое я создал ниже
add_theme_support( 'post-thumbnails', array( 'page' ) );
//зарегить добавление миниатюр в страницах
add_image_size('post_thumb', 1300, 500, true);
// регю свой размер миниатюр для поста, размеры и жесткая обрезка
add_theme_support( 'post-formats', array( 'aside', 'video', 'gallery', 'link' ) );

}
//the_excerpt установка ссылки по выбору заказчика
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
	global $post;
	return '<br/><a href="'. get_permalink($post->ID) . '">Читать дальше......</a>';
}
//the_excerpt обрезка до 20 слов + вывод ссылки читать далее
function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


// регистрация меню в подвале сайта
add_action('after_setup_theme', 'theme_footer_nav_menu');
function theme_footer_nav_menu() {
register_nav_menu( 'bottom', 'Меню в подвале' );
}

// регистрация меню социальных ссылок на сайте
add_action('after_setup_theme', 'theme_social_nav_menu');
function theme_social_nav_menu() {
register_nav_menu( 'social', 'Меню социальные сети' );
}
// регистрация первого сайдбара
add_action('widgets_init', 'register_left_widgets');
function register_left_widgets(){
	register_sidebar( array(
		'name'          => 'Левый сайдбар', //название для меня
		'id'            => 'left_sidebar', // название для подключения
		'description'   => 'этот сайдбар отображается на всех внутрених страницах сайта',
		// 'class'         => '',
 'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget'  => "</div>\n",
 'before_title'  => '<h5 class="widgettitle">',
 'after_title'   => "</h5>\n"
	) );
}

// регистрация cайдбара на странице 404
add_action('widgets_init', 'register_error_widgets');
function register_error_widgets(){
	register_sidebar( array(
		'name'          => '404 сайдбар', //название для меня
		'id'            => 'error_sidebar', // название для подключения
		'description'   => 'Этот сайдбар отображается на странице 404',
		// 'class'         => '',
 'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget'  => "</div>\n",
 'before_title'  => '<h5 class="widgettitle">',
 'after_title'   => "</h5>\n"
	) );
}

// регистрация cайдбара для внутрених страниц сайта
add_action('widgets_init', 'register_page_widgets');
function register_page_widgets(){
	register_sidebar( array(
		'name'          => 'сайдбар для страниц', //название для меня
		'id'            => 'page_sidebar', // название для подключения
		'description'   => 'Этот сайдбар отображается на внутрених страницах сайта',
		// 'class'         => '',
 'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget'  => "</div>\n",
 'before_title'  => '<h5 class="widgettitle">',
 'after_title'   => "</h5>\n"
	) );
}

// регистрация cайдбара для внутрених страниц сайта
add_action('widgets_init', 'register_single_widgets');
function register_single_widgets(){
	register_sidebar( array(
		'name'          => 'сайдбар для записей', //название для меня
		'id'            => 'single_sidebar', // название для подключения
		'description'   => 'Этот сайдбар отображается на страницах категорий и отдельных записей',
		// 'class'         => '',
 'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget'  => "</div>\n",
 'before_title'  => '<h5 class="widgettitle">',
 'after_title'   => "</h5>\n"
	) );
}



// создать свой экшен - действие
add_action('oleg_myaction', 'action_function');
function action_function() {
echo 'Я написал все это расскошное и преломленное создание';
}
// создать свой шорт- код
add_shortcode('oleg_shortcode', 'short_function');
function short_function() {
return 'Я создал свой короткий код для вставки в блог через редактор кода';
}

// регистрация своих типов записи
add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('portfolio', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Портфолио', // основное название для типа записи
			'singular_name'      => 'Портфолио', // название для одной записи этого типа
			'add_new'            => 'Добавить работы в портфолио', // для добавления новой записи
			'add_new_item'       => 'Добавление работы в портфолио', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование работы портфолио', // для редактирования типа записи
			'new_item'           => 'Новая работа в портфолио', // текст новой записи
			'view_item'          => 'Смотреть работы в портфолио', // для просмотра записи этого типа.
			'search_items'       => 'Искать работу в портфолио', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Портфолио', // название меню
		),
		'description'         => 'Этот размещаем наши работы в портфолио',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public чтобы выводились посты при клике по названию таксономии
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-format-gallery',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','author','thumbnail','excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('skills'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
// конец регистрация своих типов записи
// роегистрация наксономий

// хук для регистрации таксономии
add_action('init', 'create_taxonomy');
function create_taxonomy(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('skills', array('portfolio'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Навыки',
			'singular_name'     => 'Навык',
			'search_items'      => 'Найти таксономию Навыки',
			'all_items'         => 'Все таксономии Навыки',
			'view_item '        => 'Просмотреть таксономии Навыки',
			'parent_item'       => 'Pодительский навык',
			'parent_item_colon' => 'Pодительский навык:',
			'edit_item'         => 'Редактировать таксономии Навыки',
			'update_item'       => 'Обновить',
			'add_new_item'      => 'Добавить новую таксономию',
			'new_item_name'     => 'Новое имя таксономии',
			'menu_name'         => 'Навыки',
		),
		'description'           => 'Навыки, используемые в работе', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => true, // равен аргументу public
	'hierarchical'          => false,
	'rewrite'               => true,

	) );
}























?>