<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package example
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

		<?php
			if ( is_front_page() && is_home() ) :
				?>
				<div class="big-header" style="background: url(<?=get_header_image() ?>)  center top/cover no-repeat;" >
					<div class="container">	
						<div class="flex-column">
							<?=the_custom_logo();?>
							<h1 class="site-title" style="margin: 0;"><a style="text-decoration: none;" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
								$example_description = get_bloginfo( 'description', 'display' );
								if ($example_description || is_customize_preview()) :
							?>
									<p class="site-description"><?php echo $example_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
							</div>
						</div>
				</div>
				<?php
			else :
				?>
				<div class="little-header" style="background: url(<?=get_header_image() ?>)  center top/cover no-repeat;" >
				<div class="container">	
				<div class="flex-row">
						<?=the_custom_logo();?>
						<h1 class="site-title" style="margin: 0;"><a style="text-decoration: none;" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>				
				</div>				
				</div>
				<?php
			endif; ?>


	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'example' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
