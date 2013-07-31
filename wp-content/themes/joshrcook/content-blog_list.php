<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="l-content">

<?php if(has_post_thumbnail()) {
	the_post_thumbnail('large'); 		
} // end has_post_thumbnail() 
?>
<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

<div class="post-details"><?php 
	echo get_the_date('F j, Y') . '&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;';
	comments_number('0 Comments'); 
	echo '&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Category: ' . get_default_categories($post->ID); 
?></div>

<?php the_content('Read More...'); ?>

<hr class="m-list-seperator" />

</div>

<?php endwhile; endif; ?>