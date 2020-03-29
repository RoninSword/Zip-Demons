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

	<?php
	$args = array(
		'post_type' => 'project_theme_maintenance',
		'post__not_in' => array(
			get_the_ID(),
		),
		'posts_per_page' => 1,
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
