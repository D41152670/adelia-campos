<?php
if( function_exists('acf_add_options_page') ) {

	$menuBanner = acf_add_options_page(array(
		'page_title' 	=> 'Redes sociais',
		'menu_title' 	=> 'Redes sociais',
		'menu_slug' 	=> 'redes-sociais',
		'position'     => 2,
		'redirect' 		=> false
	));
}
