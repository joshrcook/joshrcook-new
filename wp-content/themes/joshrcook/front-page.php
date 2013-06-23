<?php get_header('home'); ?>
<?php
?>

<section class="latest-work">
    <div class="row">
        <div class="columns text-center">
            <div class="hr-text">
                <h1 class="section-title">Latest Work</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="columns text-center">
            <ul data-orbit>
              <li>
                <img src="<?php echo get_template_directory_uri() . '/img/test/iMac-Mingei.png'; ?>" alt="">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri() . '/img/test/New-Hope-Responsive-3.jpg'; ?>" alt="">
              </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="columns text-center">
            <button class="button medium">More Work</button>
        </div>
    </div>
</section>
<section class="blog">
    <div class="row">
        <div class="columns text-center">
            <div class="hr-text">
                <h1 class="section-title">From the Blog</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="columns large-7 main-post">
            <h2>This is the title of the latest post</h2>
            <p class="post-details">
                <time datetime="2013-05-25">May 25, 2013</time>&nbsp;/&nbsp;
                <span class="comments"><a href="#">0 Comments</a></span>&nbsp;/&nbsp;
                <span class="category">Category: </span><span class="category-title"><a href="#">Rants N' Raves</a></span> 
            </p>
            <p class="post-excerpt">I just love to blog.  I can't tell you all about that but in this
                excellent mockup I'll tell you all about it. This is a sophisticated mockup that will give 
                my new site it's look and feel.  And since I have so much to say, maybe I should say it all
                right here.  Everyone loves to read text, don't they? I sure know I do. And once I get done
                reading the text, I'm always sure to go tell someone else about it. It's just something I 
                do. I would love to read more but I have the feeling that someone is about to cut me off...
                <a href="#">Read More</a>
            </p>
        </div>
        <div class="columns large-4 large-offset-1 post-list">
            <div class="blog-listing">
                <h3 class="blog-list-title">This is Another Title</h3>
                <div class="post-details">
                    <time datetime="2013-05-25">May 25, 2013</time>
                </div>
            </div>
            <div class="blog-listing">
                <h3 class="blog-list-title">This is Another Title</h3>
                <div class="post-details">
                    <time datetime="2013-05-25">May 25, 2013</time>
                </div>
            </div>
            <div class="blog-listing">
                <h3 class="blog-list-title">This is Another Title</h3>
                <div class="post-details">
                    <time datetime="2013-05-25">May 25, 2013</time>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="columns text-center">
            <a href="#">
                <button class="button">Go to Blog</button>
            </a>
        </div>
    </div>
</section>
<section class="why-us">
    <div class="row">
        <div class="columns text-center">
            <div class="hr-text">
                <h1 class="section-title">Why Us?</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="reason columns large-4">
            <div class="row">
                <div class="columns text-center">
                    <div class="icon">
                        <i class="icon-mobile-phone"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="columns text-center">
                    <h2 class="reason-title">Responsive</h2>
                </div>
            </div>
            <div class="row">
                <div class="columns text-center">
                    <p class="reason-text">We create responsive sites that adapt to all screen sizes, complete with swipe and touch functionality. Your site will look good and be usable on any device.</p>
                </div>
            </div>
        </div>
        <div class="reason columns large-4">
            <div class="row">
                <div class="columns text-center">
                    <div class="icon">
                        <i class="icon-cogs"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="columns text-center">
                    <h2 class="reason-title">Technology</h2>
                </div>
            </div>
            <div class="row">
                <div class="columns text-center">
                    <p class="reason-text">We always use the latest technologies to make sure that your site will be cutting-edge. Want to do something no one has ever done before? Let's do it!</p>
                </div>
            </div>
        </div>
        <div class="reason columns large-4">
            <div class="row">
                <div class="columns text-center">
                    <div class="icon">
                        <i class="icon-signal"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="columns text-center">
                    <h2 class="reason-title">Results</h2>
                </div>
            </div>
            <div class="row">
                <div class="columns text-center">
                    <p class="reason-text">Our sites have Search Engine Optimization built in, and they are designed to impress viewers. They use the latest technology to load faster and be more responsive to users.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="columns large-6 large-centered text-center">
            <div class="button-group">
                <a href="#" class="button medium">Plan a Project</a>
                <span class="or">or</span>
                <a href="#" class="button medium">Contact Us</a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>