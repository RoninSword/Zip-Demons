<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Project_Theme
 */

?>

	</div><!-- #content -->

	[11:04 p.m., 2020-03-30] Dhrupid Shah: <!--showing recent posts only on home page -->
<?php if ( is_front_page() ) { ?>

<?php 
    query_posts(array( 
        'post_type' => 'candies',
        'showposts' => 3 
    ) );  
?>

<!--showing three latest recent post from new post type with title,image,link and exceprt-->
<div class="grid-x recent3post">
   <center> <p class="postTTl"> Whats new?</p><br/></center>
<?php while (have_posts()) : the_post(); ?>
    <div class="cell small-12 medium-4 large-4 min-height-180">

        <?php
            if( has_post_thumbnail() ) { 
                echo '<div style="float:left;">';
                the_post_thumbnail('thumbnail');
                echo '</div>';
            }

          ?>
          <br/><br/><br/>
        <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
        <h5><?php echo get_the_excerpt(); ?></h5>
    </div>
<?php endwhile;?>
</div>
<br/>
<br/>

<?php } ?>

	<?php
	$args = array(
		'post_type' => 'project_theme_main',
		'post__not_in' => array(
			get_the_ID(),
		),
		'posts_per_page' => 3,
	);

	$events = new WP_Query( $args );

	if( $events->have_posts() ){
		while ( $events->have_posts() ){
			$events->the_post();
			?>
			<h2><?php echo get_the_title();?></h2>
			<?php
		}
	}
	wp_reset_postdata();
	?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		<p><?php echo esc_html__( 'Copyright', 'project_theme' ); ?> <?php echo date( 'Y' )?></p>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'project-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'project-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'project-theme' ), 'project-theme', '<a href="https://michael-bradley.net">Michael Bradley</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
