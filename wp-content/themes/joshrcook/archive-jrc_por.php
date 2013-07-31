<?php get_header('internal'); ?>
<?php wp_enqueue_script('jrc_theme_mixItUp'); ?>

<section class="internal">
	<div class="row">
		<div class="columns">
			<h1>Work</h1>
		</div>
	</div>
	<div class="row">
		<div class="columns inline-buttons">
			<?php $archive_terms = get_terms('portfolio_tags'); ?>
			<button class="button small inner filter" data-filter="all">All</button>
			<?php foreach($archive_terms as $term) : ?>
				<button class="button small inner filter" data-filter="<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="row">
		<div class="columns grid-3" id="Grid">
			<?php get_template_part('content', 'jrc_por_grid'); ?>
		</div>
	</div>	
</section>
<section class="internal">
	<div class="row">
		<div class="columns large-9">
			<h2 class="call-to-action">Like our work? We'd love to work with you!</h2>
		</div>
		<div class="columns large-3 text-right small-text-center">
			<a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>"><button class="button">Contact Us</button></a>
		</div>
	</div>
</section>
<script>
jQuery(function() {
	jQuery('#Grid').mixitup();
});
</script>

<?php get_footer(); ?>
