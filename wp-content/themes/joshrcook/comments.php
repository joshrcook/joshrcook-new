<?php
/*
The comments page for Bones
*/

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<div class="alert alert-help">
			<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments.", "bonestheme"); ?></p>
		</div>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->


<?php if ( have_comments() ) { ?>

	<div class="comments">
		<div class="row">
			<div class="columns large-8">

				<div class="row">
					<div class="columns large-6">
						<h1 class="section-title"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></h1>
					</div>
					<div class="columns large-6 text-right">
						<button class="button medium">Leave a Comment</button>
					</div>
				</div>

				<ol class="comment-list">
					<?php wp_list_comments(array('type' => 'comment', 'callback' => 'jrc_post_comments')); ?>
				</ol>

				<?php  } else { // this is displayed if there are no comments so far ?>

				<?php if ( comments_open() ) : ?>
						<!-- If comments are open, but there are no comments. -->

				<?php else : // comments are closed ?>

				<!-- If comments are closed. -->
				<p class="nocomments"><?php _e("Comments are closed.", "bonestheme"); ?></p>

				<?php endif; ?>

<?php } ?>

<?php if( have_comments()) { ?>
			</div>
		</div>
	</div>
<?php } ?>

<div class="comment-reply">
	<div class="row">
		<div class="columns large-8">
			<?php if ( comments_open() ) : ?>

				<h1 class="section-title"><?php comment_form_title( __('Leave a Comment', 'bonestheme'), __('Leave a Reply to %s', 'bonestheme' )); ?></h1>

				<div id="cancel-comment-reply">
					<p class="small"><?php cancel_comment_reply_link(); ?></p>
				</div>

				<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
					<div class="alert alert-help">
						<p><?php printf( __('You must be %1$slogged in%2$s to post a comment.', 'bonestheme'), '<a href="<?php echo wp_login_url( get_permalink() ); ?>">', '</a>' ); ?></p>
					</div>
				<?php else : ?>

				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<?php if ( is_user_logged_in() ) : ?>

				<p class="comments-logged-in-as"><?php _e("Logged in as", "bonestheme"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account", "bonestheme"); ?>"><?php _e("Log out", "bonestheme"); ?> <?php _e("&raquo;", "bonestheme"); ?></a></p>

				<?php else : ?>

				<div class="row">
					<p>
						<div class="columns large-6">
							<label for="author"><?php _e("Name", "bonestheme"); ?> <?php if ($req) _e("*"); ?></label>
							<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e('Name', 'bonestheme'); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
						</div>
						<div class="columns large-6">
							<label for="email"><?php _e("Email", "bonestheme"); ?> <?php if ($req) _e("*"); ?></label>
							<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e('Email', 'bonestheme'); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
						</div>
					</p>
				</div>
				<div class="row">
					<p>
						<div class="columns">
								<label for="comment">Comment</label>
								<textarea name="comment" id="comment" placeholder="<?php _e('Your Comment here...', 'bonestheme'); ?>" tabindex="3"></textarea>
						</div>
					</p>
				</div>

				<?php endif; ?>

				<p>
					<input name="submit" type="submit" id="submit" class="button" tabindex="5" value="<?php _e('Submit Comment', 'bonestheme'); ?>" />
					<?php comment_id_fields(); ?>
				</p>

				<?php do_action('comment_form', $post->ID); ?>

				</form>

				<?php endif; // If registration required and not logged in ?>

			<?php endif; // if you delete this the sky will fall on your head ?>

		</div>
	</div>
</div>
