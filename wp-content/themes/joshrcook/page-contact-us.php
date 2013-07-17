<?php
/* 
	Template Name: Contact Page
*/
?>
<?php get_header('internal'); ?>

<section class="internal">
	<div class="row first">
		<div class="columns">
			<h1>Contact Us</h1>
		</div>
	</div>
	<div class="row">
		<div class="columns large-6">
			<?php get_template_part('content', 'page'); ?>
		</div>
		<div class="columns large-5 large-offset-1">
			<p class=" contact-details">
				<i class="icon-phone"></i><a href="tel:+13042829275">304-282-9275</a>
			</p>
			<p class="contact-details">
				<i class="icon-envelope"></i><a href="mailto:jcook@joshrcook.com">jcook@joshrcook.com</a>
			</p>
			<p class="contact-paragraph">
				We love to build great sites, but more than that, we love to see people have great online experiences.  We bring
				not only experience to the table, but also a passion for making your life easier.  Contact us and see what we can
				do for you!
			</p>
		</div>
	</div>
</section>
<?php get_footer(); ?>