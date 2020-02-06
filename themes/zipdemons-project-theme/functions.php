<?php
/**
 * Project Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Project_Theme
 */

if ( ! function_exists( 'project_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function project_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Project Theme, use a find and replace
		 * to change 'project-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'project-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'project-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'project_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/**
		 * Add support for default core block styles
		 */
		add_theme_support( 'wp-block-styles' );

		/**
		 * Add support for full width
		 */
		add_theme_support( 'align-wide' );


		/**
		 * Add support for custom color palette
		 */
		add_theme_support( 'editor-color-palette', array(
			array(
				'name' => esc_html__( 'Light Green', 'project-theme' ),
				'slug' => 'light-green',
				'color' => '#8EE4AF',
			),
			array(
				'name' => esc_html__( 'Pale Green', 'project-theme' ),
				'slug' => 'pale-green',
				'color' => '#EDF5E1',
			),
			array(
				'name' => esc_html__( 'Regular Green', 'project-theme' ),
				'slug' => 'regular-green',
				'color' => '#5CDB95',
			),
			array(
				'name' => esc_html__( 'Brown', 'project-theme' ),
				'slug' => 'brown',
				'color' => '#907163',
			),
			array(
				'name' => esc_html__( 'Off Green', 'project-theme' ),
				'slug' => 'off-green',
				'color' => '#379683',
			),
			array(
				'name' => esc_html__( 'Black', 'project-theme' ),
				'slug' => 'black',
				'color' => '#000000',
			),
			array(
				'name' => esc_html__( 'White', 'project-theme' ),
				'slug' => 'white',
				'color' => '#ffffff',
			)
		) );

		/**
		 * add support for disabling custom colors
		 */
		add_theme_support( 'disable-custom-colors' );

		/**
 * Add support for font sizes
 */
add_theme_support(
	'editor-font-sizes',
	array(
		array(
			'name' => esc_html__( 'Large', 'project-theme' ),
			'size' => 30,
			'slug' => 'large'
		),
		array(
			'name' => esc_html__( 'Regular', 'project-theme' ),
			'size' => 16,
			'slug' => 'regular'
		),
		array(
			'name' => esc_html__( 'Small', 'project-theme' ),
			'size' => 10,
			'slug' => 'small'
		),
	)
);

/**
 * Add support for disabling custom font sizes
 */
add_theme_support( 'disable-custom-font-sizes' );

	}
endif;
add_action( 'after_setup_theme', 'project_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function project_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'project_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'project_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function project_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'project-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'project-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'project_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function project_theme_scripts() {
	wp_enqueue_style( 'project-theme-style', get_stylesheet_uri() );

	wp_enqueue_style( 'project-theme-foundation', get_template_directory_uri() . '/assets/css/vendor/foundation.min.css', null, '6.5.1' );
	wp_enqueue_script( 'project-theme-what-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js', array( 'jquery' ), '6.5.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'project_theme_scripts' );

function sample_theme_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'block-editor-js',
		get_template_directory_uri() . '/assets/js/block-editor.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' )
	);
}
add_action( 'enqueue_block_editor_assets', 'project_theme_enqueue_block_editor_assets' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block editor additions.
 */
 require get_template_directory() . '/inc/block-editor.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

