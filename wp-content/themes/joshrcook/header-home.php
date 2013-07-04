<?php get_header(); ?>

<header class="hero-bg" id="home-banner">
    <div class="row main-logo">
            <div class="columns large-3 logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/logos/logo-white.svg" alt="logo" id="logo" /></a>
                <script>
                    if(!Modernizr.svg) {
                        jQuery("#logo").attr('src', 'img/assets/logos/logo-white.png');
                    }
                </script>    
            </div>
            <div class="columns large-9 text-right nav">
                    <ul class="nav">
                        <?php 
                            print_nav_menu($post->ID);
                        ?>
                </ul>
            </div>
    </div>
    <div class="row hero">
            <div class="columns large-7 large-centered text-center" id="banner-text">
                    <h1>We build websites that engage.</h1>
            </div>
    </div>
</header>

