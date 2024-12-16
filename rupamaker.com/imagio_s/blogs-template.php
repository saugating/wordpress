<?php

/**
 * Template Name: Our Blogs Template
 *
 * @package WordPress
 * @subpackage Imagio Creations
 * @since Imagio Creations 2019
 */


$postid = get_the_ID();
get_header(); ?>

<div id="our-blogs-page">

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

  <section class="common-blog-layout">
    <div class="custom-container remove-bottom-padding">
      <div class="block-container">
        <div class="block-item">
          <?php query_posts('posts_per_page=-1'); while(have_posts()): the_post(); ?>
          <div class="section-container blog-card revealtop">
            <div class="image-container">
              <?php the_post_thumbnail('custom_blog_image'); ?>
            </div>
            <div class="section-title">
              <p><?php echo get_the_date(); ?><span><?php echo get_the_author(); ?></span></p>
              <h3>
                <?php echo the_title(); ?>
              </h3>
            </div>
            <div class="section-body">
              <?php echo wp_trim_words( get_the_content(), 50,); ?>
            </div>
            <div class="section-links type-with-sharing">
              <div class="blog-link">
                <a href="<?php the_permalink(); ?>" class="co-btn with-hyphen">Read More</a>
              </div>
              <div class="share-link">
                <ul>
                  <li>
                    <a href="#">
                      <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-facebook-bg.svg" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-whatsapp-bg.svg" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
        <div class="block-item">
          <div class="section-container">
            <div class="search-container">
              <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div>
                  <input type="text" required placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                  <input type="submit" class="searchico" value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
                </div>
              </form>
            </div>
            <div class="blog-snippets">
              <div class="section-title">
                <h4>Latest Blogs</h4>
              </div>
              <div class="section-body">
                <?php query_posts('posts_per_page=3'); while(have_posts()): the_post(); ?>
                  <div class="snippet-container">
                    <div class="image-container">
                      <?php the_post_thumbnail('custom_blog_thumb'); ?>
                    </div>
                    <div class="section-title">
                      <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                      <p><?php echo get_the_date(); ?></p>
                    </div>
                  </div>
                <?php endwhile; wp_reset_query(); ?>
              </div>
            </div>
            <div class="blog-categories">
              <div class="section-title">
                <h4>Categories</h4>
              </div>
              <div class="section-body">
                <ul>
                  <?php $args = array(
                    'hide_empty' => 1,
                    'show_count' => 1
                    );
                    echo wp_list_cats($args); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
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
