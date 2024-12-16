<?php

/**
 * Template Name: Our Crafts Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2019
 */


$postid = get_the_ID();
get_header(); ?>

<div id="our-crafts-page">

  <section class="common-banner">
    <div class="banner-slider-section">
      <div class="banner-slider">
        <div class="banner-item type-small">
          <div class="image-container">
            <img src="<?php the_field('banner_image'); ?>" alt=""/>
          </div>
          <div class="text-container center">
            <div class="custom-container">
              <div class="section-container">
                <div class="section-title">
                  <h2 class="type-white"><?php echo the_title(); ?></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="background-overlay">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="crafts-layout">
    <div class="custom-container remove-bottom-padding">
      <div class="section-container center type-small">
        <div class="section-title ">
          <h1>
            <?php the_field('crafts_title'); ?>
          </h1>
        </div>
        <div class="section-body">
          <?php the_field('crafts_text'); ?>
        </div>
      </div>
      <?php query_posts('post_type=crafts&posts_per_page=-1'); while(have_posts()): the_post(); ?>
        <div class="block-container">
        <div class="block-item">
          <div class="section-container">
            <div class="image-container revealtop">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <h4><?php echo the_title(); ?></h4>
              <div class="marker">
              </div>
            </div>
            <div class="section-body">
              <?php echo the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </section>

  <section class="common-subscribe">
    <div class="custom-container">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Subs.jpg" alt="">
      </div>
      <div class="section-container type-medium center">
        <div class="section-title">
          <h1 class="type-white">
            Subscribe
          </h1>
        </div>
        <div class="section-body add-top-margin">
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes,
            nascetur ridiculus mus.
          </p>
        </div>
        <div class="section-links">
          <?php echo do_shortcode('[contact-form-7 id="9" title="Newsletter"]'); ?>
        </div>
      </div>
    </div>
    <div class="backimage before-footer">
      <div class="image-container backtop">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Ico12.png" alt="">
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
