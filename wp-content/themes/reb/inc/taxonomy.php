<?php
/**
 * Created by PhpStorm.
 * User: yevic
 * Date: 10/08/16
 * Time: 15:07
 */



// Register Custom Taxonomy
function style() {

    $labels = array(
        'name'                       => _x( 'styles', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'style', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Styles', 'text_domain' ),
        'all_items'                  => __( 'All styles', 'text_domain' ),
        'parent_item'                => __( 'Parent style', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent style:', 'text_domain' ),
        'new_item_name'              => __( 'New style Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New style', 'text_domain' ),
        'edit_item'                  => __( 'Edit style', 'text_domain' ),
        'update_item'                => __( 'Update style', 'text_domain' ),
        'view_item'                  => __( 'View style', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove styles', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular styles', 'text_domain' ),
        'search_items'               => __( 'Search styles', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No styles', 'text_domain' ),
        'items_list'                 => __( 'styles list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'style', array( 'band','concert' ), $args );

}
add_action( 'init', 'style', 0 );

