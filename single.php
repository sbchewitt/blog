<?php get_header(); get_sidebar("blogone"); ?>
	<div id="post" class="left-posts">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="blog-post">
			<a href="<?php echo get_permalink(); ?>" class="post-title-link">
				<div class="post-title">
					<?php echo the_title(); ?>
				</div>
			</a>
			<div class="post-date">
				<?php echo the_date();?>, <?php echo the_time(); ?>
			</div>
			<div class="post-text">
				<?php echo the_content(); ?>
			</div>
			<div class="end-of-post end-single">
				<?php echo do_shortcode('[ssba]'); ?>
			</div>
		</div>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	<?php
   		endwhile;
	endif;
	?>
	</div>
	<ul class="bottom-links">
		<?php $next_post = get_next_post(); 
			if (!empty( $next_post )): ?>
			<li class="button" id="newer-button">
				<a href="<?php echo get_permalink($next_post->ID)?>#post">Newer post</a>
			</li>
		<?php endif;
		$previous_post = get_previous_post();
			if (!empty( $previous_post )): ?>
			<li class="button" id="older-button">
				<a href="<?php echo get_permalink($previous_post->ID)?>#post">Older post</a>
			</li>
		<?php endif; ?>
		<li class="button" id="home-button">
			<a href="/">Home</a>
		</li>
	</ul>
	<?php
	get_footer();
	?>