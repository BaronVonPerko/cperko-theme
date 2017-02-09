<?php $query = new WP_Query( array( 'post_type' => 'cperko-work-history' ) ); ?>

<?php if ( !$query->have_posts() ) : ?>

	<em><center>No Work History Items Found</center></em>
	
<?php else: ?>

	<div class="work-history">
		<div class="page-content">
			<?php while( $query->have_posts() ) : $query->the_post(); ?>
	
			<div class="row">
				
				<div class="s-col-3">
					<?php echo get_the_post_thumbnail(); ?>
				</div>
				<div class="s-col-9">
					<h3><?php echo the_title(); ?></h3>
					<p><?php echo the_content(); ?></p>
				</div>
				
				<hr class="s-divider" />
				
			</div>
			
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
	
<?php endif; ?>