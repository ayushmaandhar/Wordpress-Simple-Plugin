<?php
/*
Plugin Name: My Notes
Description: A simple plugin to add notes as custom post type.
*/

function my_notes_custom_post_type() {
    $labels = array(
        'name'               => 'Notes',
        'singular_name'      => 'Note',
        'menu_name'          => 'Notes',
        'name_admin_bar'     => 'Note',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Note',
        'new_item'           => 'New Note',
        'edit_item'          => 'Edit Note',
        'view_item'          => 'View Note',
        'all_items'          => 'All Notes',
        'search_items'       => 'Search Notes',
        'parent_item_colon'  => 'Parent Notes:',
        'not_found'          => 'No notes found.',
        'not_found_in_trash' => 'No notes found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-admin-page',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'notes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'notes', $args );
}
add_action( 'init', 'my_notes_custom_post_type' );

