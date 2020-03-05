<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header">

        <!--zzz /*logo */ -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
</div>
        </a>
            


        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    
    <?php if( get_theme_mod( 'project_theme_facebook_url' ) ||  get_theme_mod( 'project_theme_twitter_url')) { ?>
        <ul class = "social-media">
            <?php if( get_theme_mod( 'project_theme_facebook_url' ) ) { ?>
                <li class="facebook"><a href="<?php echo get_theme_mod( 'project_theme_facebook_url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook-icon.jpg'; ?>" alt="<?php echo esc_html__( "Facebook", 'project_theme' );?>"></a></li>
            <?php } ?>
            <?php if( get_theme_mod( 'project_theme_twitter_url' ) ) { ?>
                <li class="twitter"><a href="<?php echo get_theme_mod( 'project_theme_twitter_url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png'; ?>" alt="<?php echo esc_html__( "Twitter", 'project_theme' );?>"></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <div id="content" class="site-content">

