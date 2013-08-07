<?php get_header('internal'); ?>

<section class="internal">
	<?php if(has_post_thumbnail()) : ?>
	<div class="row">
		<div class="columns">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<br />
	<?php endif; ?>
	<div class="row">
		<div class="columns">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<?php get_template_part('content', 'page'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
