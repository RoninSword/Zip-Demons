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
        