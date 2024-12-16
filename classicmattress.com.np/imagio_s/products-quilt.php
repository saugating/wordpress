<?php
/**
 * Template Name: Products - Quilt Template
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
          <div class="common-products-container">
            <?php
            $the_query = new WP_Query( array(
              'post_type' => 'product',
              'posts_per_page' => 12,
              'tax_query' => array(
                array (
                  'taxonomy' => 'product_category',
                  'field' => 'slug',
                  'terms' => 'quilt',
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
  </section>

</div>

<?php get_footer(); ?>
