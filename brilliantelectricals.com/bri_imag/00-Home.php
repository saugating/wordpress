<?php
/**
* Template Name: Home Template
*
* @package WordPress
*/
$postid = get_the_ID();
get_header(); ?>


<div id="home-page">
  <section class="common-banner">
    <div class="slider-box">
      <div class="home-slider-container">
        <?php if( have_rows('banner') ): ?>

            <div class="home-slider">
              <?php while( have_rows('banner') ): the_row(); ?>
              <div class="banner-inner">
                <div class="image-container">
                  <img src="<?php echo the_sub_field('image')?>" alt="">
                </div>
                <div class="custom-container remove-top-bottom-padding">
                  <div class="section-title">
                    <h1 class="type-white"><?php echo the_sub_field('title')?></h1>
                  </div>
                  <div class="section-links">
                    <a href="<?php echo the_sub_field('url')?>" class="co-btn">Know More</a>
                  </div>
                </div>
                <div class="download-btn">
                  <a href="<?php echo the_sub_field('dld_url')?>" target="_blank">Download Catalogue</a>
                </div>
              </div>
              <?php endwhile; ?>
            </div>

        <?php endif; wp_reset_query(); ?>
      </div>
    </div>
  </section>
  <section class="what-we-do">
    <div class="custom-container">
      <div class="section-container center">
        <div class="section-title">
          <h2 class="type-white">What we do</h2>
        </div>
        <div class="section-body">
          <p>
            <?php echo the_field('what_we_do')?>
          </p>
        </div>
        <div class="block-wrapper">
          <?php if( have_rows('services') ): ?>
            <?php while( have_rows('services') ): the_row(); ?>
              <?php static $counter = 1; ?>
              <div class="item-wrapper">
                <div class="section-container">
                  <div class="counter">
                    <img src="<?php echo the_sub_field('icon')?>" alt="">
                    <!-- 0<?php echo $counter ?> -->
                  </div>
                  <div class="section-title">
                    <?php echo the_sub_field('title')?>
                  </div>
                  <div class="section-body">
                    <?php echo the_sub_field('content')?>
                  </div>
                </div>
              </div>
              <?php $counter++; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="catalog">
    <div class="custom-container">
      <div class="common-flex-container">
        <div class="section-title">
          <h2>
            Latest in Catalog
          </h2>
        </div>
        <div class="section-body">
          <p>
            <?php echo the_field('catalogue_text')?>
          </p>
          <a href="<?php echo site_url(); ?>/products/" class="co-btn">Know More</a>
        </div>
      </div>
      <div class="card-wrapper">
        <?php
        $the_query = new WP_Query( array(
            'post_type' => 'product',
            'posts_per_page' => 8,
        ) );
        while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
        <div class="card-item">
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
              <p>
                <?php $terms = get_the_terms( $post->ID , 'product_category' );
                  foreach ( $terms as $term ) {
                    $term_link = get_term_link( $term, 'product_category' );
                    if( is_wp_error( $term_link ) )
                    continue;
                    echo  $term->name;
                  }
                ?>
              </p>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>
  <section class="featured">
    <?php if( have_rows('featured_product') ): ?>
      <?php while( have_rows('featured_product') ): the_row(); ?>
        <div class="custom-container remove-top-bottom-padding">
          <div class="section-container">
            <div class="image-container">
              <img src="<?php echo the_sub_field('image')?>" alt="">
            </div>
            <div class="section-title">
              <span>
                Featured Product
              </span>
              <h2 class="type-white">
                <?php echo the_sub_field('title')?>
              </h2>
            </div>
            <div class="section-body">
              <p>
                <?php echo the_sub_field('content')?>
              </p>
            </div>
            <div class="section-links">
              <a href="<?php echo the_sub_field('url')?>" class="co-btn">Check Product</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <section class="projects">
    <div class="custom-container">
      <div class="common-flex-container">
        <div class="section-title">
          <h2>
            Projects
          </h2>
        </div>
        <div class="section-body">
          <p>
            <?php echo the_field('projects_text')?>
          </p>
          <a href="<?php echo site_url(); ?>/projects/" class="co-btn">More Projects</a>
        </div>
      </div>
      <div class="slider-box">
        <div class="project-slider-container">
          <div class="project-slider">
            <?php
              $the_query = new WP_Query( array(
                'post_type' => 'project',
                'posts_per_page' => 8,
              ) );
              while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                <div class="project-item">
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
                      <div class="section-container">
                        <div class="inner">
                          <?php the_title(); ?>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
