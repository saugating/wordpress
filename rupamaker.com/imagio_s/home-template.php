<?php

/**
 * Template Name: Home Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2019
 */


$postid = get_the_ID();
get_header(); ?>

<div id="home-page">

  <section class="common-banner">
    <div class="banner-slider-section">
      <div class="banner-slider">
        <div class="banner-item">
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

  <section class="common-imgparallax">
    <div class="custom-container remove-bottom-padding">
      <div class="block-container c2">
        <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <h1>
                <?php the_field('history_title'); ?>
              </h1>
            </div>
            <div class="section-body">
              <p>
                <?php the_field('history_text'); ?>
              </p>
            </div>
            <div class="section-links">
              <a href="<?php echo site_url(); ?>/our-story/" class="co-btn with-hyphen">Read More</a>
            </div>
          </div>
        </div>
        <div class="block-item">
          <div class="image-container imgscroll">
            <img src="<?php the_field('history_front_image'); ?>" alt="">
          </div>
          <div class="image-container imgscroll2">
            <img src="<?php the_field('history_back_image'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="backimage">
      <div class="image-container backtop">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Ico11.png" alt="">
      </div>
    </div>
  </section>

  <section class="common-about">
    <div class="custom-container">
      <div class="section-container center type-small">
        <div class="section-title ">
          <h1>
            <?php the_field('craft_title'); ?>
          </h1>
        </div>
        <div class="section-body">
          <p>
            <?php the_field('craft_text'); ?>
          </p>
        </div>
        <div class="section-links">
          <a href="<?php echo site_url(); ?>/our-crafts/" class="co-btn with-border-bottom">Explore More</a>
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

  <section class="latest-products">
    <div class="custom-container remove-bottom-padding">
      <div class="section-container center type-small">
        <div class="section-title">
          <h1>
            <?php the_field('products_title'); ?>
          </h1>
        </div>
        <div class="section-body">
          <p>
            <?php the_field('products_text'); ?>
          </p>
        </div>
        <div class="section-links">
          <a href="#" class="co-btn with-border-bottom">Explore More</a>
        </div>
      </div>
      <div class="block-container c4 center">
        <?php query_posts('post_type=products&posts_per_page=4'); while(have_posts()): the_post(); ?>
        <div class="block-item">
          <div class="section-container">
            <div class="product-status">
              <?php
                $values = get_field('status');
                if($values)
                {
                	foreach($values as $value)
                	{
                		echo '<p>' . $value . '</p>';
                	}
                }
              ?>
            </div>
            <div class="image-container">
              <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="section-title">
              <h4>
                <a href="<?php the_field('product_url'); ?>" target="_blank">
                  <?php echo the_title(); ?>
                </a>
              </h4>
            </div>
            <div class="section-body">
              <?php
                if(get_field('actual_price'))
                {
                  echo '<p>' . get_field('actual_price') . '</p>';
                }
              ?>
              <p><?php the_field('store_price'); ?></p>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
    <div class="backimage top">
      <div class="image-container backtop">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Ico02.png" alt="">
      </div>
    </div>
  </section>

  <section class="latest-blogs">
    <div class="custom-container remove-bottom-padding">
      <div class="block-container c2">
        <div class="block-item">
          <div class="section-container">
            <div class="section-title">
              <h1>
                <?php the_field('blog_title'); ?>
              </h1>
            </div>
            <div class="section-body">
              <p>
                <?php the_field('blog_text'); ?>
              </p>
            </div>
          </div>
          <?php query_posts('posts_per_page=1'); while(have_posts()): the_post(); ?>
            <div class="section-container blog-card revealtop">
                <div class="image-container">
                  <?php the_post_thumbnail('full'); ?>
                </div>
                <div class="section-title">
                  <p>
                    <?php echo get_the_date(); ?>
                  </p>
                  <h3>
                    <?php echo the_title(); ?>
                  </h3>
                </div>
                <div class="section-body">
                  <p>
                    <?php echo wp_trim_words( get_the_content(), 30,); ?>
                  </p>
                </div>
                <div class="section-links">
                  <a href="<?php the_permalink(); ?>" class="co-btn with-hyphen">Read More</a>
                </div>
              </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
        <?php query_posts('posts_per_page=1&offset=1'); while(have_posts()): the_post(); ?>
          <div class="block-item">
            <div class="section-container blog-card revealtop">
              <div class="image-container">
                <?php the_post_thumbnail('full'); ?>
              </div>
              <div class="section-title">
                <p>
                  <?php echo get_the_date(); ?>
                </p>
                <h3>
                  <?php echo the_title(); ?>
                </h3>
              </div>
              <div class="section-body">
                <p>
                  <?php echo wp_trim_words( get_the_content(), 30,); ?>
                </p>
              </div>
              <div class="section-links">
                <a href="<?php the_permalink(); ?>" class="co-btn with-hyphen">Read More</a>
              </div>
            </div>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
    <div class="backimage bottom">
      <div class="image-container backtop">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Ico09.png" alt="">
      </div>
    </div>
  </section>

  <section class="common-subscribe">
    <div class="custom-container">
      <div class="image-container">
        <img src="<?php the_field('newsletter_image'); ?>" alt="">
      </div>
      <div class="section-container type-medium center">
        <div class="section-title">
          <h1 class="type-white">
            <?php the_field('newsletter_title'); ?>
          </h1>
        </div>
        <div class="section-body add-top-margin">
          <p>
            <?php the_field('newsletter_text'); ?>
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
