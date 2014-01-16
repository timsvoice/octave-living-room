<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");

add_theme_support('nav-menus');
if ( function_exists('register_nav_menus')) {
		register_nav_menus(
		array(
		'main' => 'Main Nav'
		)
	);
}


?>

<?php

/*add_action('init', 'class_register');
 
function class_register() {
	
	$lables = array(
		'name' => _x('Class', 'post type general name'),
		'singular_name' => _x('Class', 'post type singular name'),
		'add_new' => _x('Add New', 'Class'),
		'add_new_item' => __('Add New Class'),
		'edit_item' => __('Edit Class'),
		'new_item' => __('New Class'),
		'view_item' => __('View Class'),
		'search_items' => __('Search Class'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  );


	register_post_type( 'class', $args );
}

add_action( 'init', 'workshop_register' );

function workshop_register() {
	
	$lables = array(
		'name' => _x('Workshop', 'post type general name'),
		'singular_name' => _x('Workshop', 'post type singular name'),
		'add_new' => _x('Add New', 'workshop'),
		'add_new_item' => __('Add New Workshop'),
		'edit_item' => __('Edit Workshop'),
		'new_item' => __('New Workshop'),
		'view_item' => __('View Workshop'),
		'search_items' => __('Search Workshop'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
		);

	$args = array(
		'labels' => $labels,
		'description' => 'Scheduled workshops at the Octave Living Room',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  );


	register_post_type( 'workshop', $args );
}*/

?>