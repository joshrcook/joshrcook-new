<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<?php if(has_post_thumbnail()) : ?>
		<?php require_once(get_template_directory() . '/inc/MixItUp.class.php'); 
		$mixItUp = new MixItUp($post->ID, 'portfolio_tags'); ?>
		<div class="columns large-4 grid-column <?php echo $mixItUp->getMixClasses(); ?>">
			<a href="<?php echo get_permalink($post->ID); ?>">
				<div class="ct-darken-overlay">
					<div class="darken-overlay">
						<div class="overlay-contents">
							<i class="icon-search"></i>
						</div>
					</div>
					<?php the_post_thumbnail('medium'); ?>
				</div>
			</a>
			<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
			<p class="subtitle"><?php echo get_post_meta($post->ID, 'subtitle_subtitle', true); ?></p>
		</div>
	<?php endif; ?>
<?php endwhile; endif; ?>