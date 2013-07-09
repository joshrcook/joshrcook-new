<footer>
    <section class="footer-upper">
        <div class="row">
            <?php if(dynamic_sidebar('Footer Left')) : else : endif; ?>
            <div class="columns large-4">
                <h1 class="footer-title">About Us</h1>
                <p class="footer-text">We are an awesome web agency. Want to know just how awesome? 
                Well, if you can't tell from the work above, then start a project with us. We're different. 
                We listen to your needs. We create exactly what you need and then some. And we go the 
                extra mile to make sure that everyone who uses your site will get the very best experience 
                possible.</p>
            </div>
            <div class="columns large-4">
                <h1 class="footer-title">Connect with Us</h1>
                <div class="social-icons">
                    <a href="https://www.facebook.com/joshua.cook.5648">
                        <div class="social facebook">
                            <i class="icon-facebook"></i>
                        </div>
                    </a>
                    <a href="https://twitter.com/joshrcook">
                        <div class="social twitter">
                            <i class="icon-twitter"></i>
                        </div>
                    </a>
                    <a href="https://github.com/joshrcook">
                        <div class="social github">
                            <i class="icon-github-alt"></i>
                        </div>
                    </a>
                    <a href="www.linkedin.com/pub/joshua-cook/44/14/290/">
                        <div class="social linked-in">
                            <i class="icon-linkedin"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-lower">
        <div class="row">
            <div class="columns large-6">
                <p class="copyright-line">Copyright <?php echo date('Y'); ?>, Josh R Cook Design</p>
            </div>
            <div class="columns large-6">
                <p class="copyright-line">Main photo courtesy of <a href="http://www.flickr.com/photos/smanography/">Shermeee</a></p>
            </div>
        </div>
    </section>
</footer>		
        <script>
            jQuery(document).foundation('orbit', {
                timer_speed: 3000,
                pause_on_hover: false
            });
        </script>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
