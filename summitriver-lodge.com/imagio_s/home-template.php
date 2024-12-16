<?php
/**
 * Template Name: Home Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */


$postid = get_the_ID();


get_header(); ?>


<div id="home-page">

    <section class="common-banner-section">
        <div class="banner-slider">
            <?php
            $the_query = new WP_Query( array(
                'post_type' => 'banner',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'banner_category',
                        'field' => 'slug',
                        'terms' => 'home',
                    )
                ),
            ) );
            while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                <div class="banner-item">
                    <?php the_post_thumbnail('full'); ?>
                    <img src="<?php the_field( 'mobile_thumbnail' )?>" class="type-mobile">
                    <div class="text-container">
                        <div class="custom-container">
                            <div class="common-banner-title">
                                <div class="title">
                                    <h1><?php the_field( 'title' )?></h1>
                                </div>
                                <div class="content">
                                    <p><?php the_field( 'sub-title' )?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </section>


    <section class="about-section">
        <div class="custom-container remove-bottom-padding">
            <div class="section-title add-bottom-border">
                <div class="section-inner type-small">
                    <div class="title">
                        <h3><?php the_field( 'about_title', $postid )?></h3>
                    </div>
                    <div class="content">
                        <?php the_field( 'about_content', $postid )?>
                    </div>
                </div>
            </div>

            <div class="section-container">
                <div class="category-container">
                    <?php query_posts('post_type=page&p=15');while (have_posts()): the_post(); ?>
                        <div class="category-item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="inner">
                                    <div class="image-container">
                                        <img src="<?php the_field( 'image', 15 )?>" alt="">
                                    </div>
                                    <div class="text-container">
                                        <h6><?php the_field( 'cat', 15 )?></h6>
                                        <h3><?php the_field( 'title', 15 )?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>

                    <?php query_posts('post_type=page&p=17');while (have_posts()): the_post(); ?>
                        <div class="category-item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="inner">
                                    <div class="image-container">
                                        <img src="<?php the_field( 'image', 17 )?>" alt="">
                                    </div>
                                    <div class="text-container">
                                        <h6><?php the_field( 'cat', 17 )?></h6>
                                        <h3><?php the_field( 'title', 17 )?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>

                    <?php query_posts('post_type=page&p=10');while (have_posts()): the_post(); ?>
                        <div class="category-item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="inner">
                                    <div class="image-container">
                                        <img src="<?php the_field( 'image', 10 )?>" alt="">
                                    </div>
                                    <div class="text-container">
                                        <h6><?php the_field( 'cat', 10 )?></h6>
                                        <h3><?php the_field( 'title', 10 )?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>


                </div>

                <div style="clear: both;">

                </div>
            </div>
        </div>
    </section>

    <section class="events-section">
        <div class="custom-container">
            <div class="section-title type-center">
                <h3><?php the_field( 'events_title' )?> </h3>
            </div>

            <div class="section-container">
                <div class="common-box-container type-home">
                    <?php query_posts('post_type=post&category_name=featured&posts_per_page=2');  while(have_posts()): the_post(); ?>
                        <div class="box-item">
                            <div class="inner">
                                <div class="image-container">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full'); ?>
                                    </a>
                                </div>


                                <div class="text-container">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                                    </h4>
                                    <p><?php echo wp_trim_words( get_the_content(), 200, '...' ); ?></p>

                                    <div class="common-action type-center">
                                        <a href="<?php the_permalink(); ?>" class="co-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="room-section" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/elements/contour.svg');">
        <div class="custom-container">
            <div class="section-title type-white add-bottom-border type-room">
                <div class="title content">
                    <h6>Accommodation</h6>
                    <?php the_field( 'accommodation_sub_title', $postid )?>
                </div>
            </div>

            <div class="section-content">
                <div class="common-room-container add-slider">
                    <?php query_posts('post_type=room&posts_per_page=3'); while(have_posts()): the_post(); ?>
                        <div class="room-list">
                            <div class="inner">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image-container">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </a>
                                <div class="text-icon-container">
                                    <div class="text-container">
                                        <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                                        <?php the_field( 'intro_text' )?>
                                    </div>

                                    <div class="icon-container">
                                        <ul>
                                            <?php if ( 'true' == get_field('wifi') ): ?>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/wifi.svg" alt="">
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( 'true' == get_field('led_television') ): ?>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/tv.svg" alt="">
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( 'true' == get_field('air_conditioning') ): ?>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/ac.svg" alt="">
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( 'true' == get_field('hair_dryer') ): ?>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/dryer.svg" alt="">
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( 'true' == get_field('king_size_bed') ): ?>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/kingsize-bed.svg" alt="">
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( 'true' == get_field('balcony') ): ?>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/balcony.svg" alt="">
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( 'true' == get_field('wardrobe') ): ?>
                                                <li>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/wardrobe.png" alt="">
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="location-section">
        <div class="custom-container medium-width-container">
            <div class="section-title type-center">
                <div class="section-inner">
                    <h3><?php the_field( 'location_title', $postid )?></h3>
                    <div class="content">
                        <?php the_field( 'location_sub_text', $postid )?>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="image-container">
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14108.481126036915!2d84.61069729542788!3d27.876954780723928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399521d15a75d503%3A0x4c0f0d64cbd2dc2e!2sSummit%20River%20Lodge!5e0!3m2!1sen!2snp!4v1646287612519!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                    <img src="<?php the_field( 'location_image', $postid )?>">
                </div>
            </div>
        </div>
    </section>

    <section class="common-testimonial-section">
        <div class="custom-container remove-top-padding">
            <div class="testimonial-container">
                <?php query_posts('post_type=testimonial&posts_per_page=-1'); while(have_posts()): the_post(); ?>
                    <div class="testimonial-item">
                        <div class="text-container">
                            <div class="title">
                                <h4><?php echo the_title(); ?></h4>
                            </div>
                            <div class="content">
                                <?php echo the_content(); ?>
                            </div>
                            <div class="name">
                                <h6>- <?php the_field( 'author_name' )?></h6>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/trip-advisor.png">
                        </div>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>

    <section class="common-instagram-section">
        <div class="custom-container remove-top-bottom-padding full-width">
            <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/d3e7a9b4330e5bdba5f3358aa730452f.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
        </div>
    </section>
</div>



<?php get_footer(); ?>


