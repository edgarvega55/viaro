<?php
if ( !function_exists('viaro_setup') ) : 
    
    function viaro_setup() {
        // Let wordpress handle the title tags
        add_theme_support( 'title-tag' );
    }

endif;
add_action('after_setup_theme', 'viaro_setup');

/* ----- Register Menus ----- */

function register_viaro_menus() {
    register_nav_menus( array(
        'primary' => __('Primary Menu'),
        'footer'  => __('Footer Menu')
    ));
}
add_action('init', 'register_viaro_menus');


/* ----- Add Stylesheets ---- */

function viaro_styles() {
    // Enqueue Main Stylesheet
    wp_enqueue_style( 'main_style', get_stylesheet_uri() );
    wp_enqueue_style( 'media_css', get_template_directory_uri() . '/assets/css/style-media.css' );
    wp_enqueue_style( 'service_css', get_template_directory_uri() . '/assets/css/service.css' );
    wp_enqueue_style( 'technologie_css', get_template_directory_uri() . '/assets/css/technologie.css' );
    wp_enqueue_style( 'technologie_media_css', get_template_directory_uri() . '/assets/css/media/technologie-media.css' );
    wp_enqueue_style( 'dedicated_development_css', get_template_directory_uri() . '/assets/css/style-dedicated-development-texts.css' );
    wp_enqueue_style( 'text_colors_css', get_template_directory_uri() . '/assets/css/style-colors-text.css' );
    wp_enqueue_style( 'service_media_css', get_template_directory_uri() . '/assets/css/media/service-media.css' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesone_css', get_template_directory_uri() . '/assets/css/all.min.css' );
    wp_enqueue_style( 'google_fonts', 'https://webfonts.creativecloud.com/c/9b2b26/1w;open-sans,1,VvD:W:i4,VvF:W:n3,VvH:W:n4,VvJ:W:n6/l' );
}
add_action('wp_enqueue_scripts', 'viaro_styles');

/* ----- Add JS ---- */

function viaro_scripts() {

	global $wp_scripts;
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js');
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script( 'fontawesone_js', get_template_directory_uri() . '/assets/js/all.min.js');
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script( 'viewportchecker_js', get_template_directory_uri() . '/assets/js/jquery.viewportchecker.js');
}

add_action( 'wp_enqueue_scripts', 'viaro_scripts');

/* ----- Register Widget Areas ---- */
