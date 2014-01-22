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

//Custom Class Categories
function my_taxonomies_class() {
	$labels = array(
		'name'              => _x( 'Class Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Class Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Class Categories' ),
		'all_items'         => __( 'All Class Categories' ),
		'parent_item'       => __( 'Parent Class Category' ),
		'parent_item_colon' => __( 'Parent Class Category:' ),
		'edit_item'         => __( 'Edit Class Category' ), 
		'update_item'       => __( 'Update Class Category' ),
		'add_new_item'      => __( 'Add New Class Category' ),
		'new_item_name'     => __( 'New Class Category' ),
		'menu_name'         => __( 'Class Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'class_category', 'class', $args );
}
add_action( 'init', 'my_taxonomies_class', 0 );

//Custom Workshop Categories
function my_taxonomies_workshop() {
	$labels = array(
		'name'              => _x( 'Workshop Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Workshop Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Workshop Categories' ),
		'all_items'         => __( 'All Workshop Categories' ),
		'parent_item'       => __( 'Parent Workshop Category' ),
		'parent_item_colon' => __( 'Parent Workshop Category:' ),
		'edit_item'         => __( 'Edit Workshop Category' ), 
		'update_item'       => __( 'Update Workshop Category' ),
		'add_new_item'      => __( 'Add New Workshop Category' ),
		'new_item_name'     => __( 'New Workshop Category' ),
		'menu_name'         => __( 'Workshop Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'workshop_category', 'workshop', $args );
}
add_action( 'init', 'my_taxonomies_workshop', 0 );

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

add_filter('uwpqsf_result_tempt', 'customize_output', '', 4);
function customize_output($results , $arg, $id, $getdata ){
	 // The Query
            $apiclass = new uwpqsfprocess();
             $query = new WP_Query( $arg );
		ob_start();	$result = '';
			// The Loop

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                                echo  '<li>'.get_permalink().'</li>';
			}
                        echo  $apiclass->ajax_pagination($arg['paged'],$query->max_num_pages, 4, $id);
		 } else {
					 echo  'no post found';
				}
				/* Restore original Post Data */
				wp_reset_postdata();

		$results = ob_get_clean();		
			return $results;
}

?>