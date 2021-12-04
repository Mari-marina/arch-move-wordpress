<?php

add_action( 'wp_enqueue_scripts', 'arch_style' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );

function arch_style() {	
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function arch_scripts() {	
wp_enqueue_script( 'script-adore', get_template_directory_uri() .'/assets/js/scripts.js', );
}