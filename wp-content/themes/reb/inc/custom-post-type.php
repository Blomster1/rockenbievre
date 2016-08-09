<?php
/**
 * Created by PhpStorm.
 * User: yevic
 * Date: 09/08/16
 * Time: 13:51
 */



// Register Custom Post Type
function band() {

    $labels = array(
        'name'                  => _x( 'Bands', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Band', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Bands', 'text_domain' ),
        'name_admin_bar'        => __( 'Bands', 'text_domain' ),
        'archives'              => __( 'Bands Archives', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All', 'text_domain' ),
        'add_new_item'          => __( 'Add New', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New band', 'text_domain' ),
        'edit_item'             => __( 'Edit band', 'text_domain' ),
        'update_item'           => __( 'Update band', 'text_domain' ),
        'view_item'             => __( 'View band', 'text_domain' ),
        'search_items'          => __( 'Search band', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into band', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this band', 'text_domain' ),
        'items_list'            => __( 'Bands list', 'text_domain' ),
        'items_list_navigation' => __( 'Bands list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter bands list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Band', 'text_domain' ),
        'description'           => __( 'Band', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'band', $args );

}
add_action( 'init', 'band', 0 );

