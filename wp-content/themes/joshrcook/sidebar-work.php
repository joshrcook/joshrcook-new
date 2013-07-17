<div class="callout-box secondary-back">
	<p><strong>Project Date: </strong><?php echo get_post_meta($post->ID, 'project_details_project_date', true); ?></p>
	<p><strong>Skills Used: </strong><?php echo get_the_term_list($post->ID, 'portfolio_tags', '', ', '); ?>
</p>
	<div class="text-center">
		<a href="<?php echo get_post_meta($post->ID, 'work_link_link', true); ?>">
			<button class="button">View Live Project</button>
		</a>
	</div>
</div>