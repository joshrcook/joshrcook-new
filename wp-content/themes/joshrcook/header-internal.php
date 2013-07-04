<?php get_header(); ?>

<header class="header-internal">
	<div class="sticky">
		<nav class="top-bar">
			<ul class="title-area">
				<li class="logo">
					<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/logos/logo-white.svg" alt="logo" id="logo" /></a>
					<script>
	                    if(!Modernizr.svg) {
	                        jQuery("#logo").attr('src', 'img/assets/logos/logo-white.png');
	                    }
	                </script> 
				</li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<?php 
						print_nav_menu($post->ID);
					?>
				</ul>
			</section>
		</nav>
	</div>
</header>