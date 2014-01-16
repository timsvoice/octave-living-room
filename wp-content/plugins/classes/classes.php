<?php
/*
Plugin Name: Classes
Plugin URI: http://www.timothyvoice.com/classes
Description: Declares a plugin that will create a custom post type displaying classes.
Version: 1.0
Author: Timothy Voice
Author URI: http://www.timothyvoice.com
License: GPLv2
*/
?>

<?php

add_action( 'init', 'create_class' );

function create_class() {
    register_post_type( 'Classes',
        array(
            'labels' => array(
                'name' => 'Classes',
                'singular_name' => 'Class',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Class',
                'edit' => 'Edit',
                'edit_item' => 'Edit Class',
                'new_item' => 'New Class',
                'view' => 'View',
                'view_item' => 'View Class',
                'search_items' => 'Search Classes',
                'not_found' => 'No Classes found',
                'not_found_in_trash' => 'No Classes found in Trash',
                'parent' => 'Parent Class'
            ),
 
            'public' => true,
            'menu_position' => 4,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'category' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

?>