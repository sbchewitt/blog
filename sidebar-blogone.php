<div class="right-info">
	<div class="personal-info">
		<div class="profile-pic">
			<!-- <img src="images/profilepicture-1.jpg"> -->
		</div>
		<div class="right-title">
			<p>Welcome</p>
		</div>
		<div class="right-intro">
			<p>My name is Sarah and I like to bake, craft, and code! I live in Southampton with my husband Tom. Here I am at our wedding.</p>
		</div>
	</div>
	<div class="social-archive">
		<div class="social-links">
			<div class="social-title">
				<p>Follow me</p>
				<ul class="social-icons">
					<li><a href="https://www.pinterest.com/cherrycoma" target="_blank"><i class="genericond genericon genericon-pinterest"></i></a></li>
					<li><a href="https://twitter.com/sbchewitt" target="_blank"><i class="genericond genericon genericon-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/sarah.carnaby.1" target="_blank"><i class="genericond genericon genericon-facebook-alt"></i></a></li>
				</ul>
			</div>
		</div>
	
		<div class="archive-links">
			<div class="archive-title">
				<p>Archive</p>
			</div>
			<div class="search-form">
				<?php get_search_form( true ); ?>
			</div>
			<div class="archive-list">
				<ul class="archive-years">
				<?php 
					wp_get_archives(array('type' => 'monthly','show_post_count' => 1)); 
				?>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	

</div>