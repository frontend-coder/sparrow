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
}

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







?>