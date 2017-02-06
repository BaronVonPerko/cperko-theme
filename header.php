<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cperko
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cperko' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php 
			if( !is_front_page() ): ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			<?php endif; ?>

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				Menu
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<style>
			.site-branding {
				background-image: url(<?php echo get_header_image(); ?>);
				<?php
					if( is_front_page() ) {
						echo 'height: 800px;';
					} else {
						echo 'height: 350px';
					}
				?>
			}
		</style>

		<div class="site-branding">
			<?php
			if ( is_front_page() ) : ?>
				<h1 class="site-title fade-in">
					<?php bloginfo( 'name' ); ?>
				</h1>
				
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description fade-in"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
