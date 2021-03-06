<?php get_header('internal'); ?>

<section class="internal">
	<div class="row">
		<div class="columns large-8">
			<div class="l-content">
				<?php get_template_part('content', 'post'); ?>
			</div>
		</div>
		<div class="columns large-4">
			<div class="l-sidebar">
				<?php get_sidebar('blog_main'); ?>
			</div>
		</div>
	</div>
</section>

<?php comments_template(); ?>

<?php get_footer(); ?>
