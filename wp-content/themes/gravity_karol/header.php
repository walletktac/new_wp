<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gravity_karol
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <title>gravity - new_wp</title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Shadows+Into+Light" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css" />
        
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'gravity_karol'); ?></a>

            <header>
                <div class="wrapper header">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""/>
                    </a><!-- .site-branding -->

                    <nav role="navigation">
                        <h2>Main navigation</h2>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                        ));
                        ?>
                    </nav><!-- #site-navigation -->
                    
                    
                    <nav class="social-nav">
                        <h2>Social menu</h2>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'social',
                            'menu_id' => 'social-menu',
                        ));
                        ?>
                    </nav>
                    <!--                <ul class="social-nav">
                                        <li><a href=""><i class="flaticon-facebook-logo-button"></i></a></li>
                                        <li><a href=""><i class="flaticon-twitter-logo-button"></i></a></li>
                                        <li><a href=""><i class="flaticon-google-plus-logo-button"></i></a></li>
                                    </ul>--><!-- .social menu -->
                    
                </div><!-- .wrapper -->
            </header><!-- header -->

            <div id="content" class="site-content main-page">
