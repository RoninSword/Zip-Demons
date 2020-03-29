<?php
/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function project_theme_init_post_types() {
        /**
     * Server Maintenance
     */
    $labels = array(
        'name'                  => esc_html_x( 'Maintenances', 'Post type general name', 'project_theme' ),
        'singular_name'         => esc_html_x( 'Maintenance', 'Post type singular name', 'project_theme' ),
        'menu_name'             => esc_html_x( 'Maintenances', 'Admin Menu text', 'project_theme' ),
        'name_admin_bar'        => esc_html_x( 'Maintenance', 'Add New on Toolbar', 'project_theme' ),
        'add_new'               => esc_html__( 'Add New', 'project_theme' ),
        'add_new_item'          => esc_html__( 'Add New Maintenance', 'project_theme' ),
        'edit_item'             => esc_html__( 'Edit Maintenance', 'project_theme' ),
        'view_item'             => esc_html__( 'View Maintenance', 'project_theme' ),
        'all_items'             => esc_html__( 'All Maintenances', 'project_theme' ),
        'search_items'          => esc_html__( 'Search Maintenances', 'project_theme' ),
        'parent_item_colon'     => esc_html__( 'Parent Maintenances:', 'project_theme' ),
        'not_found'             => esc_html__( 'No maintenances found.', 'project_theme' ),
        'not_found_in_trash'    => esc_html__( 'No maintenances found in Trash.', 'project_theme' ),
        'featured_image'        => esc_html_x( 'Maintenance Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'project_theme' ),
        'set_featured_image'    => esc_html_x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'project_theme' ),
        'remove_featured_image' => esc_html_x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'project_theme' ),
        'use_featured_image'    => esc_html_x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'project_theme' ),
        'archives'              => esc_html_x( 'Maintenance archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'project_theme' ),
        'insert_into_item'      => esc_html_x( 'Insert into maintenance', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'project_theme' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this maintenance', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'project_theme' ),
        'filter_items_list'     => esc_html_x( 'Filter maintenances list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'project_theme' ),
        'items_list_navigation' => esc_html_x( 'Maintenances list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'project_theme' ),
        'items_list'            => esc_html_x( 'Maintenances list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'project_theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'maintenances' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-book',
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'project_theme_maintenance', $args );
}
add_action( 'init', 'project_theme_init_post_types' );