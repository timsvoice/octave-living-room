<?php
/*
Plugin Name: Workshops
Plugin URI: http://www.timothyvoice.com/workshops
Description: Declares a plugin that will create a custom post type displaying workshops.
Version: 1.0
Author: Timothy Voice
Author URI: http://www.timothyvoice.com
License: GPLv2
*/
?>

<?php

add_action( 'init', 'create_workshop' );

function create_workshop() {
    register_post_type( 'workshops',
        array(
            'labels' => array(
                'name' => 'Workshops',
                'singular_name' => 'Workshop',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Workshop',
                'edit' => 'Edit',
                'edit_item' => 'Edit Workshop',
                'new_item' => 'New Workshop',
                'view' => 'View',
                'view_item' => 'View Workshop',
                'search_items' => 'Search Workshops',
                'not_found' => 'No Workshops found',
                'not_found_in_trash' => 'No Workshops found in Trash',
                'parent' => 'Parent Workshop'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'category' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

?>