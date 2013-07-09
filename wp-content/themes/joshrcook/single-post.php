<?php get_header('internal'); ?>

<div class="row">
	<div class="columns large-8">
		<div class="blog-content">
			<?php if(have_posts()) : while(have_posts()) : the_post(); 

			if(has_post_thumbnail()) {
				the_post_thumbnail('large'); 		
			} // end has_post_thumbnail() 
			?>
			<h1><?php the_title(); ?></h1>
			
			<div class="post-details"><?php 
				echo get_the_date('F j, Y') . '&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;';
				comments_number('0 Comments'); 
				echo '&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Category: ' . get_default_categories($post->ID); 
			?></div>

			<?php the_content(); ?>

			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="columns large-3 large-offset-1">
		<div class="sidebar">
			<?php get_sidebar('blog'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>