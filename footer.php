<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package example
 */

?>

	<footer id="colophon" class="site-footer container">
		<div class="site-info">
		<p>
		Danae is learning to be a Wordpress developer expert.
		</p>
		<!--
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'example' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'example' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'example' ), 'example', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
				-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
