<?php
/**
 * Template Name: FAQ Template
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

    <section class="common-tabs-container">
      <div class="custom-container remove-bottom-padding medium-width-container">
        <div class="common-tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="true">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="familypolicy-tab" data-toggle="tab" href="#familypolicy" role="tab" aria-controls="familypolicy" aria-selected="false">Family Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="reservations-tab" data-toggle="tab" href="#reservations" role="tab" aria-controls="reservations" aria-selected="false">Reservations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="activities-tab" data-toggle="tab" href="#activities" role="tab" aria-controls="activities" aria-selected="false">Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="prices-tab" data-toggle="tab" href="#prices" role="tab" aria-controls="prices" aria-selected="false">Prices</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="common-tab-container">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="location" role="tabpanel" aria-labelledby="location-tab">
            <section class="faq-section">
              <div class="custom-container medium-width-container">
                <div class="common-faq-container">
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
          <div class="tab-pane fade" id="familypolicy" role="tabpanel" aria-labelledby="familypolicy-tab">
            <section class="faq-section">
              <div class="custom-container medium-width-container">
                <div class="common-faq-container">
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
          <div class="tab-pane fade" id="reservations" role="tabpanel" aria-labelledby="reservations-tab">
            <section class="faq-section">
              <div class="custom-container medium-width-container">
                <div class="common-faq-container">
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
          <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-tab">
            <section class="faq-section">
              <div class="custom-container medium-width-container">
                <div class="common-faq-container">
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
          <div class="tab-pane fade" id="prices" role="tabpanel" aria-labelledby="prices-tab">
            <section class="faq-section">
              <div class="custom-container medium-width-container">
                <div class="common-faq-container">
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
    </section>

</div>



<?php get_footer(); ?>
