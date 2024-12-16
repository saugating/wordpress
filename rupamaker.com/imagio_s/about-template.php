<?php

/**
 * Template Name: Our Story Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2019
 */


$postid = get_the_ID();
get_header(); ?>

<div id="our-story-page">

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
                  <h2 class="type-white"><?php the_field('banner_title'); ?></h2>
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

  <section class="about-rupa">
    <div class="custom-container remove-bottom-padding">
      <div class="block-container c2">
        <div class="block-item">
          <div class="section-title">
            <h1>
              <?php the_field('about_rupa_title'); ?>
            </h1>
          </div>
          <div class="section-body">
            <p>
              <?php the_field('about_rupa_text'); ?>
            </p>
          </div>
          <div class="image-container revealtop">
            <img src="<?php the_field('about_rupa_makers_image_left'); ?>" alt="">
          </div>
        </div>
        <div class="block-item">
          <div class="image-container revealtop">
            <img src="<?php the_field('about_rupa_makers_image_right'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-about">
    <div class="custom-container">
      <div class="section-container center type-small">
        <div class="section-title ">
          <h1>
            <?php the_field('about_title'); ?>
          </h1>
        </div>
        <div class="section-body">
          <p>
            <?php the_field('about_text'); ?>
          </p>
        </div>
      </div>
    </div>
    <div class="block-container craft">
      <div class="block-item">
        <?php query_posts('post_type=aboutgallery&posts_per_page=2'); while(have_posts()): the_post(); ?>
          <div class="section-container">
            <div class="image-container craftitema revealtop">
              <?php the_post_thumbnail('full'); ?>
            </div>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
      <div class="block-item">
        <?php query_posts('post_type=aboutgallery&posts_per_page=2&offset=2'); while(have_posts()): the_post(); ?>
          <div class="section-container">
            <div class="image-container craftitema revealtop">
              <?php the_post_thumbnail('full'); ?>
            </div>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
      <div class="block-item">
        <?php query_posts('post_type=aboutgallery&posts_per_page=2&offset=4'); while(have_posts()): the_post(); ?>
          <div class="section-container">
            <div class="image-container craftitema revealtop">
              <?php the_post_thumbnail('full'); ?>
            </div>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>

  <section class="common-history">
    <div class="custom-container remove-bottom-padding">
      <div class="section-container center type-small">
        <div class="section-title ">
          <h1>
            <?php the_field('history_title'); ?>
          </h1>
        </div>
        <div class="section-body">
          <p>
            <?php the_field('history_text'); ?>
          </p>
        </div>
      </div>
      <div class="block-container c2">
        <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <h3>
                <?php the_field('history_sub_title'); ?>
              </h3>
            </div>
            <div class="section-body">
              <p>
                <?php the_field('history_sub_text'); ?>
              </p>
            </div>
            <div class="section-links">
              <a href="#" class="history-toggle co-btn with-hyphen">Read More</a>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="image-container revealtop">
            <img src="<?php the_field('history_sub_image'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-values">
    <div class="custom-container">
      <div class="section-container center type-small">
        <div class="section-title ">
          <h1>
            <?php the_field('value_title'); ?>
          </h1>
        </div>
        <div class="section-body">
          <p>
            <?php the_field('value_text'); ?>
          </p>
        </div>
      </div>
      <div class="block-container c3">
        <?php query_posts('post_type=values&posts_per_page=-1'); while(have_posts()): the_post(); ?>
          <div class="block-item">
          <div class="section-container">
            <div class="image-container">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="section-title">
              <span>01</span>
              <h4>
                <?php echo the_title(); ?>
              </h4>
            </div>
            <div class="section-body">
              <?php echo the_content(); ?>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
