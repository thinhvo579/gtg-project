<?php 

/*

Template Name: Portfolio Template

*/

?>
<?php get_header(); ?>
<?php the_post(); ?>
    <main class="portfolio-page internal-page">
        <!-- <div class="auto-container"> -->
        <div class="portfolio__wrapper">
            <div class="p__row">
                <div class="p__collum collum-25">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-1-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-1.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="p__collum collum-25">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-2-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-2.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="p__collum collum-50">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-3-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-3.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="p__row">
                <div class="p__collum collum-50">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-4-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-4.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="p__collum collum-25">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-5-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-5.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="p__collum collum-25">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-6-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-6.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="p__row">
                <div class="p__collum collum-25">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-7-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-7.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="p__collum collum-25">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-8-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-8.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="p__collum collum-50">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-9.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-9.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="p__row">
                <div class="p__collum collum-50">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-10-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-10.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="p__collum collum-25">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-11-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-11.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="p__collum collum-25">
                    <div class="p__collum-photo">
                        <a href="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-12-p.jpg">
                            <img src="<?php echo bloginfo('template_directory');?>/images/gallery/portfolio-12.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </main>
<?php get_footer(); ?>