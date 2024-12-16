<?php
/**
 * Template Name: Dining Template
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
                        'terms' => 'dining',
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
                <div class="section-title remove-bottom-margin add-bottom-border">
                    <div class="section-inner">
                        <div class="title content">
                            <?php the_content(); ?>
                        </div>
                        <div class="action">
                            <?php the_field('opening_hours'); ?>

                            <?php if( get_field('menu_pdf') ): ?>
                                <a href="<?php the_field('menu_pdf');?>" class="co-btn type-large-font type-underline" target="_blank">View Menu</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>

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

    <!--<section class="menu-section">
        <div class="custom-container remove-top-padding medium-width-container">
            <div class="section-title">
                <div class="menu-nav">
                    <ul class="nav nav-tabs common-remove-tab-style">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">
                                <h5>Dinner Menu</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">
                                <h5>Lunch Menu</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="menu-content">
                <div class="tab-pane active" id="home">
                    <div class="common-menu-container">
                        <h5>Starters</h5>
                        <ul>
                            <li>Spinach & fennel soup<span>£7.5</span></li>
                            <li>Speck, kohlrabi, fennel & hazelnut<span>£7.5</span></li>
                            <li>Cod’s roe, egg, anchovy & a manchet<span>£7.5</span></li>
                            <li>Grilled calçots, romesco & picada<span>£7.5</span></li>
                            <li>Burrata, monk’s beard & bottarga<span>£7.5</span></li>
                        </ul>
                    </div>

                    <div class="common-menu-container">
                        <h5>Starters</h5>
                        <ul>
                            <li>Spinach & fennel soup<span>£7.5</span></li>
                            <li>Speck, kohlrabi, fennel & hazelnut<span>£7.5</span></li>
                            <li>Cod’s roe, egg, anchovy & a manchet<span>£7.5</span></li>
                            <li>Grilled calçots, romesco & picada<span>£7.5</span></li>
                            <li>Burrata, monk’s beard & bottarga<span>£7.5</span></li>
                        </ul>
                    </div>

                    <div class="common-menu-container">
                        <h5>Starters</h5>
                        <ul>
                            <li>Spinach & fennel soup<span>£7.5</span></li>
                            <li>Speck, kohlrabi, fennel & hazelnut<span>£7.5</span></li>
                            <li>Cod’s roe, egg, anchovy & a manchet<span>£7.5</span></li>
                            <li>Grilled calçots, romesco & picada<span>£7.5</span></li>
                            <li>Burrata, monk’s beard & bottarga<span>£7.5</span></li>
                        </ul>
                    </div>
                </div>

                <div class="tab-pane fade" id="menu1">
                    <div class="common-menu-container">
                        <h5>Starters</h5>
                        <ul>
                            <li>Spinach & fennel soup<span>£7.5</span></li>
                            <li>Speck, kohlrabi, fennel & hazelnut<span>£7.5</span></li>
                            <li>Cod’s roe, egg, anchovy & a manchet<span>£7.5</span></li>
                            <li>Grilled calçots, romesco & picada<span>£7.5</span></li>
                            <li>Burrata, monk’s beard & bottarga<span>£7.5</span></li>
                        </ul>
                    </div>

                    <div class="common-menu-container">
                        <h5>Starters</h5>
                        <ul>
                            <li>Spinach & fennel soup<span>£7.5</span></li>
                            <li>Speck, kohlrabi, fennel & hazelnut<span>£7.5</span></li>
                            <li>Cod’s roe, egg, anchovy & a manchet<span>£7.5</span></li>
                            <li>Grilled calçots, romesco & picada<span>£7.5</span></li>
                            <li>Burrata, monk’s beard & bottarga<span>£7.5</span></li>
                        </ul>
                    </div>

                    <div class="common-menu-container">
                        <h5>Starters</h5>
                        <ul>
                            <li>Spinach & fennel soup<span>£7.5</span></li>
                            <li>Speck, kohlrabi, fennel & hazelnut<span>£7.5</span></li>
                            <li>Cod’s roe, egg, anchovy & a manchet<span>£7.5</span></li>
                            <li>Grilled calçots, romesco & picada<span>£7.5</span></li>
                            <li>Burrata, monk’s beard & bottarga<span>£7.5</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
</div>



<?php get_footer(); ?>


