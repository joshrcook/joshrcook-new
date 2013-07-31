<?php if($slider_image = json_decode(get_post_meta($post->ID, 'media-id', true))): // add the image slider?>
	<?php $args = array('class' => 'full-width'); ?>
	<ul data-orbit class="orbit-slider">
		<?php foreach($slider_image as $image_id): ?>
			<li>
				<?php echo wp_get_attachment_image($image_id, 'full', false, $args); ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>