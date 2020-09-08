<?php 

/*

Template Name: About Template

*/

?>
<?php get_header(); ?>
<?php the_post(); ?>
    <main class="about internal-page">
        <div class="auto-container">
            <div class="about__landscape">
                <div class="about__1">
                    <div class="about__1-photo">
                        <img src="<?php echo bloginfo('template_directory');?>/images/about-photo-1.jpg" alt="Tom Landscape" />
                    </div>
                    <div class="about__1-content internal__content">
                        <div class="internal-title">
                            <h3>Your landscape</h3>
                            <h5>- A place full of joy, happiness, and good memories.</h5>
                        </div>

                        <p>
                            <span>Tom's Landscape & Maintenance</span> provides a full range of landscaping services to residential and commercial customers. We take pride in delivering consistently excellent results throughout the lifecycle of the landscape.
                            Our professionals are dedicated to creating and installing landscapes that are environmentally friendly and constructed with the best possible materials
                        </p>
                    </div>
                </div>
                <div class="about__2">
                    <div class="about__2-content internal__content">
                        <p>
                            From forward-thinking conception, constructive design to the installation and maintenance, we can assure excellence and accountability at every step of the process. Our guarantees to you:
                        </p>
                        <ul>
                            <li>We are Licensed, Insured, and Bonded</li>
                            <li>We only deliver "Quality work"</li>
                            <li>Safety is our highest priority</li>
                            <li>Communication is Key</li>
                            <li>24/7 Support services</li>
                        </ul>
                    </div>
                    <div class="about__2-photo">
                        <img src="<?php echo bloginfo('template_directory');?>/images/about-photo-2.jpg" alt="" />
                    </div>
                </div>
                <div class="about__3">
                    <div class="about__3-photo">
                        <img src="<?php echo bloginfo('template_directory');?>/images/about-img-3.png" alt="" />
                    </div>
                    <div class="about__3-content internal__content">
                        <p>
                            If you're interested in learning more about our landscaping services for homeowners and businesses,
                            <span>Tom's Landscape & Maintenance</span> will entice you to fully enjoy your "dreaming" outdoor space
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>
