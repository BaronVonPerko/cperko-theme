<?php $query = new WP_Query( array( 'post_type' => 'cperko-portfolio' ) ); ?>

<?php if ( !$query->have_posts() ) : ?>

	<em>No Portfolio Items Found</em>
	
<?php else : ?>

	<div class="portfolio">
		<div class="page-content">

			<?php while( $query->have_posts() ) : $query->the_post(); ?>
		
				<h3><?php echo the_title(); ?></h3>
				
				<div class="portfolio-image">
					<?php echo get_the_post_thumbnail() ?>
				</div>
				
				<div class="portfolio-content">
					<?php echo the_content(); ?>
				</div>
		
				<hr class="s-divider" />
		
			<?php endwhile; // end of the loop. ?>
			
		</div>
	</div>
	
<?php endif; ?>