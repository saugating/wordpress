<?php
/**
 * Template Name: Career Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2021
 * @author Imagio Creations
 */
$postid = get_the_ID();
get_header(); ?>

<div id="careers-page">

  <section class="common-banner type-banner-small">
    <?php
    $the_query = new WP_Query( array(
        'post_type' => 'banner',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => 'banner_category',
                'field' => 'slug',
                'terms' => 'career',
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

  <section class="why-join-us">
    <div class="custom-container">
      <div class="section-container why-join-box">
        <div class="section-title center larger-margin-bottom">
          <h3>Why Join Us</h3>
        </div>
        <div class="common-card-block-container">
          <?php $counts = 1 ; ?>
          <?php if( have_rows('why_join_us') ): ?>
          <?php while( have_rows('why_join_us') ): the_row(); ?>
            <div class="card-block-item">
              <div class="section-container">
                <?php if( have_rows('join_item') ): ?>
                  <?php
                    while( have_rows('join_item') ): the_row(); ?>
                    <div class="section-title">
                      <span><?php echo $counts;?></span>
                      <h4><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="section-body">
                      <p>
                        <?php the_sub_field('details'); ?>
                      </p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php $counts++; endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="career-gallery">
    <div class="custom-container remove-top-bottom-padding">
      <div class="block-container">
        <?php if( have_rows('gallery') ): ?>
        <?php while( have_rows('gallery') ): the_row(); ?>
        <div class="block-item">
          <div class="section-container">
            <div class="image-container">
              <img src="<?php echo the_sub_field('gallery_item'); ?>" alt="">
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section>
    <div class="custom-container">
      <div class="common-shadowbox">
        <div class="section-container">
          <div class="section-title center">
            <h3>Want to Join Classic Mattress</h3>
          </div>
          <div class="section-body large-margin">
            <div class="career-item-container">
              <?php
              $the_query = new WP_Query( array(
                  'post_type' => 'career',
                  'posts_per_page' => -1,
              ) );
              while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                <div class="career-item">
                <div class="section-title">
                  <h4><?php the_title(''); ?></h4>
                </div>
                <div class="section-container">
                  <div class="section-body">
                    <?php echo wp_trim_words( get_the_content(), 25 ); ?>
                  </div>
                  <div class="section-links">
                    <a href="<?php the_permalink(); ?>" class="co-btn type-fill">Apply Now</a>
                  </div>
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
