<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/mystyle.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/about.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/js/fancybox/dist/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/fonts/fontawesome-pro/css/all.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/responsive.css" />
    <!-- <link rel="stylesheet" href="css/anwesome.css" /> -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/root.css" />
    <?php wp_head(); ?>
</head>
<header id="header">
    <div class="header__top">
        <div class="auto-container">
            <div class="header__top-wrapper">
                <div class="header__logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo bloginfo('template_directory');?>/images/Tom's-landscape-logo.png" alt="Tom's landscape logo" />
                    </a>
                </div>
                <div class="header__nav">
                <?php
    $args = array(
    'theme_location' => 'top-menu',
    'container' => '',
    'menu_id' => '',
    'menu_class' => 'nav-menu',
    );
    wp_nav_menu( $args );
?>
                </div>
                <div class="header__phone">
                    <div class="header__phone-inner">
                        <p>Call us today</p>
                        <a href="tel:+13037509752">303.750.9752</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__scroll">
        <div class="auto-container">
            <div class="header__top-wrapper">
                <div class="phone-mobile">
                    <a href="tel:+17035338777"><i class="fas fa-phone"></i></a>
                </div>
                <div class="header__logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo bloginfo('template_directory');?>/images/Tom's-landscape-logo.png" alt="Tom's landscape logo" />
                    </a>
                </div>
                <div class="header__nav">
                <?php
    $args = array(
    'theme_location' => 'top-menu',
    'container' => '',
    'menu_id' => '',
    'menu_class' => 'nav-menu',
    );
    wp_nav_menu( $args );
?>
                </div>
                <div class="menu-mobile">
                    <a class="link-panel"><span class="icon"></span></a>
                </div>
                <div class="header__phone">
                    <div class="header__phone-inner">
                        <p>Call us today</p>
                        <a href="tel:+13037509752">303.750.9752</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__banner <?php if(!is_front_page()) {echo "header__internal";} ?>">
        <div class="header__banner-top">
            <div class="social-media">
                <div class="box-tranform">
                    <p>Follow us</p>
                    <?php dynamic_sidebar( 'social' ); ?>
                </div>
            </div>
            <?php if(is_front_page()) { ?>
            <div class="header__banner-photo">
                <div class="banner__wrap">
                    <div class="h__photo">
                        <img src="<?php echo bloginfo('template_directory');?>/images/Tom's-landscape-home-banner.jpg" alt="Tom’s Landscape & Maintenance" class="is_desktop" />
                        <img src="<?php echo bloginfo('template_directory');?>/images/Tom's-landscape-home-banner-mobile-1.jpg" alt="Tom’s Landscape & Maintenance" class="is_mobile" />
                    </div>
                    <div class="h__content">
                        <h6>From Design to Installation</h6>
                        <h3>we are your perfect</h3>
                        <h3>Landscape Renovation!</h3>
                    </div>
                </div>
                <div class="banner__wrap">
                    <div class="h__photo">
                        <img src="<?php echo bloginfo('template_directory');?>/images/Tom's-landscape-home-banner.jpg" alt="Tom’s Landscape & Maintenance" class="is_desktop" />
                        <img src="<?php echo bloginfo('template_directory');?>/images/Tom's-landscape-home-banner-mobile-1.jpg" alt="Tom’s Landscape & Maintenance" class="is_mobile" />
                    </div>
                    <div class="h__content">
                        <h6>From Design to Installation</h6>
                        <h3>we are your perfect</h3>
                        <h3>Landscape Renovation!</h3>
                    </div>
                </div>
            </div>
            <?php } elseif(has_post_thumbnail()) { ?>
                <div class="banner__internal">
                <div class="banner__wrap">
                    <div class="h__photo" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Tom’s Landscape & Maintenance" />
                    </div>
                    <div class="h__content">
                        <!-- <h6>Where to find us</h6>
                        <h3>contact us</h3> -->
                        <?php echo get_the_excerpt(); ?>
                    </div>
                </div>
            </div>
                <?php }; ?>
        </div>
        <?php if(is_front_page()) { ?>
        <div class="header__banner-bottom">
            <div class="header__note">
                <ul>
                    <li>We Service 7 Days A Week</li>
                    <li>All Work Guaranteed</li>
                    <li>Lowest Prices</li>
                </ul>
            </div>
            <div class="header__arrow">
                <div class="header__arrow-arrow">
                    <a href="javascript:void(0)" id="banner-prev" class="btn-slick prev">
                    </a>

                    <a href="javascript:void(0)" id="banner-next" class="btn-slick next"></a>
                </div>
            </div>
        </div>
        <?php }; ?>
    </div>
</header>

<body <?php echo body_class( '' ); ?>>
