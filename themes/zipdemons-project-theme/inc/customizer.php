<?php
/**
 * Project Theme Theme Customizer
 *
 * @package Project_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function project_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'project_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'project_theme_customize_partial_blogdescription',
		) );
	}

	/**
	 * PANELS
	 */
	$wp_customize->add_panel( 'project_theme_cosial_media_panel', array(
		'title' => esc_html__( 'Social Media', 'sample_theme' ),
		'capability' => 'edit_theme_options',
	) );

	/**
	 * SECITIONS
	 */
	$wp_customize->add_section( 'project_theme_facebook_section', array(
		'title' => esc_html__( 'Facebook', 'sample_theme' ),
		'capability' => 'edit_theme_options',
		'panel' => 'sample_theme_cosial_media_panel'
	) );

	$wp_customize->add_section( 'project_theme_twitter_section', array(
		'title' => esc_html__( 'Twitter', 'sample_theme' ),
		'capability' => 'edit_theme_options',
		'panel' => 'project-theme_cosial_media_panel'
	) );

	/**
	 * SETTINGS
	 */
	$wp_customize->add_setting( 'project_theme_facebook_url', array(
		'transport' => 'refresh',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'project_theme_twitter_url', array(
		'transport' => 'refresh',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	/**
	 * CONTROLS
	 */
	$wp_customize->add_control( 'project_theme_facebook_url', array(
		'label' => esc_html__( 'URL', 'project-theme' ),
		'description' => esc_html__( 'Add URL to display Facebook icon/link', 'project-theme' ),
		'section' => 'project-theme_facebook_section',
		'type' => 'input',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'https://facebook.com', 'project-theme' ),
		),
	) );

	$wp_customize->add_control( 'project_theme_twitter_url', array(
		'label' => esc_html__( 'URL', 'project-theme' ),
		'description' => esc_html__( 'Add URL to display Twitter icon/link', 'project-theme' ),
		'section' => 'project-theme_twitter_section',
		'type' => 'input',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'https://twitter.com', 'project-theme' ),
		),
	) );

}
add_action( 'customize_register', 'project_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function project_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function project_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function project_theme_customize_preview_js() {
	wp_enqueue_script( 'project-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'project_theme_customize_preview_js' );
