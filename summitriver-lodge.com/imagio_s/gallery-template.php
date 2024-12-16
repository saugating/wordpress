<?php
/**
 * Template Name: Gallery Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */


$postid = get_the_ID();


get_header(); ?>


<div id="common-page">
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
                        'terms' => 'gallery',
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
                                <h6><?php the_field( 'title' )?></h6>
                            </div>
                            <div class="title">
                                <h2><?php the_field( 'sub-title' )?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </section>


    <section class="common-gallery-section">
        <div class="custom-container">
            <div class="gallery-container">
                <?php
                $images = rwmb_meta( 'tia_gallery', array( 'size' => 'full' ) );
                foreach ( $images as $image ) {  ?>
                    <div class="gallery-item">
                        <div class="inner">
                            <a href="<?php echo $image['url']?>" data-lightbox="photo-gallery" data-title="">
                                <img src="<?php echo $image['url']?>">
                            </a>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

</div>



<?php get_footer(); ?>


