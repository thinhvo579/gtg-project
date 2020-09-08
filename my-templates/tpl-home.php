<?php 

/*

Template Name: Home Template

*/

?>
<?php get_header(); ?>
<?php the_post(); ?>
    <main id="page" class="homepage">
        <div class="maintenance">
            <div class="auto-container">
                <div class="maintenance__content">
                    <div class="maintenance__content-title first-title">
                        <p>Welcome to</p>
                        <h3>Tom’s Landscape & Maintenance</h3>
                    </div>
                    <div class="maintenance__content-list flex">
                        <div class="list__row collum-30">
                            <div class="row__n flex">
                                <div class="list__row-icon">
                                    <img src="<?php echo bloginfo('template_directory');?>/images/main-list-icon-1.png" alt="" />
                                </div>
                                <div class="list__row-name">
                                    <h6>Concept</h6>
                                </div>
                            </div>
                            <div class="row__n flex">
                                <div class="list__row-icon">
                                    <img src="<?php echo bloginfo('template_directory');?>/images/main-list-icon-2.png" alt="" />
                                </div>
                                <div class="list__row-name">
                                    <h6>Design</h6>
                                </div>
                            </div>
                            <div class="row__n flex">
                                <div class="list__row-icon">
                                    <img src="<?php echo bloginfo('template_directory');?>/images/main-list-icon-3.png" alt="" />
                                </div>
                                <div class="list__row-name">
                                    <h6>Installation</h6>
                                </div>
                            </div>
                            <div class="row__n flex">
                                <div class="list__row-icon">
                                    <img src="<?php echo bloginfo('template_directory');?>/images/main-list-icon-4.png" alt="" />
                                </div>
                                <div class="list__row-name">
                                    <h6>Maintenance</h6>
                                </div>
                            </div>
                        </div>
                        <div class="list__row collum-70">
                            <p>
                                Dreaming of an outdoor living space that can connect you with Nature? Or craving for a landscape that truly represents you?
                            </p>
                            <p>
                                <span>Tom’s Landscape & Maintenance</span> offers complete professional landscaping services for both residential and commercial properties.
                            </p>
                            <p>
                                Share your perspective on how you live or work, our experienced and skilled team will transform your landscape to a unique, beautiful, and functional part as desired.
                            </p>
                            <p>
                                Ready to enhance your outdoor spaces, please contact us for a consultation!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ourwork">
            <div class="auto-container">
                <div class="ourwork-title first-title">
                    <h3>our work</h3>
                </div>
                <div class="ourwork__slide">
                    <div class="collum-photo">
                    
                        <div class="work-photo">
                            <img src="<?php echo bloginfo('template_directory');?>/images/ourwork-photo-1.jpg" alt="Tom’s Landscape & Maintenance " class="is_desktop" />
                            <img src="<?php echo bloginfo('template_directory');?>/images/ourwork-photo-mobile-2.jpg" alt="Tom’s Landscape & Maintenance " class="is_mobile" />
                        </div>
                        <div class="work-photo">
                            <img src="<?php echo bloginfo('template_directory');?>/images/ourwork-photo-2.jpg" alt="Tom’s Landscape & Maintenance " class="is_desktop" />
                            <img src="<?php echo bloginfo('template_directory');?>/images/ourwork-photo-mobile-2.jpg" alt="Tom’s Landscape & Maintenance " class="is_mobile" />
                        </div>
                        <div class="work-photo">
                            <img src="<?php echo bloginfo('template_directory');?>/images/ourwork-photo-1.jpg" alt="Tom’s Landscape & Maintenance " class="is_desktop" />
                            <img src="<?php echo bloginfo('template_directory');?>/images/ourwork-photo-mobile-2.jpg" alt="Tom’s Landscape & Maintenance " class="is_mobile" />
                        </div>
                        

                    </div>
                    <div class="collum-service">
                        <div class="click-title">
                        <?php  
    $args=array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => -1,
    );
?>
<?php $my_query = new WP_Query($args); ?>
<?php if( $my_query->have_posts() ) : ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="loop-title">
                                <h5><?php the_title(); ?></h5>
                            </div>
                            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
                        </div>
                        <div class="click-ser">
                        <? $args=array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => -1,
    );
?>
<?php $my_query = new WP_Query($args); ?>
<?php if( $my_query->have_posts() ) : ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="loop-ser">
                                
                            <?php the_content(); ?>
                            </div>
                            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
                        </div>
                        <div class="ser__arrow">
                            <div class="ser__arrow-arrow">
                                <a href="javascript:void(0) " id="ser-prev" class="btn-slick prev">
                                </a>

                                <a href="javascript:void(0) " id="ser-next" class="btn-slick next"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>