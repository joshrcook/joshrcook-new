<?php get_header('internal'); ?>

<?php global $more; $more = 0; ?>

<section class="internal">
<div class="row">
	<div class="columns large-8">
		<div class="m-blog-list">
			<?php get_template_part('content', 'blog_list'); ?>
		</div>
	</div>
	<div class="columns large-3 large-offset-1">
		<?php get_sidebar('blog_main'); ?>
	</div>
</div>
</section>

<?php get_footer(); ?>