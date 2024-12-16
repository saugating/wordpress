<?php
/**
 * Template Name: About Us Template
 *
 * @package WordPress
 */
$postid = get_the_ID();
get_header(); ?>

<div id="about-page">
  <section class="introduction">
    <div class="custom-container">
      <div class="global-container">
        <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <h2>
                Welcome To<br/>Lapha <span>Health Care</span>
              </h2>
            </div>
            <div class="section-body">
              <p>
                More than just treating patients. We support better healthcare.
                We believe that the greatest gift you can give your family and the world is a healthy you.
              </p>
              <p>
                Many people don’t appreciate their health until they aren’t well.
                By then, the poor eating, missed sleep, and lack of exercise catches up and
                then you can’t do much of anything until you recover.
              </p>
              <p>
                Sometimes a reminder of how important health is can be helpful in
                motivating individuals to healthier behaviors.
              </p>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="section-container">
            <div class="image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Intro.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="custom-container remove-top-padding">
    <div class="block-container">
      <div class="block-item">
        <div class="section-container">
          <div class="image-container">
            <!-- <img src="<?php the_field('our_mission_image'); ?>" alt=""> -->
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/S00.webp" alt="">
          </div>
        </div>
      </div>
      <div class="block-item">
        <div class="section-container">
          <div class="section-title">
            <h2>
              <span>Our</span> Mission
            </h2>
          </div>
          <div class="section-body">
            <?php the_field('our_mission'); ?>
            <p>
              More than just treating patients. We support better healthcare.
              We believe that the greatest gift you can give your family and the world is a healthy you.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="block-container">
      <div class="block-item">
        <div class="section-container">
          <div class="image-container">
            <!-- <img src="<?php the_field('our_vision_image'); ?>" alt=""> -->
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Bc00.webp" alt="">
          </div>
        </div>
      </div>
      <div class="block-item">
        <div class="section-container">
          <div class="section-title">
            <h2>
              <span>Our</span> Vision
            </h2>
          </div>
          <div class="section-body">
            <?php the_field('our_vision'); ?>
            <p>
              More than just treating patients. We support better healthcare.
              We believe that the greatest gift you can give your family and the world is a healthy you.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="our-team backdrop">
    <div class="custom-container type-small">
      <div class="section-container">
        <div class="section-title">
          <h2>
            <span>Our</span> Team
          </h2>
        </div>
        <div class="section-body">
          <div class="team-wrapper">
            <?php
            $the_query = new WP_Query( array(
                'post_type' => 'team',
                'posts_per_page' => -1,
            ) );
            while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
            <div class="team-item">
              <div class="section-container">
                <div class="image-container">
                  <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('image_thumb');
                  }
                  else {
                    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
                  }
                  ?>
                </div>
                <div class="section-title">
                  <h5><?php the_title(); ?></h5>
                </div>
                <div class="section-body">
                  <?php the_content(''); ?>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if( have_rows('outro') ): ?>
  <?php while( have_rows('outro') ): the_row(); ?>
  <div class="common-background custom-container" style="background:url('<?php echo the_sub_field('image'); ?>') center no-repeat; background-size: cover;">
    <div class="back-wrapper">
      <div class="section-container">
        <div class="section-title">
          <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <div class="section-body">
          <p><?php the_sub_field('text'); ?></p>
        </div>
        <div class="section-links">
          <a href="<?php echo site_url(); ?>/contact-us/" class="co-btn type-fill">Get Involved</a>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
