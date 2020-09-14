<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package example
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php example_post_thumbnail(); ?>
		<div>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					example_posted_on();
					?>
				</div><!-- .entry-meta -->
				<div class="author">
					<?php example_posted_by(); ?>
				</div>
				<div class="blog-post">
				<?php echo get_post_meta($post->ID, 'blog_post', true); ?>
				<span>Check out the full recipe at the original blog post</span>
				<a href=<?php echo get_post_meta($post->ID, 'recipe_link', true); ?>>
					<?php echo " " . get_post_meta($post->ID, 'slug', true) . "."; ?>
				</a>
				
				</div>
			<?php endif; ?>
		</div><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'example' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'example' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php example_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<!-- #post-<?php the_ID(); ?> -->
	</article>
