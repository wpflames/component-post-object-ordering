<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Post Objects',
		'menu_title'	=> 'Post Objects',
		'menu_slug' 	=> 'post-objects-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Agenda 2022',
		'menu_title'	=> 'Agenda 2022',
		'parent_slug'	=> 'post-objects-settings',
	));
}