<?php
/**
 * Template Name: FAQ Two Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */


$postid = get_the_ID();


get_header(); ?>


<div id="faq-page">
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
              'terms' => 'faqs',
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

    <section class="common-accordion-container">
      <div class="custom-container medium-width-container">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="locationhead">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#locationcoll" aria-expanded="true" aria-controls="locationcoll">
                  Location
                </button>
              </h2>
            </div>

            <div id="locationcoll" class="collapse show" aria-labelledby="locationhead" data-parent="#accordionExample">
              <section class="faq-section">
                <div class="custom-container medium-width-container">
                  <div class="common-faq-container type-border-bottom">
                    <?php $counts = 1 ; ?>
                    <?php
                    $the_query = new WP_Query( array(
                      'post_type' => 'faq',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array (
                          'taxonomy' => 'faq_category',
                          'field' => 'slug',
                          'terms' => 'location',
                        )
                      ),
                    ) );

                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="faq-item">
                        <div class="text-container">
                          <div class="title">
                            <h4><?php  echo $counts;?>.&nbsp;<?php echo the_title(); ?></h4>
                          </div>
                          <div class="content">
                            <?php echo the_content(); ?>
                          </div>
                        </div>
                      </div>
                      <?php $counts++; endwhile; wp_reset_query(); ?>
                    </div>
                  </div>
              </section>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="familypolicyhead">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#familypolicycoll" aria-expanded="false" aria-controls="familypolicycoll">
                  Family Policy
                </button>
              </h2>
            </div>
            <div id="familypolicycoll" class="collapse" aria-labelledby="familypolicyhead" data-parent="#accordionExample">
              <section class="faq-section">
                <div class="custom-container medium-width-container">
                  <div class="common-faq-container type-border-bottom">
                    <?php $counts = 1 ; ?>
                    <?php
                    $the_query = new WP_Query( array(
                      'post_type' => 'faq',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array (
                          'taxonomy' => 'faq_category',
                          'field' => 'slug',
                          'terms' => 'family-policy',
                        )
                      ),
                    ) );

                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="faq-item">
                        <div class="text-container">
                          <div class="title">
                            <h4><?php  echo $counts;?>.&nbsp;<?php echo the_title(); ?></h4>
                          </div>
                          <div class="content">
                            <?php echo the_content(); ?>
                          </div>
                        </div>
                      </div>
                      <?php $counts++; endwhile; wp_reset_query(); ?>
                    </div>
                  </div>
              </section>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="reservationhead">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#reservationcoll" aria-expanded="false" aria-controls="reservationcoll">
                  Reservations
                </button>
              </h2>
            </div>
            <div id="reservationcoll" class="collapse" aria-labelledby="reservationhead" data-parent="#accordionExample">
              <section class="faq-section">
                <div class="custom-container medium-width-container">
                  <div class="common-faq-container type-border-bottom">
                    <?php $counts = 1 ; ?>
                    <?php
                    $the_query = new WP_Query( array(
                      'post_type' => 'faq',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array (
                          'taxonomy' => 'faq_category',
                          'field' => 'slug',
                          'terms' => 'reservation',
                        )
                      ),
                    ) );

                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="faq-item">
                        <div class="text-container">
                          <div class="title">
                            <h4><?php  echo $counts;?>.&nbsp;<?php echo the_title(); ?></h4>
                          </div>
                          <div class="content">
                            <?php echo the_content(); ?>
                          </div>
                        </div>
                      </div>
                      <?php $counts++; endwhile; wp_reset_query(); ?>
                    </div>
                  </div>
              </section>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="activityhead">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#activitycoll" aria-expanded="false" aria-controls="activitycoll">
                  Activities in Kurintar
                </button>
              </h2>
            </div>
            <div id="activitycoll" class="collapse" aria-labelledby="activityhead" data-parent="#accordionExample">
              <section class="faq-section">
                <div class="custom-container medium-width-container">
                  <div class="common-faq-container type-border-bottom">
                    <?php $counts = 1 ; ?>
                    <?php
                    $the_query = new WP_Query( array(
                      'post_type' => 'faq',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array (
                          'taxonomy' => 'faq_category',
                          'field' => 'slug',
                          'terms' => 'activities',
                        )
                      ),
                    ) );

                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="faq-item">
                        <div class="text-container">
                          <div class="title">
                            <h4><?php  echo $counts;?>.&nbsp;<?php echo the_title(); ?></h4>
                          </div>
                          <div class="content">
                            <?php echo the_content(); ?>
                          </div>
                        </div>
                      </div>
                      <?php $counts++; endwhile; wp_reset_query(); ?>
                    </div>
                  </div>
              </section>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="priceshead">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#pricescoll" aria-expanded="false" aria-controls="pricescoll">
                  Prices of the rooms
                </button>
              </h2>
            </div>
            <div id="pricescoll" class="collapse" aria-labelledby="priceshead" data-parent="#accordionExample">
              <section class="faq-section">
                <div class="custom-container medium-width-container">
                  <div class="common-faq-container type-border-bottom">
                    <?php $counts = 1 ; ?>
                    <?php
                    $the_query = new WP_Query( array(
                      'post_type' => 'faq',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array (
                          'taxonomy' => 'faq_category',
                          'field' => 'slug',
                          'terms' => 'prices',
                        )
                      ),
                    ) );

                    while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                      <div class="faq-item">
                        <div class="text-container">
                          <div class="title">
                            <h4><?php  echo $counts;?>.&nbsp;<?php echo the_title(); ?></h4>
                          </div>
                          <div class="content">
                            <?php echo the_content(); ?>
                          </div>
                        </div>
                      </div>
                      <?php $counts++; endwhile; wp_reset_query(); ?>
                    </div>
                  </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>



<?php get_footer(); ?>
