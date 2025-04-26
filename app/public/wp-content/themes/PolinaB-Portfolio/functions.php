<?php
/* --------------------------------------------------------------------
   1. Basic theme setup
   ------------------------------------------------------------------*/
function polina_theme_setup() {
	// Enable automatic <title> tag handling
	add_theme_support( 'title-tag' );

	// Enable featured images (thumbnails)
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'polina_theme_setup' );

/* --------------------------------------------------------------------
   2. Enqueue the main stylesheet
   ------------------------------------------------------------------*/
function polina_enqueue_assets() {
	// Load style.css from the theme root
	wp_enqueue_style( 'polina-style', get_stylesheet_uri(), [], '1.0' );
}
add_action( 'wp_enqueue_scripts', 'polina_enqueue_assets' );
