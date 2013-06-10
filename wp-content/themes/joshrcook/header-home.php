<?php get_header(); ?>
<header class="hero-bg">
<div class="row main-logo nav">
	<div class="columns large-3">
		
	</div>
	<div class="columns large-9 text-right">
		<ul class="nav">
			<?php 
	                
	        $menu_items = get_nav_menu_items('main-nav');
	        global $post;
	        // echo '<pre>' . print_r($menu_items, 1) . '</pre>';
	        foreach($menu_items as $menu_item) {
	            echo '<li';
	            if(isset($post->ID) && $post->ID == $menu_item->object_id) {
	                echo ' class="selected no-js"';
	            }
	                echo '><a class="button secondary" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
	        }
	        ?>
	    </ul>
	</div>
</div>
<div class="row hero">
	<div class="columns large-6 large-centered text-center">
		<h1>We build websites that engage.</h1>
	</div>
</div>
</header>

