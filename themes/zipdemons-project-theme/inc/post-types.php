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