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



