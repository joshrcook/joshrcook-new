<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">

    <!-- Google Chrome Frame for IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- mobile meta (hooray!) -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/assets/favicon/logo-transparent-dark-grey-16x16.png">
    <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/assets/favicon/favicon.ico">
    <![endif]-->

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->

    <!-- drop Google Analytics Here -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXX-X']);
  _gaq.push(['_trackPageview','/404error/?url=' + document.location.pathname + document.location.search + '&ref=' + document.referrer]);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>    
<!-- end analytics -->

</head>

<body <?php body_class(); ?>>

<div class="fixed">
	<div class="show-hide-1 row m-mobile-menu">
		<div class="columns text-center">
			<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		</div>
	</div>
	<header class="l-header-internal l-top-bar">
		<div class="row">
			<div class="columns large-3 small-3">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/assets/logos/logo-white.svg" alt="logo" id="logo" />
					</a>
				</div>
				<script>
                    if(!Modernizr.svg) {
                        jQuery("#logo").attr('src', 'img/assets/logos/logo-white.png');
                    }
                </script> 
            </div>
            <div class="columns large-9 text-right hide-for-small">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</div>
			<div class="columns small-9 show-for-small text-right nav">
				<div class="menu-primary-navigation-container">
					<ul class="menu">
						<li class="menu-item">
								<a class="show-hide-controller-1">Menu</a>
						</li>
					</ul>	
				</div>
			</div>
		</div>
	</header>
</div>
<div class="clearfix"></div>