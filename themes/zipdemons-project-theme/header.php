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

        <!-- /*logo */ -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>./assets/images/logo.png" alt="Logo" width="50px" height="50px" />
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

    <?php if( get_theme_mod( 'project-theme_facebook_url' ) ||  get_theme_mod( 'project-theme_twitter_url') { ?>
        <ul class = "social-media">
            <?php if( get_theme_mod( 'project-theme_facebook_url' ) ) { ?>
                <li class="facebook"><a href="<?php echo get_theme_mod( 'project-theme_facebook_url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/facebook-icon.jpg'; ?>" alt="<?php echo esc_html__( "Facebook", 'project-theme' );?>"></a></li>
            <?php } ?>

            <?php if( get_theme_mod( 'project-theme_twitter_url' ) ) { ?>
            <?php } ?>
        </ul>


    <div id="content" class="site-content">

