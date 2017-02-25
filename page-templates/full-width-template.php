<?php /* Template Name: Full-Width */ ?>

<?php
/**
 * The full-width template file
 *
 * @package cperko
 */

get_header(); ?>

	<div id="primary" class="content-area no-widgets">
		<main id="main" class="site-main" role="main">

            <?php the_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
