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

    <?php if(get_theme_mod( 'project-theme_facebook')) { ?>
        <ul class = "social-media">
            <?php if(get_theme_mod( 'sample_theme_facebook_url' )) { ?>
                <li class="facebook"><a href="<?php echo get_theme_mod('sample_theme_facebook_url'); ?>"></a><li>get_template_directory_uri().'/assets/img/facebook-icon.jpg';?>" alt="<?php echo esc_html__("Facebook",'project-theme');?>"></a></li>
            <?php} ?>
        </ul>
    }


    <div id="content" class="site-content">

