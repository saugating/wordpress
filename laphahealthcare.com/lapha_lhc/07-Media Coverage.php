<?php
/**
 * Template Name: Media Coverage Template
 *
 * @package WordPress
 */
$postid = get_the_ID();
get_header(); ?>

<div id="media-page">
  <section class="media-wrapper">
    <div class="custom-container type-small">
      <div class="block-container">
        <?php
        $the_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => -1,
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
                the_post_thumbnail('image_small');
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
              <a href="<?php the_permalink(); ?>" class="co-btn">Read Now</a>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>

      <!-- <div class="common-pagination type-blogs">
        <ul>
          <li class="active">
            <a href="#">1</a>
          </li>
          <li>
            <a href="#">2</a>
          </li>
          <li>
            <a href="#">3</a>
          </li>
        </ul>
      </div> -->
    </div>
  </section>
</div>

<?php get_footer(); ?>
