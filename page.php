<?php get_header(); get_sidebar("blogone"); ?>
	<div class="left-posts">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="blog-post">
			<div class="post-title">
				<?php echo the_title(); ?>
			</div>
			<div class="post-text">
				<?php echo the_content(); ?>
			</div>
			
		</div>
	<?php 
   		endwhile;
	endif;
	?>
	</div>
	<?php
	get_footer();
	?>