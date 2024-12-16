<?php
/**
 * Template Name: Experience Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */


$postid = get_the_ID();


get_header(); ?>


<div id="experience-page">
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
                        'terms' => 'experiences',
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


    <?php query_posts('post_type=page&p='.$postid.'');while (have_posts()): the_post(); ?>
    <section class="common-title-section">
        <div class="custom-container remove-bottom-padding small-width-container">
            <div class="section-title remove-bottom-margin">
                <div class="section-inner">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; wp_reset_query(); ?>

    <section class="experiences-section">
        <div class="custom-container">
            <div class="common-experience-container">
                <?php query_posts('post_type=experiences&posts_per_page=-1'); while(have_posts()): the_post(); ?>
                <div class="experience-item">
                    <div class="block-container">
                        <div class="block-item">
                            <div class="image-container">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        </div>
                        <div class="block-item">
                            <div class="text-container">
                                <div class="title">
                                    <h4><?php echo the_title(); ?></h4>
                                </div>
                                <div class="content">
                                    <?php echo the_content(); ?>
                                </div>
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


