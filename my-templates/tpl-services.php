<?php 

/*

Template Name: Services Template

*/

?>
<?php get_header(); ?>
<?php the_post(); ?>
    <main class="services-page internal-page">
        <div class="auto-container">
            <div class="our__services">
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
                <div class="our__services-collum">
                    <div class="ser-photo">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                    <div class="ser-title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="ser-list internal__content">
                    <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                
            </div>
        </div>
    </main>
    <?php get_footer(); ?>
