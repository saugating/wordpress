<?php
/**
 * Template Name: Accommodation Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */


$postid = get_the_ID();


get_header(); ?>


<div id="accommodation-page">
    <section class="common-banner-section">
        <div class="banner-slider">
            <div class="banner-slider">
                <?php
                $the_query = new WP_Query( array(
                    'post_type' => 'banner',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'banner_category',
                            'field' => 'slug',
                            'terms' => 'accomodation',
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
                            <div class="top-heading">
                                <h6><?php the_field( 'sub-title' )?></h6>
                            </div>
                            <div class="title">
                                <h2><?php the_field( 'title' )?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
    </section>

    <section class="common-title-section">

        <?php query_posts('post_type=page&p='.$postid.'');while (have_posts()): the_post(); ?>
        <div class="custom-container remove-bottom-padding small-width-container">
            <div class="section-title remove-bottom-margin">
                <div class="section-inner">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>

    </section>

    <section class="room-list-section">
        <div class="custom-container medium-width-container">
            <div class="common-room-container">
                <?php query_posts('post_type=room&posts_per_page=-1'); while(have_posts()): the_post(); ?>
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
    </section>
</div>



<?php get_footer(); ?>


