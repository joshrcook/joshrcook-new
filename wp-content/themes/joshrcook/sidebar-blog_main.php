<div class="l-sidebar">
	<div class="row">
		<div class="columns">
			<?php if(dynamic_sidebar('Blog Sidebar')) : else : endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="columns inline-buttons">
			<h4 class="widgettitle">Categories</h4>
			<?php $categories = get_categories(); ?>
			<?php foreach($categories as $category) : ?>
				<a href="<?php echo get_term_link($category); ?>">
					<button class="button small inner"><?php echo $category->name; ?></button>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</div>