<?php get_header('internal'); ?>

<section class="internal">
	<div class="row">
		<div class="columns">
			<?php get_template_part('jrc_por', 'slider'); ?>
		</div>
	</div>
	<div class="row">
		<div class="columns large-8 page-content">
			<?php get_template_part('jrc_por', 'content'); ?>
		</div>
		<div class="columns large-3 large-offset-1">
			<?php get_sidebar('work'); ?>
		</div>	
	</div>
</section>

<?php get_footer(); ?>