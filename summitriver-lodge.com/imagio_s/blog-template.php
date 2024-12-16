<?php
/**
 * Template Name: Blog Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */


$postid = get_the_ID();


get_header(); ?>


<div id="blog-page">
    <section class="common-banner-section type-small">
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
                            'terms' => 'blog',
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

    <section class="blog-section">
        <div class="custom-container medium-width-container">
            <div class="common-box-container type-blog">
                <?php query_posts('post_type=post&posts_per_page=-1');  while(have_posts()): the_post(); ?>
                    <div class="box-item">
                        <div class="inner">
                            <div class="image-container">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('full');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-rectangle.jpg" />';
                                        }
                                    ?>
                                </a>
                            </div>


                            <div class="text-container">
                                <h6><?php the_field( 'date' )?> </h6>
                                <h3><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>


                                <div class="common-action type-center">
                                    <a href="<?php the_permalink(); ?>" class="co-btn type-underline">Learn More</a>
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


