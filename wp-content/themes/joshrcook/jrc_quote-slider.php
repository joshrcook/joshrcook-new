<?php
wp_reset_query(); 

$args = array(
	'post_type' => 'jrc_quote', 
	'posts_per_page' => 0,
	'orderby' => 'menu_order'
);

query_posts($args);

?>
<ul data-orbit>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<?php // print_r(get_post_custom($post->ID)); ?>
	<li class="text-left">
		<div class="columns large-1 small-1 text-right">
			<i class="icon-quote-left"></i>
		</div>
		<div class="columns large-11 small-11">
			<p class="m-blqt-quote">
				<?php echo get_post_meta($post->ID, 'quote_quote', true); ?>
			</p>
			<p class="m-blqt-author">
				<?php echo get_post_meta($post->ID, 'quote_quote_author', true); ?>
			</p>
		</div>
	</li>
<?php endwhile; endif; ?>
</ul>
