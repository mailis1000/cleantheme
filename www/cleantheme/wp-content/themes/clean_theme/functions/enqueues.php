<?php
function ama_enqueues() {

	/* AMA font */
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i', false );

    wp_register_style('font-awesome.min', get_template_directory_uri() . '/theme/css/font-awesome.min.css', false, null);
    wp_enqueue_style('font-awesome.min');

	/* Theme CSS */
    $themecsspath = get_stylesheet_directory() . '/theme/scss/main.css';
    wp_enqueue_style(
        'ama',
        get_stylesheet_directory_uri() . '/theme/scss/main.css',
        array(),
        filemtime( $themecsspath )
    );

	/* Scripts */
	wp_enqueue_script( 'jquery' );

	wp_register_script('functions', get_template_directory_uri() . '/theme/js/functions.js', false, null, true);
	wp_enqueue_script('functions');

    wp_register_script('navigation', get_template_directory_uri() . '/theme/js/navigation.js', false, null, true);
    wp_enqueue_script('navigation');


    wp_register_script('forms', get_template_directory_uri() . '/theme/js/forms.js', false, null, true);
    wp_enqueue_script('forms');

}
add_action('wp_enqueue_scripts', 'ama_enqueues', 100);
