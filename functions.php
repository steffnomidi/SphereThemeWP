<?php

	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	
function thistheme_enqueue_style() {
	wp_enqueue_style( 'bs', get_bloginfo('template_url').'/css/bootstrap.min.css', false ); 
	wp_enqueue_style( 'owl', get_bloginfo('template_url').'/css/owl.carousel.min.css', false ); 
	wp_enqueue_style( 'core', get_bloginfo('template_url').'/style.css', false ); 
}

function thistheme_enqueue_script() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bs', get_bloginfo('template_url').'/js/bootstrap.min.js', array('jquery'), false ); 
	wp_enqueue_script( 'owl', get_bloginfo('template_url').'/js/owl.carousel.min.js', array('jquery'), false ); 
	wp_enqueue_script( 'core', get_bloginfo('template_url').'/js/script.js', array('jquery', 'owl', 'bs'), false ); 
	
}

add_action( 'wp_enqueue_scripts', 'thistheme_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'thistheme_enqueue_script' );	