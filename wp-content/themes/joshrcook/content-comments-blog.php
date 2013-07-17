<?php 
$_GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?>>
	<div class="avatar"><?php echo get_avatar($comment, '100'); ?></div>
	<div class="comment-body">
		<div class="comment-details">
			<h2 class="comment-name"><?php comment_author(); ?></h2>
			<time datetime="<?php echo comment_date('Y-m-d'); ?>"><?php if(!function_exists('how_long_ago')){comment_date() . ' at ' . comment_time(); } else { echo how_long_ago(get_comment_time('U')); } ?></time>
		</div>
		<div class="reply button button-medium">
			<button type="button"><?php comment_reply_link(); ?></button>
		</div>
	</div>
</li>