<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'menu_title'	=> __('Theme Settings', 'ama'),
		'menu_slug' 	=> 'theme-general-settings',
		'redirect'		=> true
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Header', 'ama'),
		'menu_title'	=> __('Header Settings', 'ama'),
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Footer', 'ama'),
		'menu_title'	=> __('Footer Settings', 'ama'),
		'parent_slug'	=> 'theme-general-settings',
	));
}