<?php
/**
 * Template Name: Products - Bedding Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */
$postid = get_the_ID();
get_header(); ?>

<div id="products-page">

  <section class="common-banner type-banner-small">
    <?php
    $the_query = new WP_Query( array(
        'post_type' => 'banner',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => 'banner_category',
                'field' => 'slug',
                'terms' => 'products',
            )
        ),
    ) );
    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
      <div class="banner-item">
      <div class="image-container">
        <?php the_post_thumbnail(''); ?>
      </div>
      <div class="text-container center">
        <div class="custom-container">
          <div class="section-container">
            <div class="section-title">
              <h1 class="type-white"><?php the_field( 'title' )?></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="background-overlay">
      </div>
    </div>
    <?php endwhile; wp_reset_query(); ?>
  </section>

  <section class="products-layout">
    <div class="custom-container">
      <div class="block-container">
        <div class="block-item shop-filter-block">
          <div class="section-container">
            <div class="close-shop-filter">
              <i class="fa-solid fa-chevron-left"></i>Close Filter
            </div>
            <div class="section-title">
              <h4>Categories</h4>
            </div>
            <div class="section-body">
              <ul>
                <li>
                  <a href="<?php echo site_url(); ?>/products/mattress/">Mattress</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/products/pillows/">Pillows</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/products/quilts/">Quilts</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/products/bedding-accessories/">Bedding Accessories</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="filter-btn">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon_filter.svg" alt="">
            Filter
          </div>
          <div class="common-tabs-container type-large">
            <div class="tabs-header">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="mattress-tab" data-toggle="tab" href="#mattress" role="tab" aria-controls="mattress" aria-selected="true">Duvets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pillows-tab" data-toggle="tab" href="#pillows" role="tab" aria-controls="pillows" aria-selected="false">Bedsheets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="cushions-tab" data-toggle="tab" href="#cushions" role="tab" aria-controls="cushions" aria-selected="false">Duvet Covers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="quilts-tab" data-toggle="tab" href="#quilts" role="tab" aria-controls="quilts" aria-selected="false">Pillowcases</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="topper-tab" data-toggle="tab" href="#topper" role="tab" aria-controls="topper" aria-selected="false">Topper & Protector</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="bolster-tab" data-toggle="tab" href="#bolster" role="tab" aria-controls="bolster" aria-selected="false">Cushions & Bolster</a>
                </li>
              </ul>
            </div>
            <div class="tabs-body type-small-padding">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="mattress" role="tabpanel" aria-labelledby="mattress-tab">
                  <div class="common-products-container">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product_category',
                                'field' => 'slug',
                                'terms' => 'duvet',
                            )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="common-card-item">
                        <div class="section-container">
                          <a href="<?php the_permalink(); ?>">
                            <div class="image-container">
                              <?php the_post_thumbnail('product_thumb'); ?>
                            </div>
                          </a>
                          <div class="text-container">
                            <div class="section-title">
                              <h5><?php the_title(''); ?></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
                <div class="tab-pane fade" id="pillows" role="tabpanel" aria-labelledby="pillows-tab">
                  <div class="common-products-container">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product_category',
                                'field' => 'slug',
                                'terms' => 'bedsheet',
                            )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="common-card-item">
                        <div class="section-container">
                          <a href="<?php the_permalink(); ?>">
                            <div class="image-container">
                              <?php the_post_thumbnail('product_thumb'); ?>
                            </div>
                          </a>
                          <div class="text-container">
                            <div class="section-title">
                              <h5><?php the_title(''); ?></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
                <div class="tab-pane fade" id="cushions" role="tabpanel" aria-labelledby="cushions-tab">
                  <div class="common-products-container">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product_category',
                                'field' => 'slug',
                                'terms' => 'duvet-cover',
                            )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="common-card-item">
                        <div class="section-container">
                          <a href="<?php the_permalink(); ?>">
                            <div class="image-container">
                              <?php the_post_thumbnail('product_thumb'); ?>
                            </div>
                          </a>
                          <div class="text-container">
                            <div class="section-title">
                              <h5><?php the_title(''); ?></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
                <div class="tab-pane fade" id="quilts" role="tabpanel" aria-labelledby="quilts-tab">
                  <div class="common-products-container">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product_category',
                                'field' => 'slug',
                                'terms' => 'pillowcase',
                            )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="common-card-item">
                        <div class="section-container">
                          <a href="<?php the_permalink(); ?>">
                            <div class="image-container">
                              <?php the_post_thumbnail('product_thumb'); ?>
                            </div>
                          </a>
                          <div class="text-container">
                            <div class="section-title">
                              <h5><?php the_title(''); ?></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
                <div class="tab-pane fade" id="topper" role="tabpanel" aria-labelledby="topper-tab">
                  <div class="common-products-container">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product_category',
                                'field' => 'slug',
                                'terms' => 'topper-protector',
                            )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="common-card-item">
                        <div class="section-container">
                          <a href="<?php the_permalink(); ?>">
                            <div class="image-container">
                              <?php the_post_thumbnail('product_thumb'); ?>
                            </div>
                          </a>
                          <div class="text-container">
                            <div class="section-title">
                              <h5><?php the_title(''); ?></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
                <div class="tab-pane fade" id="bolster" role="tabpanel" aria-labelledby="bolster-tab">
                  <div class="common-products-container">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product_category',
                                'field' => 'slug',
                                'terms' => 'cushion-bolster',
                            )
                        ),
                    ) );
                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="common-card-item">
                        <div class="section-container">
                          <a href="<?php the_permalink(); ?>">
                            <div class="image-container">
                              <?php the_post_thumbnail('product_thumb'); ?>
                            </div>
                          </a>
                          <div class="text-container">
                            <div class="section-title">
                              <h5><?php the_title(''); ?></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; wp_reset_query(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
