<?php 

/*

Template Name: Contact Template

*/

?>
<?php get_header(); ?>
<?php the_post(); ?>
    <main class="contact-page internal-page">
        <div class="auto-container">
            <div class="contact__wrapper">
                <div class="contact-top">
                    <div class="contact__detail">
                        <div class="contact__detail-title">
                            <h3>Contact details</h3>
                        </div>
                        <div class="contact__detail-contact callme">
                            <div class="callme__text">
                                <span>Please Call anytime</span>
                                <p>Tom Truong</p>
                            </div>
                            <div class="callme__phone">
                                <p>Bus <a href="tel:+13037509752 ">303.750.9752</a></p>
                                <p>Cell<a href="tel:+13037102213 ">303.710.2213</a></p>
                            </div>
                        </div>
                        <div class="contact__detail-services">
                            <ul>
                                <li>We Service 7 Days A Week</li>
                                <li>Licensed * Insured * Bonded</li>
                                <li>All Work Guaranteed</li>
                                <li>Lowest Prices</li>
                                <li>Free Estimates</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact__photo">
                        <img src="<?php echo bloginfo('template_directory');?>/images/contact-photo-1.jpg" alt="" />
                    </div>
                </div>
                <div class="free-est">
                    <ul>
                        <h5>Free Estimates</h5>
                        <li>Experienced</li>
                        <li>References</li>
                        <li>Dependable</li>
                        <li>Licensed</li>
                        <li>Bonded</li>
                        <li>Insured</li>
                    </ul>
                </div>
                <div class="contact__form">
                <?php echo do_shortcode( '[contact-form-7 id="61" title="Contact form"]' ); ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
