<?php
/**
* Template Name: Home Template
*
* @package WordPress
*/
$postid = get_the_ID();
get_header(); ?>


<div id="home-page">
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
            </div>
            <div class="section-links">
              <a href="<?php echo site_url(); ?>/about/" class="co-btn">Learn More</a>
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
  <section class="our-mission">
    <div class="custom-container center">
      <div class="section-container">
        <div class="section-title">
          <h2>
            <!-- <?php the_field('intro_title') ;?> -->
            <!-- Medical, Dental, and Mental health care. -->
            Every single journey of your life starts with a healthy mind and a healthy journey.
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="backdrop">
    <div class="our-projects">
      <div class="custom-container">
        <div class="section-container">
          <div class="section-title">
            <h2>
              <span>Our</span> Team
            </h2>
          </div>
          <div class="section-body">
            <p>
              Together making a positive impact
            </p>
            <a href="<?php echo site_url(); ?>/projects/" class="co-btn">All Members</a>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-box">
      <div class="banner-slider-container custom-container remove-right-padding remove-top-padding">
        <div class="banner-slider">
          <?php
          $the_query = new WP_Query( array(
            'post_type' => 'team',
            'posts_per_page' => -10,
            // 'tax_query' => array(
            //     array (
            //         'taxonomy' => 'category',
            //         'field' => 'slug',
            //         'terms' => 'project',
            //     )
            // ),
          ) );
          while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
          <div class="banner-item">
            <div class="image-container">
              <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('section_image_medium');
              }
              else {
                echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
              }
              ?>
            </div>
            <div class="text-container">
              <div class="section-container">
                <div class="section-title">
                  <h4><?php echo the_title(); ?></h1>
                  </div>
                  <div class="section-body">
                    <?php echo the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="blog no-back">
    <div class="custom-container">
      <div class="section-container">
        <div class="section-title">
          <h2>
            <span>Media</span> Coverages
          </h2>
        </div>
        <div class="section-body">
          <p>
            National and International News
          </p>
          <a href="<?php echo site_url(); ?>/blogs/" class="co-btn">All News</a>
        </div>
      </div>
      <div class="block-container">
        <div class="block-item">
          <?php
          $the_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'tax_query' => array(
              array (
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'media-coverage',
              )
            ),
          ) );
          while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
          <div class="section-container">
            <div class="image-container">
              <a href="<?php the_permalink(); ?>">
                <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('image_small');
                }
                else {
                  echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
                }
                ?>
              </a>
            </div>
            <div class="section-title">
              <h4>
                <a href="<?php the_permalink(); ?>">
                  <?php echo the_title(); ?>
                </a>
              </h4>
            </div>
            <div class="section-links">
              <a href="<?php the_permalink(); ?>" class="co-btn">Read More</a>
            </div>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
      <div class="block-item">
        <?php
        $the_query = new WP_Query( array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'offset' => 1,
          'tax_query' => array(
            array (
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => 'media-coverage',
            )
          ),
        ) );
        while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
        <div class="blog-card-ver">
          <div class="image-container">
            <a href="<?php the_permalink(); ?>">
              <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('image_thumb');
              }
              else {
                echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
              }
              ?>
            </a>
          </div>
          <div class="section-container">
            <div class="section-title">
              <h4>
                <a href="<?php the_permalink(); ?>">
                  <?php echo the_title(); ?>
                </a>
              </h4>
            </div>
            <div class="section-links">
              <a href="<?php the_permalink(); ?>" class="co-btn">Read More</a>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</div>
</section>
<section class="blog">
  <div class="custom-container">
    <div class="section-container">
      <div class="section-title">
        <h2>
          <span>Our</span> Blogs
        </h2>
      </div>
      <div class="section-body">
        <p>
          Stay updated with us
        </p>
        <a href="<?php echo site_url(); ?>/blogs/" class="co-btn">All Blogs</a>
      </div>
    </div>
    <div class="block-container">
      <div class="block-item">
        <?php
        $the_query = new WP_Query( array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'tax_query' => array(
            array (
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => 'blog',
            )
          ),
        ) );
        while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
        <div class="section-container">
          <div class="image-container">
            <a href="<?php the_permalink(); ?>">
              <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('image_small');
              }
              else {
                echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
              }
              ?>
            </a>
          </div>
          <div class="section-title">
            <h4>
              <a href="<?php the_permalink(); ?>">
                <?php echo the_title(); ?>
              </a>
            </h4>
          </div>
          <div class="section-links">
            <a href="<?php the_permalink(); ?>" class="co-btn">Read More</a>
          </div>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <div class="block-item">
      <?php
      $the_query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => 1,
        'tax_query' => array(
          array (
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'blog',
          )
        ),
      ) );
      while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
      <div class="blog-card-ver">
        <div class="image-container">
          <a href="<?php the_permalink(); ?>">
            <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('image_thumb');
            }
            else {
              echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/placeholder/placeholder-image.webp" />';
            }
            ?>
          </a>
        </div>
        <div class="section-container">
          <div class="section-title">
            <h4>
              <a href="<?php the_permalink(); ?>">
                <?php echo the_title(); ?>
              </a>
            </h4>
          </div>
          <div class="section-links">
            <a href="<?php the_permalink(); ?>" class="co-btn">Read More</a>
          </div>
        </div>
      </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>
</div>
</section>
<section class="map">
  <div class="map-item custom-container">
    <div class="common-flex-container">
      <div class="section-title">
        <h2>
          <span>Our</span> Location
        </h2>
      </div>
      <div class="section-body">
        <p>
          Give us a visit
        </p>
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1765.8189984647738!2d85.31613350590997!3d27.72846124390257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191ed757779f%3A0xa3fb7fed922d73e8!2sSamakhusi%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1684494964645!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
</div>

<?php get_footer(); ?>
