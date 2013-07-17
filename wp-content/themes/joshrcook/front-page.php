<?php get_header('home'); ?>

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
            <?php
            $works = get_posts(array(
                'post_type' => 'jrc_por',
                'posts_per_page' => 9999
            ));
            // print_r($works);
            ?>
            <ul data-orbit>
                <?php 
                if($works) {

                    foreach($works as $work_item) {
                        ?>
                        <li>
                            <a href="<?php echo get_permalink($work_item->ID); ?>"><?php echo get_the_post_thumbnail($work_item->ID, 'full'); ?></a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="columns text-center">
            <a href="<?php echo get_post_type_archive_link('jrc_por'); ?>"><button class="button main-button">More Work</button></a>
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
        <?php 
            $first_post = true;
            query_posts(array('post_type' => 'post', 'posts_per_page' => 4));
            if(have_posts()): while(have_posts()): the_post();
                if($first_post) { ?>
                    <div class="columns large-7 main-post">
                        <a href="<?php echo get_permalink(); ?>"><h2><?php echo get_the_title(get_the_ID()); ?></h2></a>
                        <p class="post-details">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date('M j, Y'); ?></time>&nbsp;/&nbsp;
                            <a href="<?php echo get_permalink(get_the_ID()); ?>"><span class="comments"><a href="#"><?php echo $post->comment_count; ?> Comments</a></span></a>&nbsp;/&nbsp;
                            <span class="category">Category: </span><span class="category-title"><a href="#"><?php the_terms(get_the_ID(), 'category'); ?></a></span> 
                        </p>
                        <p class="post-excerpt"><?php the_excerpt(); ?></p>
                    </div>
                    <div class="columns large-4 large-offset-1 post-list">
                <?php } else {
                // if the post isn't the first one
                ?>
                <div class="blog-listing">
                    <a href="<?php echo get_permalink(); ?>"><h3 class="blog-list-title"><?php the_title(); ?></h3></a>
                    <div class="post-details">
                        <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('M j, Y'); ?></time>
                    </div>
                </div>
                <?php
                }
                $first_post = false;
            endwhile;
            endif;
        ?>
        </div><!-- end .post-list div -->
    </div><!-- end row -->
    <div class="row">
        <div class="columns text-center">
            <a href="#">
                <button class="button main-button">Go to Blog</button>
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
                <a href="#" class="button medium main-button button-left">Plan a Project</a>
                <span class="or">or</span>
                <a href="#" class="button medium main-button button-right">Contact Us</a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>