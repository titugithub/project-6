<?php

get_template_part('/inc/acf');

function halim_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim')
    ));
	
			add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

	
		

}
add_action('after_setup_theme', 'halim_setup');



function halim_assets() {
    
    // css
    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'templatemo-style', get_template_directory_uri() . '/css/templatemo-style.css', array(), '1.0.0', 'all');

    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );


    // js
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-1.10.2.min', get_template_directory_uri() . '/js/vendor/jquery-1.10.2.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'plugins-1.10.2.min', get_template_directory_uri() . '/js/min/plugins.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main-1.10.2.min', get_template_directory_uri() . '/js/min/main.min.js', array('jquery'), '1.0.0', true );



}   
add_action('wp_enqueue_scripts', 'halim_assets');






// Custom Posts
function halim_custom_posts() {

    // Slider Custom Post
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Gallery', 'halim'),
            'singular_name' => __('gallery', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'show_in_rest' => true
    ));



}
add_action('init', 'halim_custom_posts');