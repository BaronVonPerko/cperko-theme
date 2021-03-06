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
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cperko' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="nav-menu-mobile-button">Menu</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				Menu
			</button>-->
			<?php if ( !is_front_page() ) : ?>
				<h1 class="site-title desktop-only">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			<?php endif; ?>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php if ( is_front_page() ) : ?>
			<div class="site-branding">
				<div class="site-branding-container">
					<div class="site-branding-left">
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
						<?php if ( !is_front_page() ) : ?>
							<h1 class="site-title mobile-only">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>
						<?php endif; ?>
					</div>
					<div class="site-branding-right">
						<div class="text">
							<p>I build things&nbsp;</p>
							<p>for the web.</p>
						</div>
					</div>
				</div>
			</div><!-- .site-branding -->
		<?php endif; ?>
		
	</header><!-- #masthead -->

	<nav class="mobile-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'mobile-menu' ) ); ?>
		<div class="close">Close</div>
	</nav>

	<div id="content" class="site-content">
