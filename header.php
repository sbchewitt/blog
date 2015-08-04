<!DOCTYPE html>
<html>
	<head>
		<title>Cherrycoma</title>
		<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"/>
		<link type='text/css' rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/fonts/genericons/genericons.css'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
		// wp_enqueue_style( 'genericons', $src, $deps, $ver, $media ); 
		wp_head(); 
		?>
	</head>
	<body>
	<div class="lightbox">
		<!-- <div class="lightbox-inner"> -->
			<span class="genericond genericon genericon-close"></span>
			<img>
		<!-- </div> -->
	</div>
	<div class="body-colour">
		<div class="content-wrapper">
			<div class="blog-title">
				<h1>Cherrycoma</h1>
			</div>
			<div class="navigation-outer">
				<div class="navigation-inner">
					<ul class="navigation-buttons">
						<li class="button button-home">
							<a href="/">Home</a>
						</li>
						<li class="button" id="about-button">
							<a href="/about/">About</a>
						</li>
						<li class="button contact-button">
							<a href="/contact/">Contact</a>
						</li>
					</ul>
				</div>
			</div>