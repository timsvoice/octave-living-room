<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");
?>

<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'class',
		array(
			'labels' => array(
				'name' => __( 'Classes' ),
				'singular_name' => __( 'Class' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);

	register_post_type( 'workshop',
		array(
			'labels' => array(
				'name' => __( 'Workshops' ),
				'singular_name' => __( 'Workshop' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

?>