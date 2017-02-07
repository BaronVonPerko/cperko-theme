<?php /* Template Name: Static Home Page */ ?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cperko
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="intro">

                <h1>Lorem Ipsum</h1>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius enim vel sapien rutrum ultrices. Praesent et venenatis dolor, eu tristique orci. Sed est tortor, convallis vitae bibendum sed, viverra in orci. Vestibulum lacinia, erat at vestibulum gravida, enim est laoreet est, a maximus metus neque sed lorem. Aenean in tempor lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam placerat libero id quam malesuada, a pellentesque arcu vehicula. Nulla at posuere dolor.
                </p>

            </div>      

            <div class="skills">
                <h1>
                    Lorem Ipsum
                </h1>

                <div class="skills-container">
                    <img class="skill" src="<?php echo get_stylesheet_directory_uri() . '/images/angular-logo.png' ?>" />
                    <img class="skill" src="<?php echo get_stylesheet_directory_uri() . '/images/html5-logo.png' ?>" />
                    <img class="skill" src="<?php echo get_stylesheet_directory_uri() . '/images/css3-logo.png' ?>" />
                    <img class="skill" src="<?php echo get_stylesheet_directory_uri() . '/images/mnet-logo.jpg' ?>" />
                    <img class="skill" src="<?php echo get_stylesheet_directory_uri() . '/images/sql-logo.png' ?>" />
                    <img class="skill" src="<?php echo get_stylesheet_directory_uri() . '/images/gulp-logo.png' ?>" />
                    <img class="skill" src="<?php echo get_stylesheet_directory_uri() . '/images/android-logo.png' ?>" />
                </div>
            </div>      

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
