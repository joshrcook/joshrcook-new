<?php get_header(); ?>

<div class="fixed">
	<div class="show-hide-1 row m-mobile-menu">
		<div class="columns text-center">
			<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		</div>
	</div>
	<header class="l-header-internal l-top-bar">
		<div class="row">
			<div class="columns large-3 small-3">
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
            <div class="columns large-9 text-right hide-for-small">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</div>
			<div class="columns small-9 show-for-small text-right nav">
				<div class="menu-primary-navigation-container">
					<ul class="menu">
						<li class="menu-item">
								<a class="show-hide-controller-1">Menu</a>
						</li>
					</ul>	
				</div>
			</div>
		</div>
	</header>
</div>
<div class="clearfix"></div>
