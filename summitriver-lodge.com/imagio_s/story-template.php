<?php
/**
 * Template Name: Story Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */


$postid = get_the_ID();


get_header(); ?>


<div id="about-page">
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
                        'terms' => 'story',
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


    <section class="about-section">
        <div class="custom-container medium-width-container">
            <div class="about-container">
                <div class="about-item">
                    <div class="block-container half-width">
                        <div class="block-item">
                            <div class="text-container">
                                <div class="title">
                                    <h5>THE HISTORY</h5>
                                </div>
                                <div class="content">
                                    <div class="image-container type-greyscale">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner_7.jpg" alt="">
                                    </div>
                                    <?php echo the_content(); ?>
                                    <?php /*the_field( 'history' )*/?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-item type-founder">
                    <div class="block-container">
                        <div class="block-item">
                            <div class="text-container">
                                <div class="content">
                                    <?php the_field( 'founder_message' )?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php /*if( get_field('restoration') ): */?><!--
                    <div class="about-item">
                        <div class="block-container">
                            <div class="block-item">
                                <div class="text-container">
                                    <div class="title">
                                        <h5>THE RESTORATION</h5>
                                    </div>
                                    <div class="content">
                                        <p>
                                            <?php /*the_field( 'restoration' )*/?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                --><?php /*endif; */?>
            </div>
        </div>
    </section>

<!--    <section class="background-section">
        <div class="custom-container full-width remove-top-bottom-padding">
            <div class="section-content">
                <div class="image-container">
                    <?php /*the_post_thumbnail('full'); */?>
                </div>
            </div>
        </div>
    </section>-->


    <?php /*if( get_field('founder_message') || get_field('story') || get_field('summit_today') || rwmb_meta( 'tia_gallery', array( 'size' => 'full' ) )) : */?>
<!--    <?php /*if( get_field('founder_message')): */?>
        <section class="about-section">
            <div class="custom-container medium-width-container">
                <div class="about-container">
                    <?php /*if( get_field('founder_message') ): */?>
                        <div class="about-item">
                            <div class="block-container type-author">
                                <div class="block-item">
                                    <div class="text-container">
                                        <div class="content">
                                            <?php /*the_field( 'founder_message' )*/?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php /*endif; */?>
                </div>
            </div>
        </section>
    --><?php /*endif; */?>
</div>



<?php get_footer(); ?>


