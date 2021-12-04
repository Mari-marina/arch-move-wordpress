<?php

define('THEME_ROOT', get_template_directory_uri());
	define('CSS_DIR', THEME_ROOT . '/assets/css');
	define('IMG_DIR', THEME_ROOT . '/assets/images');


add_action( 'wp_enqueue_scripts', 'adore_style' );
add_action( 'wp_enqueue_scripts', 'adore_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );


function theme_register_nav_menu() {
	register_nav_menu( 'footer_menu', 'Меню в подвале');
	
}

function adore_style() {
	
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );


}

function adore_scripts() {
	
wp_enqueue_script( 'script-adore', get_template_directory_uri() .'/assets/js/scripts.js', array(), '1.0', true );
}