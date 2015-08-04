<?php get_header(); get_sidebar("blogone"); ?>
	<div id="posts" class="left-posts">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="blog-post">
			<a href="<?php echo get_permalink(); ?>#post" class="post-title-link">
				<div class="post-title">
					<?php echo the_title(); ?>
				</div>
			</a>
			<div class="post-date">
				<?php echo the_date();?>, <?php echo the_time(); ?>
			</div>
			<div class="post-text">
				<?php echo the_excerpt(); ?>
			</div>
			<div class="button" id="more-button">
				<a href="<?php echo get_permalink(); ?>#post">More</a>
			</div>
			<div class="end-of-post">
				<?php echo do_shortcode('[ssba]'); ?>
				<a href="<?php comments_link(); ?>">
					<div class="comment-bubble">
						<p><?php echo get_comments_number(); ?></p>
					</div>
				</a>
			</div>
		</div>
	<?php
   		endwhile;
	endif;
	?>
	</div>
	<?php get_sidebar("bottom-blogone"); ?>
	<ul class="bottom-links">
		<?php
			if (get_previous_posts_link()): ?>
			<li class="button" id="newer-button">
				<a href="<?php previous_posts(); ?>#posts">Newer posts</a>
			</li>
		<?php endif;
			if (get_next_posts_link()): ?>
			<li class="button" id="older-button">
				<a href="<?php next_posts(); ?>#posts">Older posts</a>
			</li>
		<?php endif; ?>
		<li class="button" id="home-button">
			<a href="/">Home</a>
		</li>
	</ul>
	<?php
	get_footer();
	?>

	