<?php get_header('internal'); ?>

<section class="internal">
	<div class="row">
		<div class="columns">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="columns columns-2">
			<?php get_template_part('content', 'page'); ?>
		</div>
	</div>
</section>
<section class="internal">
	<div class="row">
		<div class="columns">
			<h1 class="margin-btm">Meet Us</h1>
		</div>
	</div>
	<?php wp_reset_query(); ?>
	<?php query_posts(array('post_type' => 'jrc_staff', 'posts_per_page' => 2, 'orderby' => 'menu_order' )); ?>
	<div class="row m-meet">
		<?php $count = 1; ?>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="columns large-4 large-offset-<?php echo $count; ?> text-center">
				<?php if(has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
				<h2><?php echo get_post_meta($post->ID, 'staff_member_details_name', true); ?></h2>
				<p class="subtitle"><?php echo get_post_meta($post->ID, 'staff_member_details_title', true); ?></p>
				<p class="m-meet-about"><?php echo get_post_meta($post->ID, 'staff_member_details_about_me', true); ?></p>
				<hr class="thick colored show-for-small seperator">
			</div>
			<?php $count++; ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="row hide-for-small">
		<div class="columns large-4 large-offset-1">
			<hr class="thick colored" />
		</div>
		<div class="columns large-4 large-offset-2">
			<hr class="thick colored" />
		</div>
	</div>
</section>
<section class="internal">
	<div class="row">
		<div class="columns large-6 large-centered m-blqt text-center">
			<?php get_template_part('jrc_quote', 'slider'); ?>
		</div>
	</div>
</section>
<section class="internal">
	<div class="row">
		<div class="columns large-9">
			<h2 class="call-to-action">Need a website? We'd love to meet you!</h2>
		</div>
		<div class="columns large-3 text-right small-text-center">
			<a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>"><button class="button">Contact Us</button></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>