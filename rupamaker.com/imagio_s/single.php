<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

  <div id="single-blog-page">

    <section class="common-banner">
      <div class="banner-slider-section">
        <div class="banner-slider">
          <div class="banner-item type-small">
            <div class="image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder/Banner01.png" alt=""/>
            </div>
            <div class="text-container center">
              <div class="custom-container">
                <div class="section-container">
                  <div class="section-title">
                    <h2 class="type-white">Our Blogs</h2>
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
            <div class="section-container blog-card revealtop">
              <div class="image-container">
                <?php the_post_thumbnail('section_image'); ?>
              </div>
              <div class="section-title">
                <p><?php echo get_the_date(); ?><span><?php echo get_the_author(); ?></span></p>
                <h3>
                  <?php echo the_title(); ?>
                </h3>
              </div>
              <div class="section-body">
                <?php echo get_the_content(); ?>
              </div>
              <div class="section-links type-next-prev">
                <div>
                  <?php previous_post_link( '<a class="co-btn with-hyphen">Previous</a>'); ?>
                  <?php $prev_post = get_previous_post(); if (!empty( $prev_post )): ?>
                  <h4><a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                  <?php echo $prev_post->post_title; ?></a></h4>
                  <?php endif; ?>
                </div>
                <div>
                  <?php next_post_link( '<a class="co-btn with-hyphen-right">Next</a>'); ?>
                  <?php $next_post = get_next_post(); if (!empty( $next_post )): ?>
                  <h4><a href="<?php echo get_permalink( $next_post->ID ); ?>">
                  <?php echo $next_post->post_title; ?></a></h4>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="block-item">
            <div class="section-container">
              <div class="search-container">
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <div>
                    <input type="text" placeholder="Search" required value="<?php echo get_search_query(); ?>" name="s" id="s" />
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

<?php endif; ?>

<?php get_footer(); ?>
