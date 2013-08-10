<?php get_header(); ?>
<div class="show-hide-1 row m-mobile-menu">
    <div class="columns text-center">
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </div>
</div>
<header class="hero-bg" id="home-banner">
    <div class="row main-logo">
            <div class="columns large-3 logo small-9">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/logos/logo-white.svg" alt="logo" id="logo" /></a>
                <script>
                    if(!Modernizr.svg) {
                        jQuery("#logo").attr('src', 'img/assets/logos/logo-white.png');
                    }
                </script>    
            </div>
            <div class="columns large-9 text-right nav hide-for-small">
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div>
            <div class="columns show-for-small small-3 nav">
                <ul>
                    <li>
                        <a class="show-hide-controller-1 home-controller">Menu</a>
                    </li>
                </ul>
            </div>
    </div>
    <div class="row hero">
            <div class="columns large-7 large-centered text-center" id="banner-text">
                    <h1>We build websites that engage.</h1>
            </div>
    </div>
</header>

