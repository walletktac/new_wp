<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gravity_karol
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Start homepage content -->
        <div class="main-page">
            <div class="main-baner">
                <h1>Join the force</h1>
                <p>Join our newsletter a receive free updates</p>
            </div>

            <section id="s1">
                <div class="wrapper section-icons">
                    <div class="item-icon">
                        <div class="item-icon__header"><i class="flaticon-responsive"></i></div>
                        <div class="item-icon__body">
                            <span>mobile firendly</span>
                            <p>
                                Excepteur sinto occaecat cupidatat non proident, sunt in culpa qui nam sint essent officia mollit.
                            </p>
                        </div>
                    </div>
                    <div class="item-icon">
                        <div class="item-icon__header"><i class="flaticon-union"></i></div>
                        <div class="item-icon__body">
                            <span>mobile firendly</span>
                            <p>
                                Excepteur sinto occaecat cupidatat non proident, sunt in culpa qui nam sint essent officia mollit.
                            </p>
                        </div>
                    </div>
                    <div class="item-icon">
                        <div class="item-icon__header"><i class="flaticon-shield"></i></div>
                        <div class="item-icon__body">
                            <span>mobile firendly</span>
                            <p>
                                Excepteur sinto occaecat cupidatat non proident, sunt in culpa qui nam sint essent officia mollit.
                            </p>
                        </div>
                    </div>
                </div>

            </section>


            <section id="s2">
                <div class="about-us wrapper">
                    <h2>What our clients think about us</h2>

                    <div class="slider-about-us">


                        <?php /* reference */ ?>

                        <?php $reference = new WP_Query('category_name=reference&posts_per_page=3'); ?> 

                        <?php while ($reference->have_posts()) : $reference->the_post(); ?>

                            <div class="item-slider">
                                <div class="item-comment">
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                                <div class="item-author">
                                    <p>Author: <span><?php the_title(); ?></span></p>

                                </div>
                            </div>

                        <?php endwhile; ?>

                    </div>

                </div>
            </section>
            <section id="s3">
                <div class="learn-more">
                    <video muted loop id="myVideo" poster="<?php echo get_template_directory_uri(); ?>/images/poster.jpg">
                        <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
                    </video>

                    <div class="content">
                        <h2>Learn more about Gravity</h2>
                        <p>Excepteur sinto occaecat cupidatat non proident, sunt in culpa qui nam sint essent officia mollit.</p>
                        <button id="playBtn"><i class='flaticon-play'></i></button>
                    </div>
                </div>
            </section>
            <section id="s4">
                <div class="the-team wrapper">
                    <h2>the team</h2>
                    <div class="team-content">

                        <?php /* TEAM */ ?>

                        <?php $myteam = new WP_Query('category_name=team-players&posts_per_page=4'); ?> 

                        <?php while ($myteam->have_posts()) : $myteam->the_post(); ?>

                            <div class="item-team">
                                <div class="team-player__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="player-name">
                                    <p><?php the_title(); ?></p>
                                    <p><?php echo get_post_meta($post->ID, 'profession', true) ?></p>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    </div>
                </div>
            </section>
            <section id="s5">
                <div class="gallery wrapper">
                    <h2>Gallery</h2>
                    <div class="gallery-masonry">


                        <?php /* Gallery */ ?>

                        <?php $mygallery = new WP_Query('category_name=gallery&posts_per_page=8'); ?> 

                        <?php while ($mygallery->have_posts()) : $mygallery->the_post(); ?>

                            <figure class="item-masonry" data-src="<?php the_post_thumbnail_url('full'); ?>  " >
                                <?php the_post_thumbnail('thumbnail', array('class' => 'item-masonry__img')); ?>
                            </figure>

                        <?php endwhile; ?>

                    </div>
                </div>
            </section>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
