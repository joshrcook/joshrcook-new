<?php get_header('internal'); ?>

<?php query_posts(array('post_type' => 'post')); // get the blog posts ?>

<?php global $more; $more = 0; ?>

<section class="internal">
<div class="row">
	<div class="columns large-8">
		<div class="m-blog-list">
			<?php get_template_part('content', 'blog_list'); ?>
		</div>
	</div>
	<div class="columns large-4">
		<?php get_sidebar('blog_main'); ?>
	</div>
</div>
</section>

<?php get_footer(); ?>