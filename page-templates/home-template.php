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
                <h1>
                    <?php echo get_theme_mod( 'cperko-fp-main-title', 'Lorem Ipsum' ); ?>
                </h1>

                <p>
                    <?php echo get_theme_mod( 'cperko-fp-main-text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius enim vel sapien rutrum ultrices. Praesent et venenatis dolor, eu tristique orci. Sed est tortor, convallis vitae bibendum sed, viverra in orci. Vestibulum lacinia, erat at vestibulum gravida, enim est laoreet est, a maximus metus neque sed lorem. Aenean in tempor lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam placerat libero id quam malesuada, a pellentesque arcu vehicula. Nulla at posuere dolor.' ); ?>
                </p>

            </div>      

            <div class="skills">
                <h1>
                    <?php echo get_theme_mod( 'cperko-fp-skills-header', 'Skills' ); ?>
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

            <div class="why-me">
                <h1>Why Work With Me?</h1>

                <ul>
                    <li>
                        <p class="title">
                            Responsive Design
                        </p>
                        <p>
                            Your site will look great on every device, including tablets and phones.
                        </p>
                    </li>
                    <li>
                        <p class="title">
                            Experience
                        </p>
                        <p>
                            Years of experience will ensure the right technologies are used for your project.
                        </p>
                    </li>
                    <li>
                        <p class="title">
                            Performance
                        </p>
                        <p>
                            I will make sure your site runs as fast as possible, so that it works great for all of your visitors.
                        </p>
                    </li>
                </ul>
            </div>

            <div class="recent-posts">
                <h1>
                    Recent Posts
                </h1>

                <?php 
                    query_posts( array(
                        'posts_per_page'    => 3,
                    ) );    
                    if( have_posts() ): ?>
                        <div class="posts">
                            <?php while( have_posts() ): the_post(); ?>
                                <div class="post">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3><?php echo the_title(); ?></h3>
                                    </a>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div> <!-- end .post -->
                            <?php endwhile; ?>
                        </div> <!-- end .posts -->
                    <?php endif; ?>
            </div> <!-- end .recent-posts' -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
