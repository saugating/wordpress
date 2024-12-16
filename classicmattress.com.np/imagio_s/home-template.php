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

  <section class="common-banner">
    <div class="banner-slider-container">
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
      </div>
    </div>
  </section>

  <section class="common-about-container">
    <?php
    $the_query = new WP_Query( array(
        'post_type' => 'about',
        'posts_per_page' => -1,
    ) );
    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
    <div class="custom-container about-intro">
      <div class="block-container">
        <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <h2>
                <?php the_field( 'title' )?>
              </h2>
            </div>
            <div class="section-body">
                <?php the_field( 'details' )?>
            </div>
            <div class="section-links">
              <a href="<?php echo site_url(); ?>/about-us/" class="co-btn">More About Us</a>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="section-container">
            <div class="image-container">
                <?php
                    $image = get_field('about_image');
                    if( $image ):

                      // Image variables.
                      $url = $image['url'];
                      $title = $image['title'];
                      $alt = $image['alt'];
                      $caption = $image['caption'];

                      // Thumbnail size attributes.
                      $size = 'section_image_medium';
                      $thumb = $image['sizes'][ $size ];
                      $width = $image['sizes'][ $size . '-width' ];
                      $height = $image['sizes'][ $size . '-height' ];

                      // Begin caption wrap.
                      if( $caption ): ?>
                      <div class="wp-caption">
                      <?php endif; ?>
                      <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />

                      <?php
                      // End caption wrap.
                      if( $caption ): ?>
                      <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-container about-gallery">
      <div class="block-container">
        <?php if( have_rows('gallery') ): ?>
        <?php while( have_rows('gallery') ): the_row(); ?>
        <div class="block-item">
          <div class="section-container">
            <div class="image-container">
                <?php
                    $image = get_sub_field('gallery_image');
                    if( $image ):

                      // Image variables.
                      $url = $image['url'];
                      $title = $image['title'];
                      $alt = $image['alt'];
                      $caption = $image['caption'];

                      // Thumbnail size attributes.
                      $size = 'section_image_medium';
                      $thumb = $image['sizes'][ $size ];
                      $width = $image['sizes'][ $size . '-width' ];
                      $height = $image['sizes'][ $size . '-height' ];

                      // Begin caption wrap.
                      if( $caption ): ?>
                      <div class="wp-caption">
                      <?php endif; ?>
                      <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />

                      <?php
                      // End caption wrap.
                      if( $caption ): ?>
                      <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endwhile; wp_reset_query(); ?>
  </section>

  <section class="common-tabs-container">
    <div class="custom-container remove-top-bottom-padding">
      <div class="tabs-header">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="mattress-tab" data-toggle="tab" href="#mattress" role="tab" aria-controls="mattress" aria-selected="true">Mattress</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pillows-tab" data-toggle="tab" href="#pillows" role="tab" aria-controls="pillows" aria-selected="false">Pillows</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="quilts-tab" data-toggle="tab" href="#quilts" role="tab" aria-controls="quilts" aria-selected="false">Quilts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="cushions-tab" data-toggle="tab" href="#cushions" role="tab" aria-controls="cushions" aria-selected="false">Assessories</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="tabs-body">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="mattress" role="tabpanel" aria-labelledby="mattress-tab">
          <div class="our-products-intro">
            <div class="block-item">
              <div class="section-container">
                <div class="section-title">
                  <h2 class="type-white">Our Products</h2>
                </div>
                <div class="section-body">
                  <?php the_field('products_intro'); ?>
                </div>
                <div class="section-links">
                  <a href="<?php echo site_url(); ?>/products/" class="co-btn">Explore More</a>
                </div>
              </div>
            </div>
            <div class="block-item">
              <div class="card-slider-container">
                <div id="slider-intro">
                  <?php
                  $the_query = new WP_Query( array(
                      'post_type' => 'product',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                          array (
                              'taxonomy' => 'product_category',
                              'field' => 'slug',
                              'terms' => 'mattress',
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
                          <div class="text-container">
                            <div class="section-title">
                              <h5><?php the_title(''); ?></h5>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  <?php endwhile; wp_reset_query(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pillows" role="tabpanel" aria-labelledby="pillows-tab">
          <div class="card-slider-container">
            <div class="card-slider" id="pillows-slider">
              <?php
              $the_query = new WP_Query( array(
                  'post_type' => 'product',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                      array (
                          'taxonomy' => 'product_category',
                          'field' => 'slug',
                          'terms' => 'pillow',
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
                      <div class="text-container">
                        <div class="section-title">
                          <h5><?php the_title(''); ?></h5>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="quilts" role="tabpanel" aria-labelledby="quilts-tab">
          <div class="card-slider-container">
            <div class="card-slider" id="quilts-slider">
              <?php
              $the_query = new WP_Query( array(
                  'post_type' => 'product',
                  'posts_per_page' => -1,
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
                      <div class="text-container">
                        <div class="section-title">
                          <h5><?php the_title(''); ?></h5>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="cushions" role="tabpanel" aria-labelledby="cushions-tab">
          <div class="card-slider-container">
            <div class="card-slider" id="cushions-slider">
              <?php
              $the_query = new WP_Query( array(
                  'post_type' => 'product',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                      array (
                          'taxonomy' => 'product_category',
                          'field' => 'slug',
                          'terms' => 'bedding-accessories',
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
                      <div class="text-container">
                        <div class="section-title">
                          <h5><?php the_title(''); ?></h5>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
