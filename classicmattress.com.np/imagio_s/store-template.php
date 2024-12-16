<?php
/**
 * Template Name: Find A Store Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */
$postid = get_the_ID();
get_header(); ?>

<div id="store-page">

  <section class="common-banner type-banner-small">
    <?php
    $the_query = new WP_Query( array(
        'post_type' => 'banner',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => 'banner_category',
                'field' => 'slug',
                'terms' => 'store',
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

  <section class="store-map-container">
    <div class="custom-container">
      <div class="block-container">
        <div class="block-item">
          <div class="common-tabs-container">
            <div class="tabs-header">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php $counts = 1 ; ?>
                <?php
                $the_query = new WP_Query( array(
                    'post_type' => 'office',
                    'posts_per_page' => -1,
                ) );
                while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                <li class="nav-item">
                  <a class="nav-link" id="tab<?php echo $counts;?>-tab" data-toggle="tab" href="#tab<?php echo $counts;?>" role="tab" aria-controls="tab<?php echo $counts;?>" aria-selected="true">
                    <?php the_title(''); ?>
                    <ul>
                        <li>
                        <?php the_field('office_type'); ?>
                        </li>
                        <li>
                        <?php the_field('location'); ?>
                        </li>
                        <?php if( have_rows('contacts') ): ?>
                            <?php while( have_rows('contacts') ): the_row(); ?>
                              <li>
                                <?php the_sub_field('contact_number'); ?>
                              </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <li>
                        <?php the_field('email_address'); ?>
                        </li>
                    </ul>
                  </a>
                </li>
                <?php $counts++; endwhile; wp_reset_query(); ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="common-tabs-container">
            <div class="tabs-body type-small-padding">
              <div class="tab-content" id="myTabContent">
                <?php
                $the_query = new WP_Query( array(
                    'post_type' => 'office',
                    'posts_per_page' => 1,
                ) );
                while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                  <div class="tab-pane fade show active">
                    <div class="section-container">
                      <iframe src="<?php echo the_field('google_maps'); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                  </div>
                <?php endwhile; wp_reset_query(); ?>
                <?php $counts = 1 ; ?>
                <?php
                $the_query = new WP_Query( array(
                    'post_type' => 'office',
                    'posts_per_page' => -1,
                ) );
                while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                <div class="tab-pane fade" id="tab<?php echo $counts;?>" role="tabpanel" aria-labelledby="tab<?php echo $counts;?>-tab">
                  <div class="section-container">
                    <iframe src="<?php echo the_field('google_maps'); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                  </div>
                </div>
                <?php $counts++; endwhile; wp_reset_query(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
