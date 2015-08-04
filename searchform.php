<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( '', 'label' ); ?></label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search" />
		<button type="submit" id="searchsubmit" class="submitbutton">
			<i class="genericond genericon genericon-search"></i>
		</button>
	</div>
</form>