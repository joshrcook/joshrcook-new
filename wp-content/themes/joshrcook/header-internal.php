<?php get_header(); ?>
<div class="fixed">
	<header class="header-internal">
		<div class="row">
			<div class="columns large-3">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/assets/logos/logo-white.svg" alt="logo" id="logo" />
					</a>
				</div>
				<script>
                    if(!Modernizr.svg) {
                        jQuery("#logo").attr('src', 'img/assets/logos/logo-white.png');
                    }
                </script> 
            </div>
            <div class="columns large-9 text-right">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</div>
		</div>
	</header>
</div>
<div class="clearfix"></div>
